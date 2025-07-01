<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\Transaction;
use App\Imports\AgentsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Log;

class AgentCtrl extends Controller
{
    public function importExcelData(Request $request)
    {
        set_time_limit(0);
        $request->validate([
            'import_db' => 'required|file|mimes:xls,xlsx',
        ]);

        try {
            Excel::import(new AgentsImport, $request->file('import_db'));

            $latestAgent = Agent::latest('agent_id')->first();

            if (!$latestAgent) {
                return response()->json(['message' => 'No agents found in the database.'], 404);
            }


                $transactionDate = now()->toDateString();
                $createdBy = 'Zyk Broncano';

                $transaction = Transaction::create([
                'branch' => $latestAgent->branch,
                'transaction_date' => $transactionDate,
                'created_by' => $createdBy,
            ]);

            $this->randomRaf();

            return response()->json(['message' => 'File imported successfully!'], 200);
        } catch (\Exception $e) {
            Log::error('Excel Import Error: ' . $e->getMessage());
            return response()->json(['message' => 'Failed to import file.'.$e->getMessage(), 'error' => $e->getMessage()], 500);
        }
    }

    public function transactionRecord(Request $request)
    {
        $transaction = Transaction::all();
        return response()->json($transaction);
    }

    public function getAgents(){

        $agents = Agent::orderBy('agent_id','ASC')
            ->get();

        if($agents->count() > 0){

            foreach($agents as $agent){
                $agent->ticket_numbers = json_encode($agent->ticket_numbers);
            }
            return response()->json($agents);
        }
        return response()->json([]);
    }

    public function randomRaf()
    {
        set_time_limit(0);
        $agents = Agent::all();
        $Ticket_total = $agents->sum('ticket');
        $ticket_range = range(1, $Ticket_total);
        shuffle($ticket_range);

        $assigned_Ticket = [];
        $used_tickets = [];
        $min_gap = 5;

        try{
            DB::beginTransaction();

            foreach ($agents as $agent) {
                $ticket_numbers = [];
                    for ($i = 0; $i < $agent->ticket; $i++)
                    {
                        for ($j = 0; $j < count($ticket_range); $j++)
                        {
                            $value = $ticket_range[$j];
                                if ( !in_array($value, $used_tickets) &&
                                    (empty($ticket_numbers) || abs(end($ticket_numbers) - $value) >= $min_gap))
                                {
                                    $ticket_numbers[] = $value;
                                    $used_tickets[] = $value;
                                    array_splice($ticket_range, $j, 1);
                                    break;
                                }
                        }
                    }

                Agent::where('agent_id', $agent->agent_id)
                    ->update([
                        'ticket_numbers' => json_encode($ticket_numbers),
                    ]);

                $assigned_Ticket[] = [
                    'agent_id' => $agent->agent_id,
                    'agent_name' => $agent->agent_name,
                    'agency_name' => $agent->agency_name,
                    'agent_level' => $agent->agent_level,
                    'branch' => $agent->branch,
                    'ticket' => $agent->ticket,
                    'ticket_numbers' => '[' . implode(' , ', $ticket_numbers) . ']'
                ];
            }

            DB::commit();
            return response()->json($assigned_Ticket);
        } catch (QueryException $e){
            DB::rollBack();
            return response()->json(['message' => $e->getMessage(), 'error' => $e->getMessage()], 500);
        }
    }

    public function viewBranch($brancname)
    {
        $filteredAgents = Agent::where('branch', '=', $brancname)->get();
        return response()->json($filteredAgents);
    }

    public function printListOFBranch($brancname){
        set_time_limit(0);
        ini_set('memory_limit', '-1');
        $query = Agent::where('branch', '=', $brancname)
        ->orderBy('ticket', 'ASC')
        ->get();
        $query = $query->sortBy('agent_name')->values();


        $arrdata = [];

        foreach ($query as $agent) {
            $ticketNumbers = is_string($agent->ticket_numbers)
                ? json_decode($agent->ticket_numbers, true)
                : (is_array($agent->ticket_numbers) ? $agent->ticket_numbers : []);

            sort($ticketNumbers);


            if (is_array($ticketNumbers)) {
                sort($ticketNumbers);
            } else {
                $ticketNumbers = [];
            }

            if(count($ticketNumbers) > 0){
                foreach($ticketNumbers as $ticket){
                    $arrdata[] = [
                        'agent_name' => $agent->agent_name,
                        'agency_name' => $agent->agency_name,
                        'agent_level' => $agent->agent_level,
                        'branch' => $agent->branch,
                        'ticket_number' => $ticket,
                    ];
                }
            }
        }

        $page = 1;
        foreach ($arrdata as $key => $value) {
            if (($key + 1) % 38 == 0) {
                $page++;
            }
        }

        $pdf= Pdf::loadView('Printing.printBranch', ['data'=> $arrdata, 'total_pages' => $page]);
        return $pdf->stream('invoice.pdf');

    }

    public function printBranch($brancname){
        set_time_limit(0);
        ini_set('memory_limit', '-1');
        $query = Agent::where('branch', '=', $brancname)
        ->orderBy('ticket', 'ASC')
        ->get();
        $query = $query->sortBy('agent_name')->values();


        $arrdata = [];

        foreach ($query as $agent) {
            $ticketNumbers = is_string($agent->ticket_numbers)
                ? json_decode($agent->ticket_numbers, true)
                : (is_array($agent->ticket_numbers) ? $agent->ticket_numbers : []);

            sort($ticketNumbers);


            if (is_array($ticketNumbers)) {
                sort($ticketNumbers);
            } else {
                $ticketNumbers = [];
            }

            if(count($ticketNumbers) > 0){
                foreach($ticketNumbers as $ticket){
                    $arrdata[] = [
                        'agent_name' => $agent->agent_name,
                        'agency_name' => $agent->agency_name,
                        'agent_level' => $agent->agent_level,
                        'branch' => $agent->branch,
                        'ticket_number' => $ticket,
                    ];
                }
            }
        }

        $pdf= Pdf::loadView('Printing.printTicketBranch', ['data'=> $arrdata]);
        return $pdf->stream('invoice.pdf');

    }

    public function printAgent($id){
        $query = Agent::where('agent_id', $id)->first();

        if ($query) {
            $ticketNumbers = is_string($query->ticket_numbers)
                ? json_decode($query->ticket_numbers, true)
                : $query->ticket_numbers;

            if (is_array($ticketNumbers)) {
                sort($ticketNumbers);
                $query->ticket_numbers = $ticketNumbers;
            }
        }

        $pdf= Pdf::loadView('Printing.printAgent', ['data'=> $query]);
        return $pdf->stream('invoice.pdf');
    }
}

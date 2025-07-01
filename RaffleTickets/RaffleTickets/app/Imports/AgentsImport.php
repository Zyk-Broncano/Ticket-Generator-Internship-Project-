<?php

namespace App\Imports;

use App\Models\Agent;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;


class AgentsImport implements ToModel {
    private $rowIndex = 0;

    public function model(array $row)
        {
            if ($this->rowIndex == 0) {
                $this->rowIndex++;
                return null;
            }

            return new Agent([
            'agent_name'   => $row[0] ?? null,
            'agency_name'  => $row[1] ?? null,
            'agent_level'  => $row[2] ?? null,
            'branch'       => $row[3] ?? null,
            'ticket'       => intval($row[4] ?? 0),
            'ticket_numbers' => '[]',
            ]);
        }

}

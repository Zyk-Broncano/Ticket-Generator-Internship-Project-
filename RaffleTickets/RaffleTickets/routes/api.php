<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AgentCtrl;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::prefix('agent')->group(function () {

    Route::get('/import', [AgentCtrl::class,'importExcelData']);
    Route::post('/import', [AgentCtrl::class,'importExcelData']);

    Route::post('/trans', [AgentCtrl::class,'transactionRecord']);
    Route::get('/trans', [AgentCtrl::class,'transactionRecord']);

    Route::get('/agentsRaffle/{branchname}', [AgentCtrl::class, 'viewBranch']);
    Route::get('/agentsRaffle', [AgentCtrl::class, 'getAgents']);

    Route::get('/printRaffleListBranch/{branchname}', [AgentCtrl::class, 'printListOFBranch']);
    Route::get('/printRaffleBranch/{branchname}', [AgentCtrl::class, 'printBranch']);
    Route::get('/printRaffleAgent/{id}', [AgentCtrl::class, 'printAgent']);

});

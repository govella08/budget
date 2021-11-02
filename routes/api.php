<?php

use App\Http\Controllers\api\v1\IncomeController;
use App\Http\Controllers\api\v1\BudgetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResource('incomes', IncomeController::class);
Route::group(['namespace' => 'Api'], function() {
    // Income routes
    Route::get('incomes', [IncomeController::class, 'index']);
    Route::get('incomes/total', [IncomeController::class, 'totalIncome']);

    // Budget routes
    Route::get('budgets', [BudgetController::class, 'index']);
    Route::get('budgets/{id}', [BudgetController::class, 'incomesForBudget']);
});
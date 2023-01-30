<?php

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

Route::get('/employees',[App\Http\Controllers\EmployeeController::class,'index']);

Route::post('/save',[\App\Http\Controllers\EmployeeController::class,'store']);

Route::put('/update/{id}',[\App\Http\Controllers\EmployeeController::class,'update']);

Route::delete('/delete/{id}',[\App\Http\Controllers\EmployeeController::class,'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

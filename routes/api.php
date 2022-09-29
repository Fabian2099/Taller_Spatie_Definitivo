<?php

use App\Http\Controllers\User2Controller;
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

Route::get('/usuario',[User2Controller::class,'index']);

Route::post('/usuario',[User2Controller::class,'store']);

Route::get('/usuario/{id}',[User2Controller::class,'show']);

Route::put('/usuario/{id}',[User2Controller::class,'update']);

Route::delete('/usuario/{id}',[User2Controller::class,'destroy']);

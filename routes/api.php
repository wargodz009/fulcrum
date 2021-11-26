<?php

use App\Http\Controllers\AmountController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
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

Route::apiResource('/property', PropertyController::class);
Route::apiResource('/user', UserController::class);
Route::apiResource('/bid', BidController::class);
Route::apiResource('/amount', AmountController::class);


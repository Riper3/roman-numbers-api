<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RomanNumberController;

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

Route::post('/numbertoroman', [RomanNumberController::class, 'request']);
Route::post('/latestroman', [RomanNumberController::class, 'latest']);
Route::post('/toproman', [RomanNumberController::class, 'top']);

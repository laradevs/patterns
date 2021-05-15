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

Route::get('/data', [\App\Http\Controllers\DocumentsController::class,'create']);
Route::post('/change/{document}', [\App\Http\Controllers\DocumentsController::class,'changeStatus'])
    ->where(['document'=>"[0-9]+"]);


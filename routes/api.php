<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamioneroController;
use App\Http\Controllers\PaqueteControler;

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

Route::resource('camionero', CamioneroController::class, ['except' => ['create', 'edit']]);
Route::resource('paquete', PaqueteControler::class, ['except' => ['create', 'edit']]);

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventosController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contato', [HomeController::class, 'contato']);

Route::get('/eventos/criar', [EventosController::class, 'create']);
Route::get('/eventos', [EventosController::class, 'create']);
Route::post('/eventos', [EventosController::class, 'store']);

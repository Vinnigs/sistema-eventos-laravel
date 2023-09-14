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

Route::get('/eventos/criar', [EventosController::class, 'index']);
Route::get('/eventos', [EventosController::class, 'index']);

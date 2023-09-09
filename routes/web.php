<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\EventoController;

Route::get('/', [EventoController::class, 'index']);
Route::get('/eventos/criar', [EventoController::class, 'create']);


Route::get('/contato', function(){

    return view('contato');

});

//Query String
Route::get('/produtos', function(){

    $pesquisa = request('categoria'); //Armazena o valor da Query String se o parâmetro for informado na URL

    return view('produtos', [
        'pesquisa' => $pesquisa
    ]);

});
//Resgatando parâmetros de URL
Route::get('/produtos_teste/{id?}', function($id = 'Valor Qualquer'){   //Definindo se o parâmetro é opcional '{id?}' e valor de parâmetro padrão caso não houver parâmetro

    return view('produto', [
        'id' => $id
    ]);

});

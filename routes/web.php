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

Route::get('/', function () {

    $nome = 'Vinicius';
    $idade = 22;
    $profissao = 'Programador';
    $arr = ['Francisco', 'Rodolfo', 'Lopes da Silva', 'Pedro', 'Rodriguinho', 'Teixeira', 'Bruno Francisneldo', 'Gustavo Tavares', 'Rodrigo Neto', 'Neto Craque', 'Moreira Nero', 'Joaquim da Silva'];

    return view('welcome', [
        'nome' => $nome,
        'idade' => $idade,
        'profissao' => $profissao,
        'arr' => $arr
    ]);
});


Route::get('/contato', function(){

    return view('contato');

});


Route::get('/produtos', function(){

    return view('produtos');

});

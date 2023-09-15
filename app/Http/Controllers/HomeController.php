<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class HomeController extends Controller
{
    public function index(){

        $eventos = Evento::all();

        return view('inicio', [
            'eventos' => $eventos
        ]);
    }

    public function contato(){
        return view('contato');
    }
}

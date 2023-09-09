@extends('layouts.main')

@section('title','Início')

@section('content')

    <h1>Página Inicial</h1>

    <br><br>

    <h3>Seja Bem-Vindo {{ $nome }}</h3>
    <p>Idade: {{ $idade }} anos</p>
    <hr>
    <p>Profissão: {{ $profissao }}</p>

    <br><br>

    <h3>Loop de nomes</h3>
    @if(count($arr) >= 10)
        @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}}</p>
        @endfor
        <p style="color:blue;">Contagem de nomes: {{$i}}</p>
    @else
        <p>Não há nomes o suficiente para ser exibido.</p>
    @endif

    {{-- Abrindo comando PHP no Blade --}}
    @php
        $txt = 'Olá mundo doido da porra';
        echo $txt;
    @endphp
    {{-- Fechando comentário --}}

@endsection()
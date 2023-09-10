@extends('layouts.main')

@section('title','Início')

@section('content')

    <h1>Vinnigs - Eventos</h1>

    <br><br>

    <div class="col-md-12 mx-auto">
        <div class="input-group">
            <input class="form-control border-end-0 border" type="search" placeholder="Pesquisar eventos..." id="search-input">
            <span class="input-group-append">
                <button class="btn bg-white border ms-n5" type="button">
                    <ion-icon name="search-outline"></ion-icon>
                </button>
            </span>
        </div>
    </div>

    <div class="cont-cards row">

        @if($eventos != '' && $eventos != NULL)
            @foreach($eventos as $evento)
                <div class="col-sm-6" style="margin-bottom:22px;">
                    <div class="card">
                        <img src="/assets/img/event_placeholder.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $evento->titulo }}</h5>
                            <p class="card-text d-flex align-items-center gap-1"><ion-icon name="location-outline"></ion-icon> {{ $evento->cidade }}</p>  
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-center gap-2"><ion-icon name="people-outline"></ion-icon>X Participantes</li>
                        </ul>
                        <div class="card-body">
                            <a href="/" class="btn btn-primary">Ver evento</a>
                        </div>
                        
                    </div>
                </div>
            @endforeach
        @else
            <div class="alert alert-warning">Não há eventos disponíveis</div>          
        @endif

    </div>

@endsection
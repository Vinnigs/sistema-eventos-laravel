@extends('layouts.main')

@section('titulo', 'Início')

@section('conteudo')

    {{-- Seção HERO --}}
    <div id="bg-hero">

        <img class="bg-img" src="/assets/img/banner.jpg">

        <div id="container">
            <h1>Busque eventos</h1>

            {{-- Campo pesquisa --}}
            <div class="row mt-5">
                <div class="mx-auto">
                    <div class="input-group">
                        <input class="form-control border-end-0 border" type="search" placeholder="Pesquisar evento..." id="example-search-input">
                        <span class="input-group-append">
                            <button class="btn bg-white border border-radius-0" type="button">
                                <ion-icon name="search-outline"></ion-icon>
                            </button>
                        </span>
                    </div>
                </div>
            </div>

        </div>

    </div>
    {{----}}


    {{-- Seção Eventos --}}
    <div id="container">
        {{-- Notices --}}
        @if( session('msg') )

            <p class="alert alert-success">{{ session('msg') }}</p>

        @endif
        {{-- Cards --}}
        <section id="eventos-inicio" class="row">
            @if(count($eventos) != 0 && count($eventos) != NULL)
                @foreach($eventos as $evento)
                    <div class="col-12 col-md-6 col-lg-4 gy-4">
                        <div class="card">
                            <img src="/assets/img/eventos/{{$evento->img}}" class="card-img-top" style="max-height:200px; min-height:200px; object-fit:cover;">
                            <div class="card-body">
                                <h5 class="card-title">{{$evento->titulo}}</h5>
                                <span class="card-text d-flex align-items-center gap-1 mb-1"><ion-icon name="location-outline"></ion-icon>{{$evento->localizacao}}</span>
                                <span class="card-text d-flex align-items-center gap-1 mb-3"><ion-icon name="people-outline"></ion-icon>{{$evento->participantes}} Participantes</span>
                                <a href="#" class="btn btn-primary">Saiba mais</a>
                            </div>
                            <div class="card-header border-0 border-top d-flex align-items-center gap-2"><ion-icon name="calendar-outline"></ion-icon>{{$evento->data}}</div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="alert alert-warning">Não há eventos disponíveis.</p>
            @endif

        </section>
    </div>
    {{----}}
    {{-- <p class="alert alert-warning">Não há eventos disponíveis.</p> --}}
@endsection

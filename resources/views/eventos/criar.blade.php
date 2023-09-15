@extends('layouts.main')

@section('titulo', 'Criar Evento - VinniEventos')

@section('conteudo')

    {{-- Seção Principal --}}
    <div id="container">
        <section class="page-section">
            <h1>Criar um evento</h1>
        </section>
    </div>
    {{----}}


    {{-- Formulário --}}
    <div id="container">
        <section class="formulario">
            <form action="/eventos" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="my-4">
                    <label class="form-label">Título</label>
                    <input class="form-control" type="text" name="titulo" placeholder="Insira o titulo do seu evento...">
                </div>

                <div class="my-4">
                    <label class="form-label">Descrição</label>
                    <textarea class="form-control" name="descricao" placeholder="Insira a descrição do evento..."></textarea>
                </div>

                <div class="my-4">
                    <label class="form-label">Localização do Evento</label>
                    <input class="form-control" type="text" name="localizacao" placeholder="Insira a localização do evento...">
                </div>

                <div class="my-4 row">
                    <div class="form-group col">
                        <label class="form-label">Data do Evento</label>
                        <input class="form-control" type="date" name="data">
                    </div>
                    <div class="form-group col">
                        <label class="form-label">Evento é privado?</label>
                        <select name="privado" class="form-select">
                            <option value="0" selected>Não</option>
                            <option value="1">Sim</option>
                        </select>
                    </div>
                </div>

                <div class="my-4">
                    <label class="form-label">Imagem do Evento</label>
                    <input type="file" name="img" class="form-control">
                </div>

                <div class="my-4">
                    <input class="btn btn-primary" type="submit" value="Cadastrar Evento">
                </div>
            </form>
        </section>
    </div>
    {{----}}

@endsection

@extends('templates.base')

@section('title', 'Error 404')

@section('header', 'Error 404')

@section('content')

    <div class="card">
        <div class="card-block">
            <div class="row align-items-center m-b-20">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('img/denied.png') }}" alt="404" class="img-fluid"
                        style="width: 50%; height: auto;">
                </div>
                <div class="col-md-6 text-center">
                    <div class="d-flex flex-column align-items-center h-100">
                        <h1 class="display-1">
                            404
                        </h1>
                        <h2>
                            Página no encontrada
                        </h2>
                        <a href="javascript:history.back()" ><h4 class="text-success">Volver</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@extends('templates.base')

@section('title', 'Editar causal')

@section('header', 'Editar causal')

@section('content')
    @include('templates/messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('causal.update', $causal['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row form-group">         
                    <div class="col-lg-6 mb-4">
                        <label for="id">Id</label>
                        <input type="number" class="form-control" id="id" name="id" readonly 
                            value="{{ $causal['id'] }}">
                    </div>           
                    <div class="col-lg-6 mb-4">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control" id="description" name="description" required 
                            value="{{ $causal['description'] }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="{{ route('causal.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                    </div>
                </div>                                
            </form>
        </div>
    </div>
@endsection
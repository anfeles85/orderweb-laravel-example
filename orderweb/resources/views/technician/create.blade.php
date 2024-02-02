@extends('templates.base')

@section('title', 'Crear Técnico')

@section('header', 'Crear Técnico')

@section('content')
    @include('templates/messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('technician.store') }}" method="POST">
                @csrf
                <div class="row form-group">                    
                    <div class="col-lg-6 mb-4">
                        <label for="document">Documento</label>
                        <input type="number" class="form-control" id="document" name="document" required value="{{ old('document') }}">
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
                    </div>
                </div>
                <div class="row form-group">                    
                    <div class="col-lg-6 mb-4">
                        <label for="especiality">Especialidad</label>
                        <input type="text" class="form-control" id="especiality" name="especiality" value="{{ old('especiality') }}">
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="phone">Teléfono</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="{{ route('technician.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                    </div>
                </div>                                
            </form>
        </div>
    </div>
@endsection
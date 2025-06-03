@extends('templates.base')
@section('title', 'Editar técnico')
@section('header', 'Editar técnico')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('technician.update', $technician['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="document">Documento</label>
                        <input type="number" class="form-control" name="document" id="document" required 
                        value="{{ $technician['document'] }}">
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name" required 
                        value="{{ $technician['name'] }}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="speciality">Especialidad</label>
                        <input list="specialities-list" class="form-control" name="speciality" id="speciality" 
                        value="{{ $technician['speciality'] }}">
                        <datalist id="specialities-list">
                            <option>Instalación de redes</option>
                            <option>Construcción</option>
                            <option>Lectura de redes</option>
                            <option>Plomería</option>                        
                        </datalist>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="phone">Teléfono</label>
                        <input type="text" class="form-control" name="phone" id="phone" value="{{ $technician['phone'] }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{ route('technician.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

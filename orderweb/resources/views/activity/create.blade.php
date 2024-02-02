@extends('templates.base')

@section('title', 'Crear Actividad')

@section('header', 'Crear Actividad')

@section('content')
    @include('templates/messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('activity.store') }}" method="POST">
                @csrf
                <div class="row form-group">                    
                    <div class="col-lg-6 mb-4">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control" id="description" name="description" required value="{{ old('description') }}">
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="hours">Horas estimadas</label>
                        <input type="number" class="form-control" id="hours" name="hours" required value='{{ old('hours') }}'>
                    </div>
                </div>
                <div class="row form-group">                    
                    <div class="col-lg-6 mb-4">
                        <label for="technician_id">Técnico</label>
                        <select name="technician_id" id="technician_id" class="form-control" required>
                            <option value="">Seleccione</option>
                            @foreach ($technicians as $technician)
                                <option value="{{ $technician['document'] }}" 
                                    @if (old('technician_id') == $technician['document']) selected @endif>
                                    {{ $technician['name'] }}
                                </option>
                            @endforeach
                        </select>                        
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="type_id">Tipo</label>
                        <select name="type_id" id="type_id" class="form-control" required>
                            <option value="">Seleccione</option>
                            @foreach ($types as $type)
                                <option value="{{ $type['id'] }}" 
                                    @if (old('type_id') == $type['id']) selected @endif>
                                    {{ $type['description'] }}
                                </option>
                            @endforeach
                        </select>   
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="{{ route('activity.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                    </div>
                </div>                                
            </form>
        </div>
    </div>
@endsection
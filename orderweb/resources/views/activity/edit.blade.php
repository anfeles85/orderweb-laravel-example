@extends('templates.base')
@section('title', 'Editar actividad')
@section('header', 'Editar actividad')
@section('content')
    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('activity.update', $activity['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control" name="description" id="description" required 
                        value="{{ $activity['description'] }}">
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="hours">Horas</label>
                        <input type="number" class="form-control" name="hours" id="hours" required 
                        value="{{ $activity['hours'] }}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="technician_id">Técnico</label>
                        <select name="technician_id" id="technician_id" class="form-control">
                            <option value="">Seleccione</option>
                            @foreach ($technicians as $technician)
                                <option value="{{ $technician['id'] }}" 
                                    @if($technician['id'] == $activity['technician_id']) selected
                                    @endif>
                                    {{ $technician['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="type_activity_id">Tipo</label>
                        <select name="type_activity_id" id="type_activity_id" class="form-control">
                            <option value="">Seleccione</option>
                            @foreach ($types as $type)
                                <option value="{{ $type['id'] }}" 
                                    @if($type['id'] == $activity['type_activity_id']) selected
                                    @endif>
                                    {{ $type['description'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{ route('activity.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

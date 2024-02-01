@extends('templates.base')

@section('title', 'Editar orden')

@section('header', 'Editar orden')

@section('content')
    @include('templates/messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('order.update', $order['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row form-group">                    
                    <div class="col-lg-6 mb-4">
                        <label for="legalization_date">Fecha legalización</label>
                        <input type="date" class="form-control" id="legalization_date" name="legalization_date" required 
                            value="{{ $order['legalization_date'] }}">
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="address">Dirección</label>
                        <input type="text" class="form-control" id="address" name="address" required 
                            value="{{ $order['address'] }}">
                    </div>
                </div>
                <div class="row form-group">                    
                    <div class="col-lg-4 mb-4">
                        <label for="city">Ciudad</label>
                        <select name="city" id="city" class="form-control" required>
                            <option value="">Seleccione</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city['value'] }}" @if ($city['value'] == $order['city']) selected @endif>
                                    {{ $city['name'] }}
                                </option>
                            @endforeach
                        </select>                        
                    </div>
                    <div class="col-lg-4 mb-4">
                        <label for="observation_id">Observación</label>
                        <select name="observation_id" id="observation_id" class="form-control">
                            <option value="">Seleccione</option>
                            @foreach ($observations as $observation)
                                <option value="{{ $observation['id'] }}" 
                                    @if ($observation['id'] == $order['observation_id']) selected @endif>
                                    {{ $observation['description'] }}
                                </option>
                            @endforeach
                        </select>   
                    </div>
                    <div class="col-lg-4 mb-4">
                        <label for="causal_id">Causal</label>
                        <select name="causal_id" id="causal_id" class="form-control">
                            <option value="">Seleccione</option>
                            @foreach ($causals as $causal)
                                <option value="{{ $causal['id'] }}" 
                                    @if ($causal['id'] == $order['causal_id']) selected @endif>
                                    {{ $causal['description'] }}
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
                        <a href="{{ route('order.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                    </div>
                </div>                                
            </form>

            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="alert alert-warning" role="alert">
                        <i class="fa-solid fa-lightbulb"></i> Para añadir actividades a la orden primero debe crearla y
                         luego dar clic en la acción Editar.
                    </div>
                </div>
            </div>            
        </div>
    </div>
@endsection
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

            <hr>

            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Añadir/Retirar actividades</h6>
                        </div>
                        <div class="card-body">
                            <div class="row form-group"> 
                                <div class="col-lg-6 mb-4">
                                    <label for="activity_id">Actividades disponibles</label>
                                    <table id="table_data" class="table table-striped table-hover">                                        
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Descripción</th>
                                                <th>Horas</th>
                                                <th>Agregar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($activitiesNotInOrder) == 0)
                                                <tr>
                                                    <td colspan="4">
                                                        No existen actividades disponibles
                                                    </td>
                                                </tr>
                                            @else
                                                @foreach ($activitiesNotInOrder as $act)     
                                                    <tr>
                                                        <td>{{ $act->id }}</td>
                                                        <td>{{ $act->description  }}</td>
                                                        <td>{{ $act->hours  }}</td>
                                                        <td>
                                                            <a href="{{ route('order.add_activity', [$order['id'], $act->id]) }}" title="agregar" class="btn btn-primary btn-circle btn-sm">
                                                                <i class="fas fa-fw fa-plus"></i>
                                                            </a>                                                        
                                                        </td>
                                                    </tr> 
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>                                    
                                </div>                                
                                <div class="col-lg-6 mb-4">
                                    <label for="table_data">Actividades agregadas</label>
                                    <table id="table_data" class="table table-striped table-hover">                                        
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Descripción</th>
                                                <th>Horas</th>
                                                <th>Retirar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($activitiesAdded) == 0)
                                                <tr>
                                                    <td colspan="4">
                                                        No existen actividades agregadas
                                                    </td>
                                                </tr>
                                            @else
                                                @foreach ($activitiesAdded as $act)     
                                                    <tr>
                                                        <td>{{ $act['id'] }}</td>
                                                        <td>{{ $act['description'] }}</td>
                                                        <td>{{ $act['hours'] }}</td>
                                                        <td>
                                                            <a href="{{ route('order.remove_activity', [$order['id'], $act['id']]) }}" title="retirar" class="btn btn-danger btn-circle btn-sm">
                                                                <i class="fas fa-fw fa-minus"></i>
                                                            </a>                                                        
                                                        </td>
                                                    </tr> 
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table> 
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
@endsection
@extends('templates.base')

@section('title', 'Listado actividades')

@section('header', 'Listado actividades')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4 d-grid gap-2 d-md-block">            
            <a href="{{ route('activity.create') }}" class="btn btn-primary">Crear</a>                   
        </div>
    </div>

    @include('templates/messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Descripción</th>
                        <th>Horas</th>
                        <th>Técnico</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach ($activities as $activity)                       
                        <tr>
                            <td>{{ $activity['id'] }}</td>
                            <td>{{ $activity['description'] }}</td>
                            <td>{{ $activity['hours'] }}</td>
                            <td>{{ $activity->technician->document }} - {{  $activity->technician->name  }}</td>
                            <td>{{ $activity->type_activity->description }}</td>
                            <td>
                                <a href="{{ route('activity.update', $activity['id']) }}" title="editar" class="btn btn-primary btn-circle btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="{{ route('activity.destroy', $activity['id']) }}" title="eliminar" class="btn btn-danger btn-circle btn-sm" 
                                    onclick="return remove();">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr> 
                    @endforeach                   
                </tbody>
            </table>
        </div>
    </div>

@endsection    

@section('scripts')    
    <script src="{{ asset('js/general.js') }}"></script>     
@endsection

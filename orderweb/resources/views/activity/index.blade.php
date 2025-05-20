@extends('templates.base')
@section('title', 'Actividades')
@section('header', 'Actividades')
@section('content')    

    <div class="row">
        <div class="col-lg-12 mb-4 d-grid gap-2 d-md-block">
            <a href="{{ route('activity.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    @include('templates.messages')

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
                    <tr>
                        <td>1</td>
                        <td>Actividad prueba</td>
                        <td>16</td>
                        <td>Aitor Tilla</td>
                        <td>Tipo prueba</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-circle btn-sm" title="Editar">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-circle btn-sm" title="Eliminar" 
                                onclick="return remove();">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    

@endsection

@section('scripts')
    <script src="{{ asset('js/general.js') }}"></script>
@endsection
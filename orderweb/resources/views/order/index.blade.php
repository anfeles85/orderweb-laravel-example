@extends('templates.base')

@section('title', 'Listado órdenes')

@section('header', 'Listado órdenes')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4 d-grid gap-2 d-md-block">            
            <a href="{{ route('order.create') }}" class="btn btn-primary">Crear</a>                   
        </div>
    </div>

    @include('templates/messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha legalización</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>Observación</th>
                        <th>Causal</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>                   
                    <tr>
                        <td>1</td>
                        <td>Orden prueba</td>
                        <td>Cra 1</td>
                        <td>Tuluá</td>
                        <td>Ninguna</td>
                        <td>Reparación contador</td>
                        <td>
                            <a href="#" title="editar" class="btn btn-primary btn-circle btn-sm">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="#" title="eliminar" class="btn btn-danger btn-circle btn-sm" 
                                onclick="return delete();">
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

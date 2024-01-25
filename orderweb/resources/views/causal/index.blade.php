@extends('templates.base')

@section('title', 'Listado causales')

@section('header', 'Listado causales')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4 d-grid gap-2 d-md-block">            
            <a href="{{ route('causal.create') }}" class="btn btn-primary">Crear</a>                   
        </div>
    </div>

    @include('templates/messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_causals" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>                   
                    <tr>
                        <td>1</td>
                        <td>Causal prueba</td>
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

    <script>
        $(document).ready(function() {
            $('#table_causals').DataTable();
        });

        function delete() {
            var x = confirm("¿Está seguro de que desea eliminar el registro?");
            if (x)
                return true;
            else
                return false;
        }
    </script>    
@endsection

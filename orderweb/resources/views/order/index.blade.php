@extends('templates.base')
@section('title', 'Órdenes')
@section('header', 'Órdenes')
@section('content')    

    <div class="row">
        <div class="col-lg-12 mb-4 d-grid gap-2 d-md-block">
            <a href="{{ route('order.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha legalización</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>Causal</th>
                        <th>Observación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order['id'] }}</td>
                            <td>{{ $order['legalization_date'] }}</td>
                            <td>{{ $order['address'] }}</td>
                            <td>{{ $order['city'] }}</td>
                            <td>{{ $order->causal->description }}</td>
                            <td>@if($order->observation) {{ $order->observation->description }} @endif</td>
                            <td>
                                <a href="{{ route('order.edit', $order['id']) }}" class="btn btn-primary btn-circle btn-sm" title="Editar">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="{{ route('order.destroy', $order['id']) }}" class="btn btn-danger btn-circle btn-sm" title="Eliminar" 
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
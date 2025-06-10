@extends('templates.base_reports')
@section('header', 'Reporte órdenes por rango de fechas')
@section('content')
    <section id="results">
        @if (count($orders) != 0)
            <p><strong>Fecha de legalización desde: </strong>{{ $date1 }}</p>
            <p><strong>Fecha de legalización hasta: </strong>{{ $date2 }}</p>
            <br>
            <table id="reportTable">
                <thead>
                    <th>Id</th>
                    <th>Fecha legalización</th>
                    <th>Dirección</th>
                    <th>Ciudad</th>
                    <th>Causal</th>
                    <th>Observación</th>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order['id'] }}</td>
                            <td>{{ $order['legalization_date'] }}</td>
                            <td>{{ $order['address'] }}</td>
                            <td>{{ $order['city'] }}</td>
                            <td>{{ $order->causal->description }}</td>
                            <td>@if ($order->observation)
                                {{ $order->observation->description }}
                                @endif 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p><strong>No existen resultados en el reporte</strong></p>
        @endif
    </section>

@endsection
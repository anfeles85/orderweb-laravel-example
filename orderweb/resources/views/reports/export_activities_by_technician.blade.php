@extends('templates.base_reports')
@section('header', 'Reporte actividades por técnico')
@section('content')
    <section id="results">
        @if (count($activities) != 0)
            <h4>Técnico:</h4>
            <table id="reportTableInfo">
                <thead>
                    <tr>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Especialidad</th>
                        <th>Teléfono</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $activities[0]->technician->document }}</td>
                        <td>{{ $activities[0]->technician->name }}</td>
                        <td>{{ $activities[0]->technician->speciality }}</td>
                        <td>{{ $activities[0]->technician->phone }}</td>
                    </tr>
                </tbody>
            </table>

            <br><hr>

            <table id="reportTable">
                <thead>
                    <th>Id</th>
                    <th>Descripción</th>
                    <th>Horas</th>
                    <th>Tipo</th>
                </thead>
                <tbody>
                    @foreach ($activities as $activity)
                        <tr>
                            <td>{{ $activity['id'] }}</td>
                            <td>{{ $activity['description'] }}</td>
                            <td>{{ $activity['hours'] }}</td>
                            <td>{{ $activity->type_activity->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p><strong>No existen resultados en el reporte</strong></p>
        @endif
    </section>

@endsection
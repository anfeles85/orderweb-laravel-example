@extends('templates.base_reports')

@section('header', 'Reporte actividades por técnico')

@section('content')       

    <section id="results">
        @if ($activities)
            <p style="font-size: 14px;"><strong>Técnico:</strong></p>
            <table id="ReportTableInfo">
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
                        <td>{{ $technician['document'] }}</td>
                        <td>{{ $technician['name'] }}</td>
                        <td>{{ $technician['especiality'] }}</td>
                        <td>{{ $technician['phone'] }}</td>   
                    </tr>
                </tbody> 
            </table>

            <br>
            <hr>
            <p style="font-size: 14px;"><strong>Actividades:</strong></p>

            <table id="ReportTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Descripción</th>
                        <th>Horas</th>
                        <th>Tipo</th>
                    </tr>
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
        @endif
    </section>
    
@endsection    
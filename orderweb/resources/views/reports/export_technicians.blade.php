@extends('templates.base_reports')

@section('header', 'Reporte general de técnicos')

@section('content')       

    <section id="results">
        @if ($technicians)
            <table id="ReportTable">
                <thead>
                    <tr>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Especialidad</th>
                        <th>Teléfono</th>
                    </tr>
                </thead>
                <tbody>  
                    @foreach ($technicians as $technician)                        
                        <tr>
                            <td>{{ $technician['document'] }}</td>
                            <td>{{ $technician['name'] }}</td>
                            <td>{{ $technician['especiality'] }}</td>
                            <td>{{ $technician['phone'] }}</td>                            
                        </tr> 
                    @endforeach                   
                </tbody>
            </table>
        @endif
    </section>
    
@endsection    
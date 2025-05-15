@extends('templates_example.base')
@section('title', 'Test 2')
@section('content')

    <h1>Test 2</h1>
    <q>No soy hombre de plegarias, 
        pero si estás en el cielo ayúdame Superman!</q>
    <small>Homero J. Simpson</small> 
    <button onclick="show_alert()">Clic!</button> 

@endsection

@section('scripts')
    <script src="{{ asset('js/test.js') }}"></script>
@endsection 

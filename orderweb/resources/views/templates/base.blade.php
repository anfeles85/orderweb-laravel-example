<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div id="container">
        @include('templates/banner')
        <div>
            <aside>
                @include('templates/menu')
            </aside>
            <!-- aqui se insertan las paginas que heredan de base -->
            <section>
                @yield('content')
            </section>
            <br>
            @include('templates/footer')
        </div>
    </div>

    @yield('scripts')
</body>
</html>
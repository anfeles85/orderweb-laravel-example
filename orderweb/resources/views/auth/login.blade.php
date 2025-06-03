<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet"> 
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card 0-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('img/work_order_logo.jpg') }}" alt="login"
                                class="img-fluid">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="text-gray-900">Bienvenido</h1>
                                    </div>

                                    @include('templates.messages')

                                    <form class="user" action="{{ route('auth.login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control form-control-user"
                                             placeholder="Correo electrónico" value="{{ old('email') }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" 
                                            class="form-control form-control-user" placeholder="Contraseña">
                                        </div>  
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Ingresar
                                        </button>  
                                    </form>

                                    <hr>

                                    <div class="text-center">
                                        <a href="{{ route('auth.register') }}" class="small">Registrarse</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
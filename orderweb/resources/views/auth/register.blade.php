<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
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
                                <img src="{{ asset('img/supervisor.jpg') }}" alt="register"
                                class="img-fluid">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="text-gray-900">Registro</h1>
                                    </div>

                                    @include('templates.messages')

                                    <form class="user" action="{{ route('auth.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control form-control-user"
                                             placeholder="Nombre completo" value="{{ old('name') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control form-control-user"
                                             placeholder="Correo electrónico" value="{{ old('email') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" 
                                            class="form-control form-control-user" placeholder="Contraseña" required>
                                        </div>  
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" id="password_confirmation" 
                                            class="form-control form-control-user" placeholder="Confirmar contraseña" required>
                                        </div>

                                        <input type="hidden" name="role_id" name="role_id" value="2">    

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Registrar
                                        </button>  
                                    </form>

                                    <hr>

                                    <div class="text-center">
                                        <a href="{{ route('auth.index') }}" class="small">Iniciar sesión</a>
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
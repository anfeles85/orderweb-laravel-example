<!DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <style>
        body {
			margin: 0;
			padding: 0;
            background-color: #ffffff;
            font-family: Arial, Helvetica, sans-serif
		}

        img {
            display: block; 
            height: auto; 
            border: 0; 
            width: 25%;
        }

        pre{
            font-family: Arial, Helvetica, sans-serif
        }
    </style>
</head>
<body>
    <div align="center">
        <img src={{ $message->embed(asset("img/logo.jpg")) }} alt="logo" />
    </div>

    <br>

    <div align="justify">
        <p>Estimad@ <strong>{{ $user->name }}</strong></p>
        <pre>{{ $content }}</pre>
    </div>

    <br><hr>

    <div align="center">
        <em>OrderWeb 1.0. Este es un correo generado automáticamente. Por favor, no responda a este mensaje.</em>
    </div>
</body>

</html>
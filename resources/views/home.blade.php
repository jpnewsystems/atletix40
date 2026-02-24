<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>AtletiX40</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/atletix/home.css') }}" rel="stylesheet">
</head>

<body>

    <div class="overlay">
        <div>
            <div class="logo">
                ATLETI<span>X</span>40
            </div>

            <div class="slogan">
                Transforma tu disciplina en resultados.
            </div>

            <div class="buttons">
                @guest
                    <a href="{{ route('login') }}" class="btn-main">
                        Iniciar Sesión
                    </a>

                    <a href="{{ route('register') }}" class="btn-outline-main">
                        Registrarse
                    </a>
                @else
                    <a href="{{ route('home') }}" class="btn-main">
                        Ir al Panel
                    </a>
                @endguest
            </div>
        </div>
    </div>

</body>

</html>

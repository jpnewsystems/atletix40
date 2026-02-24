<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtletiX40</title>
    <!-- Preload background image para carga más rápida -->
    <link rel="preload" as="image" href="{{ asset('images/img-home.jpeg') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
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

                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn-outline-main"
                            style="border: 2px solid #ffffff; background: transparent; color: #ffffff; padding: 14px 35px; font-size: 18px; font-weight: 600; border-radius: 50px; cursor: pointer; margin: 10px;">
                            Cerrar Sesión
                        </button>
                    </form>
                @endguest
            </div>
        </div>
    </div>

</body>

</html>

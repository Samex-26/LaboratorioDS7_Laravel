<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laboratorio DS7_2</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-5 text-center border-0 rounded-4" style="max-width: 500px;">
            <h1 class="text-primary fw-bold mb-4">Laboratorio DS7_2</h1>
            <p class="text-muted mb-4">Bienvenido al sistema de autenticación de Laravel con Bootstrap.</p>
            
            <div class="d-grid gap-2">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary btn-lg">Entrar al Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Iniciar Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg">Registrarse</a>
                        @endif
                    @endauth
                @endif
            </div>
            
            <div class="mt-4 pt-3 border-top text-secondary small">
                Desarrollado para el curso de Desarrollo de Software VII
            </div>
        </div>
    </div>
</body>
</html>
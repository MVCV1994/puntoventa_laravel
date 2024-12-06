<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto Final - Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS (Include if you're not using Vite for your project) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Figtree', sans-serif;
        }

        .bg-dark {
            background-color: #1a202c;
            /* Fondo oscuro */
        }

        .btn-primary {
            background-color: #4C6EF5;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
            text-align: center;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: #3b5bdb;
        }

        .card {
            background: #2D3748;
            /* Fondo oscuro para la tarjeta */
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
        }

        .card-header {
            background-color: #4C6EF5;
            color: white;
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
            padding: 24px;
            text-align: center;
        }

        .card-body {
            padding: 32px;
        }

        footer {
            background-color: #1a202c;
            color: #e2e8f0;
            padding: 24px 0;
            text-align: center;
        }
    </style>
</head>

<body class="bg-dark text-white antialiased">

    <div class="min-h-screen flex flex-col items-center justify-center py-6 px-4 sm:px-6 lg:px-8">

        <div class="w-full max-w-md">
            <!-- Card -->
            <div class="card">
                <!-- Card Header -->
                <div class="card-header">
                    <h1 class="text-3xl font-semibold">Proyecto Final - Laravel</h1>
                    <p class="mt-2 text-xl">Bienvenido a la plataforma de Punto de Venta</p>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    @if (Route::has('login'))
                    @auth
                    <p class="text-center text-green-400">Ya estás autenticado.</p>
                    @else
                    <div class="text-center">
                        <a href="{{ route('login') }}" class="btn-primary">
                            Iniciar Sesión
                        </a>
                    </div>
                    @endauth
                    @endif
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        <p class="text-sm">
            UISIL - Proyecto Final de Programación Avanzada 2024s<br>
            <a target="_blank" class="font-semibold text-blue-400">Marco Cruz Vargas</a>
        </p>
    </footer>

</body>

</html>
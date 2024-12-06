@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">Bienvenido, Usuario</h1>

    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
        <ul class="space-y-4">
            <li>
                <a href="{{ route('user.menu') }}" class="text-lg font-medium text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-200">
                    Ver Menú
                </a>
            </li>
            <li>
                <a href="{{ route('user.pedido') }}" class="text-lg font-medium text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-200">
                    Realizar Pedido
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection
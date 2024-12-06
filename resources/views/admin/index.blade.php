@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">Panel de Administrador</h1>

    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
        <ul class="space-y-4">
            <li>
                <a href="{{ route('admin.productos') }}" class="text-lg font-medium text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-200">
                    Gestionar Productos
                </a>
            </li>
            <li>
                <a href="{{ route('admin.usuarios') }}" class="text-lg font-medium text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-200">
                    Gestionar Usuarios
                </a>
            </li>
            <li>
                <a href="{{ route('admin.reportes') }}" class="text-lg font-medium text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-200">
                    Generar Reportes
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection

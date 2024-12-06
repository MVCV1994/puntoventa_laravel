@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-8">
    <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-6">Generar Reportes</h1>

    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Reporte de Productos</h2>
        <p class="text-gray-700 dark:text-gray-300 mb-6">Total de productos registrados: <strong>{{ $totalProductos }}</strong></p>

        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Reporte de Ventas</h2>
        <p class="text-gray-700 dark:text-gray-300">Total de ventas realizadas: <strong>${{ number_format($totalVentas, 2) }}</strong></p>
    </div>
</div>
@endsection

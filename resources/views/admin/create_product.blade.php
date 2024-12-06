@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-8 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
    <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-6">Agregar Producto</h1>

    <!-- Formulario para agregar un nuevo producto -->
    <form method="POST" action="{{ route('admin.store_product') }}">
        @csrf

        <!-- Campo para el nombre del producto -->
        <div class="mb-6">
            <label for="name" class="block text-gray-700 dark:text-white font-medium">Nombre del Producto</label>
            <input type="text" name="name" id="name" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-500 dark:focus:border-indigo-500" value="{{ old('name') }}" required>
            @error('name')
            <div class="mt-2 text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo para el precio del producto -->
        <div class="mb-6">
            <label for="price" class="block text-gray-700 dark:text-white font-medium">Precio</label>
            <input type="number" name="price" id="price" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-500 dark:focus:border-indigo-500" value="{{ old('price') }}" step="0.01" required>
            @error('price')
            <div class="mt-2 text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo para el stock del producto -->
        <div class="mb-6">
            <label for="stock" class="block text-gray-700 dark:text-white font-medium">Stock</label>
            <input type="number" name="stock" id="stock" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-500 dark:focus:border-indigo-500" value="{{ old('stock') }}" required>
            @error('stock')
            <div class="mt-2 text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo para la categoría del producto -->
        <div class="mb-6">
            <label for="category" class="block text-gray-700 dark:text-white font-medium">Categoría</label>
            <input type="text" name="category" id="category" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-500 dark:focus:border-indigo-500" value="{{ old('category') }}" required>
            @error('category')
            <div class="mt-2 text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <!-- Botón para guardar el producto -->
        <button type="submit" class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 transition duration-300">
            Guardar Producto
        </button>
    </form>
</div>
@endsection
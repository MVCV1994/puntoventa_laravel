@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-8 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
    <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-6">Editar Producto</h1>

    <form method="POST" action="{{ route('admin.update_product', $product->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label for="name" class="block text-gray-700 dark:text-white font-medium">Nombre del Producto</label>
            <input type="text" name="name" id="name" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-500 dark:focus:border-indigo-500" value="{{ old('name', $product->name) }}" required>
        </div>

        <div class="mb-6">
            <label for="price" class="block text-gray-700 dark:text-white font-medium">Precio</label>
            <input type="number" name="price" id="price" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-500 dark:focus:border-indigo-500" value="{{ old('price', $product->price) }}" step="0.01" required>
        </div>

        <div class="mb-6">
            <label for="stock" class="block text-gray-700 dark:text-white font-medium">Stock</label>
            <input type="number" name="stock" id="stock" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-500 dark:focus:border-indigo-500" value="{{ old('stock', $product->stock) }}" required>
        </div>

        <div class="mb-6">
            <label for="category" class="block text-gray-700 dark:text-white font-medium">Categoría</label>
            <input type="text" name="category" id="category" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-500 dark:focus:border-indigo-500" value="{{ old('category', $product->category) }}" required>
        </div>

        <button type="submit" class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 transition duration-300">
            Actualizar Producto
        </button>
    </form>
</div>
@endsection

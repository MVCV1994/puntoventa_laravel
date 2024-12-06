@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-6">Gestión de Productos</h1>

    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 mb-6">
        <a href="{{ route('admin.create_product') }}" class="inline-block px-6 py-3 mb-4 bg-indigo-600 text-white font-semibold rounded-lg shadow-lg hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 transition duration-300">
            Agregar Producto
        </a>

        <table class="min-w-full table-auto bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <thead class="bg-indigo-600 text-white">
                <tr>
                    <th class="px-6 py-3 text-left">Nombre</th>
                    <th class="px-6 py-3 text-left">Precio</th>
                    <th class="px-6 py-3 text-left">Stock</th>
                    <th class="px-6 py-3 text-left">Categoría</th>
                    <th class="px-6 py-3 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr class="border-t border-b border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">
                    <td class="px-6 py-4">{{ $product->name }}</td>
                    <td class="px-6 py-4">${{ number_format($product->price, 2) }}</td>
                    <td class="px-6 py-4">{{ $product->stock }}</td>
                    <td class="px-6 py-4">{{ $product->category }}</td>
                    <td class="px-6 py-4 flex space-x-2">
                        <a href="{{ route('admin.edit_product', $product->id) }}" class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 dark:bg-yellow-400 dark:hover:bg-yellow-300 transition duration-300">
                            Editar
                        </a>

                        <form action="{{ route('admin.delete_product', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 dark:bg-red-500 dark:hover:bg-red-400 transition duration-300">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
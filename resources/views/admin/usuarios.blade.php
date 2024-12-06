@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-8">
    <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-6">Gestión de Usuarios</h1>

    <a href="{{ route('admin.create_user') }}" class="inline-block px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-lg hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 transition duration-300 mb-4">
        Agregar Usuario
    </a>

    <table class="min-w-full table-auto bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
        <thead class="bg-indigo-600 text-white">
            <tr>
                <th class="px-6 py-3 text-left">Nombre</th>
                <th class="px-6 py-3 text-left">Email</th>
                <th class="px-6 py-3 text-left">Rol</th>
                <th class="px-6 py-3 text-left">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr class="border-t border-b border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">
                <td class="px-6 py-4">{{ $user->name }}</td>
                <td class="px-6 py-4">{{ $user->email }}</td>
                <td class="px-6 py-4">{{ $user->role }}</td>
                <td class="px-6 py-4 flex space-x-2">
                    <a href="{{ route('admin.edit_user', $user->id) }}" class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 dark:bg-yellow-400 dark:hover:bg-yellow-300 transition duration-300">
                        Editar
                    </a>

                    <form action="{{ route('admin.delete_user', $user->id) }}" method="POST" style="display:inline;">
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
@endsection
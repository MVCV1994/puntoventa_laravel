@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-8 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
    <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-6">Editar Usuario</h1>

    <!-- Formulario para editar un usuario -->
    <form method="POST" action="{{ route('admin.update_user', $user->id) }}">
        @csrf
        @method('PUT')

        <!-- Campo para el nombre del usuario -->
        <div class="mb-6">
            <label for="name" class="block text-gray-700 dark:text-white font-medium">Nombre</label>
            <input type="text" name="name" id="name" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-500 dark:focus:border-indigo-500" value="{{ old('name', $user->name) }}" required>
        </div>

        <!-- Campo para el correo electrónico -->
        <div class="mb-6">
            <label for="email" class="block text-gray-700 dark:text-white font-medium">Correo Electrónico</label>
            <input type="email" name="email" id="email" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-500 dark:focus:border-indigo-500" value="{{ old('email', $user->email) }}" required>
        </div>

        <!-- Campo para la contraseña (opcional) -->
        <div class="mb-6">
            <label for="password" class="block text-gray-700 dark:text-white font-medium">Contraseña</label>
            <input type="password" name="password" id="password" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Dejar en blanco para no cambiar la contraseña">
        </div>

        <!-- Campo para confirmar la contraseña (opcional) -->
        <div class="mb-6">
            <label for="password_confirmation" class="block text-gray-700 dark:text-white font-medium">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-500 dark:focus:border-indigo-500">
        </div>

        <!-- Campo para el rol del usuario -->
        <div class="mb-6">
            <label for="role" class="block text-gray-700 dark:text-white font-medium">Rol</label>
            <select name="role" id="role" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-500 dark:focus:border-indigo-500" required>
                <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Administrador</option>
                <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>Usuario</option>
                <option value="editor" {{ old('role', $user->role) == 'editor' ? 'selected' : '' }}>Editor</option>
            </select>
        </div>

        <button type="submit" class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 transition duration-300">
            Actualizar Usuario
        </button>
    </form>
</div>
@endsection
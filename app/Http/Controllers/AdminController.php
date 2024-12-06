<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User; // Asegúrate de importar el modelo User
use App\Models\Sale; // Asegúrate de importar el modelo Sale
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Vista principal del panel de administrador
    public function index()
    {
        // Verificación de rol (solo acceso para administradores)
        $user = auth()->user(); // Obtenemos el usuario autenticado
        if ($user->role !== 'admin') {
            return redirect('/'); // Redirigimos si no es admin
        }

        return view('admin.index');
    }

    // Gestionar productos del menú
    public function productos()
    {
        // Verificación de rol (solo acceso para administradores)
        if (auth()->user()->role !== 'admin') {
            return redirect('/'); // Redirigimos si no es admin
        }

        // Obtener todos los productos desde la base de datos
        $products = Product::all(); // Obtén todos los productos de la base de datos

        // Pasamos la variable $products a la vista
        return view('admin.productos', compact('products'));
    }

    // Gestionar usuarios
    public function usuarios()
    {
        // Verificación de rol (solo acceso para administradores)
        if (auth()->user()->role !== 'admin') {
            return redirect('/'); // Redirigimos si no es admin
        }

        // Obtener todos los usuarios (excepto el administrador, si es necesario)
        $users = User::where('role', '!=', 'admin')->get();
        return view('admin.usuarios', compact('users'));
    }

    // Crear un nuevo usuario
    public function createUser()
    {
        return view('admin.create_user');
    }

    // Almacenar un nuevo usuario
    public function storeUser(Request $request)
    {
        // Validación de los datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string',
        ]);

        // Crear un nuevo usuario
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'role' => $validated['role'],
        ]);

        return redirect()->route('admin.usuarios')->with('success', 'Usuario creado correctamente.');
    }

    // Editar un usuario existente
    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit_user', compact('user'));
    }

    // Actualizar un usuario
    public function updateUser(Request $request, $id)
    {
        // Validación de los datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'required|string',
        ]);

        // Buscar el usuario y actualizarlo
        $user = User::findOrFail($id);
        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'] ? bcrypt($validated['password']) : $user->password,
            'role' => $validated['role'],
        ]);

        return redirect()->route('admin.usuarios')->with('success', 'Usuario actualizado correctamente.');
    }

    // Eliminar un usuario
    public function destroyUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete(); // Eliminar el usuario

        return redirect()->route('admin.usuarios')->with('success', 'Usuario eliminado correctamente.');
    }

    // Generar reportes
    public function reportes()
    {
        // Verificación de rol (solo acceso para administradores)
        if (auth()->user()->role !== 'admin') {
            return redirect('/'); // Redirigimos si no es admin
        }

        // Obtener el número total de productos
        $totalProductos = Product::count();

        // Obtener el total de ventas (puedes agregar más lógica aquí si tienes una tabla de ventas)
        // Por ejemplo, si tienes una tabla 'sales' que almacena ventas, puedes sumar el total de ventas de productos
        $totalVentas = Sale::sum('total'); // Asumiendo que tienes una tabla de ventas

        return view('admin.reportes', compact('totalProductos', 'totalVentas'));
    }
}

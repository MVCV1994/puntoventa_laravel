<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MeseroController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

// Ruta de inicio
Route::get('/', function () {
    return view('welcome');
});

// Ruta del dashboard general para usuarios autenticados y verificados
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas para el perfil del usuario
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas específicas para admin, mesero, y usuario, gestionando productos, usuarios y ventas
Route::middleware(['auth', 'verified'])->group(function () {

    // Rutas del Administrador
    Route::prefix('admin')->name('admin.')->group(function () {
        // Dashboard de admin
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');

        // Gestión de productos
        Route::prefix('productos')->name('productos.')->group(function () {
            Route::get('/', [ProductController::class, 'index'])->name('index');
            Route::get('/create', [ProductController::class, 'create'])->name('create');
            Route::post('/', [ProductController::class, 'store'])->name('store');
            Route::get('{id}/edit', [ProductController::class, 'edit'])->name('edit');
            Route::put('{id}', [ProductController::class, 'update'])->name('update');
            Route::delete('{id}', [ProductController::class, 'destroy'])->name('destroy');
        });

        // Gestión de usuarios
        Route::prefix('usuarios')->name('usuarios.')->group(function () {
            Route::get('/', [AdminController::class, 'usuarios'])->name('index');
            Route::get('/create', [AdminController::class, 'createUser'])->name('create');
            Route::post('/', [AdminController::class, 'storeUser'])->name('store');
            Route::get('{id}/edit', [AdminController::class, 'editUser'])->name('edit');
            Route::put('{id}', [AdminController::class, 'updateUser'])->name('update');
            Route::delete('{id}', [AdminController::class, 'destroyUser'])->name('destroy');
        });

        // Reportes
        Route::get('/reportes', [AdminController::class, 'reportes'])->name('reportes');
    });

    // Rutas del Mesero
    Route::prefix('mesero')->name('mesero.')->group(function () {
        Route::get('/', [MeseroController::class, 'index'])->name('dashboard');
        Route::get('/pedidos', [MeseroController::class, 'pedidos'])->name('pedidos');
        Route::get('/inventario', [MeseroController::class, 'inventario'])->name('inventario');
    });

    // Rutas del Usuario (para clientes)
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('dashboard');
        Route::get('/menu', [UserController::class, 'menu'])->name('menu');
        Route::get('/pedido', [UserController::class, 'realizarPedido'])->name('pedido');
    });
});

// Rutas de autenticación predeterminadas (esto ya está en auth.php)
require __DIR__ . '/auth.php';

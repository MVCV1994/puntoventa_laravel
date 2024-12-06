<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Vista principal del usuario
    public function index()
    {
        return view('user.index');
    }

    // Ver el menú
    public function menu()
    {
        return view('user.menu');
    }

    // Realizar pedido
    public function realizarPedido()
    {
        return view('user.pedido');
    }
}


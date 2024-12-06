<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeseroController extends Controller
{
    // Vista principal del panel de mesero
    public function index()
    {
        return view('mesero.index');
    }

    // Gestión de pedidos
    public function pedidos()
    {
        return view('mesero.pedidos');
    }

    // Consulta de inventario disponible
    public function inventario()
    {
        return view('mesero.inventario');
    }
}


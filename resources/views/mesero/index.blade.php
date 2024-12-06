@extends('layouts.app')

@section('content')
<h1>Panel de Mesero</h1>
<ul>
    <li><a href="{{ route('mesero.pedidos') }}">Gestionar Pedidos</a></li>
    <li><a href="{{ route('mesero.inventario') }}">Consultar Inventario</a></li>
</ul>
@endsection

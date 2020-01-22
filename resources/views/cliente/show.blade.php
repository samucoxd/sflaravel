@extends('plantilla.plantilla')

@section('title', 'Editar Cliente')

@section('contenido')

<div class="card" style="width: 40rem; margin: auto;">
    <!-- Default form subscription -->
    <form class="text-center border border-light p-5" action="" method="POST">
    @method('PUT')
    @csrf

        <p class="h4 mb-4">Registro de un Cliente Nuevo</p>

        <p>LLenar todos los datos Obligatorios para el correcto registro de Clientes.</p>

        <!-- codigo -->
        <input type="text" id="" name="codigo" value="{{ $Cliente->idcliente }}" class="form-control mb-4" placeholder="Codigo" disabled required>

        <!-- nombre -->
        <input type="text" id="" name="nombre" value="{{ $Cliente->nombre }}" class="form-control mb-4" placeholder="Nombre" disabled required>

        <!-- zona -->
        <input type="text" id="" name="zona" value="{{ $Cliente->zona }}" class="form-control mb-4" placeholder="Zona" disabled required>

        <!-- Sign in button -->
        <a href="{{ route('cliente.edit', $Cliente->idcliente) }}" class="btn btn-success btn-block">Editar</a>
        <a href="{{ route('cancelar', 'cliente') }}" class="btn btn-danger btn-block">Cancelar</a>

    </form>
</div>

@endsection
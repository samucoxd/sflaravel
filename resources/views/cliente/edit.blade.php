@extends('plantilla.plantilla')

@section('title', 'Editar Cliente')

@section('contenido')

<div class="card" style="width: 40rem; margin: auto;">
    <!-- Default form subscription -->
    <form class="text-center border border-light p-5" action="{{ route('cliente.update', $Cliente->idcliente) }}" method="POST">
    @method('PUT')
    @csrf

        <p class="h4 mb-4">Registro de un Cliente Nuevo</p>

        <p>LLenar todos los datos Obligatorios para el correcto registro de Clientes.</p>

        <!-- codigo -->
        <input type="text" id="" name="codigo" value="{{ $Cliente->idcliente }}" class="form-control mb-4" placeholder="Codigo" required>

        <!-- nombre -->
        <input type="text" id="" name="nombre" value="{{ $Cliente->nombre }}" class="form-control mb-4" placeholder="Nombre" required>

        <!-- zona -->
        <input type="text" id="" name="zona" value="{{ $Cliente->zona }}" class="form-control mb-4" placeholder="Zona" required>

        <!-- Sign in button -->
        <button class="btn btn-info btn-block" type="submit">Enviar</button>
        <a href="{{ route('cancelar', 'cliente') }}" class="btn btn-danger btn-block">Cancelar</a>

    </form>
</div>

@endsection
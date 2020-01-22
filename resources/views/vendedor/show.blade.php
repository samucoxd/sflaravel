@extends('plantilla.plantilla')

@section('title', 'Editar Vendedor')

@section('contenido')

<div class="card" style="width: 40rem; margin: auto;">
    <!-- Default form subscription -->
    <form class="text-center border border-light p-5" action="" method="POST">
    @method('PUT')
    @csrf

        <p class="h4 mb-4">Registro de un Cliente Nuevo</p>

        <p>LLenar todos los datos Obligatorios para el correcto registro de Clientes.</p>

        <!-- codigo -->
        <input type="text" name="idvendedor" value="{{ $Vendedor->idvendedor }}" class="form-control mb-4" disabled>

        <!-- nombre -->
        <input type="text" name="nombre" value="{{ $Vendedor->nombre }}" class="form-control mb-4" disabled>

        <!-- Sign in button -->
        <a href="{{ route('vendedor.edit', $Vendedor->idvendedor) }}" class="btn btn-success btn-block">Editar</a>
        <a href="{{ route('cancelar', 'vendedor') }}" class="btn btn-danger btn-block">Cancelar</a>

    </form>
</div>

@endsection
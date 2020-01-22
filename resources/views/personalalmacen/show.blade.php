@extends('plantilla.plantilla')

@section('title', 'Editar Personal-Almacen')

@section('contenido')

<div class="card" style="width: 40rem; margin: auto;">
    <!-- Default form subscription -->
    <form class="text-center border border-light p-5" action="" method="POST">
    @method('PUT')
    @csrf

        <p class="h4 mb-4">Registro de un Personal Nuevo</p>

        <p>LLenar todos los datos Obligatorios para el correcto registro de Personal.</p>

        <!-- nombre -->
        <input type="text" id="" name="nombre" value="{{ $Personalalmacen->nombre }}" class="form-control mb-4" disabled>

        <!-- Sign in button -->
        <a href="{{ route('personalalmacen.edit', $Personalalmacen->idpersonalalmacen) }}" class="btn btn-success btn-block">Editar</a>
        <a href="{{ route('cancelar', 'personalalmacen') }}" class="btn btn-danger btn-block">Cancelar</a>

    </form>
</div>

@endsection
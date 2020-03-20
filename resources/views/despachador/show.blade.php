@extends('plantilla.plantilla')

@section('title', 'Editar Despachador')

@section('contenido')

<div class="card" style="width: 40rem; margin: auto;">
    <!-- Default form subscription -->
    <form class="text-center border border-light p-5" action="" method="POST">
    @method('PUT')
    @csrf

        <p class="h4 mb-4">Registro de un Despachador Nuevo</p>

        <p>LLenar todos los datos Obligatorios para el correcto registro de Despachador.</p>

        <!-- codigo -->
        <input type="text" id="" name="codigo" value="{{ $Despachador->iddespachador }}" class="form-control mb-4" placeholder="Codigo" disabled required>

        <!-- nombre -->
        <input type="text" id="" name="nombre" value="{{ $Despachador->nombre }}" class="form-control mb-4" placeholder="Nombre" disabled required>

        <!-- Sign in button -->
        <a href="{{ route('despachador.edit', $Despachador->iddespachador) }}" class="btn btn-success btn-block">Editar</a>
        <a href="{{ route('cancelar', 'despachador') }}" class="btn btn-danger btn-block">Cancelar</a>

    </form>
</div>

@endsection

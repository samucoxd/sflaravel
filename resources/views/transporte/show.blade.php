@extends('plantilla.plantilla')

@section('title', 'Editar Transporte')

@section('contenido')

<div class="card" style="width: 40rem; margin: auto;">
    <!-- Default form subscription -->
    <form class="text-center border border-light p-5" action="" method="POST">
    @method('PUT')
    @csrf

        <p class="h4 mb-4">Registro de un Transporte Nuevo</p>

        <p>LLenar todos los datos Obligatorios para el correcto registro de Transporte.</p>

        <!-- codigo -->
        <input type="text" id="" name="codigo" value="{{ $Transporte->idtransporte }}" class="form-control mb-4" disabled>

        <!-- nombre -->
        <input type="text" id="" name="nombre" value="{{ $Transporte->nombre }}" class="form-control mb-4" disabled>

        <!-- Sign in button -->
        <a href="{{ route('transporte.edit', $Transporte->idtransporte) }}" class="btn btn-success btn-block">Editar</a>
        <a href="{{ route('cancelar', 'transporte') }}" class="btn btn-danger btn-block">Cancelar</a>

    </form>
</div>

@endsection
@extends('plantilla.plantilla')

@section('title', 'Editar Vendedor')

@section('contenido')

<div class="card" style="width: 40rem; margin: auto;">
    <!-- Default form subscription -->
    <form class="text-center border border-light p-5" action="{{ route('vendedor.update', $Vendedor->idvendedor) }}" method="POST">
    @method('PUT')
    @csrf

        <p class="h4 mb-4">Registro de un Vendedor Nuevo</p>

        <p>LLenar todos los datos Obligatorios para el correcto registro de Vendedor.</p>

        <!-- codigo -->
        <input type="text" id="" name="idvendedor" value="{{ $Vendedor->idvendedor }}" class="form-control mb-4" placeholder="Codigo" required>

        <!-- nombre -->
        <input type="text" id="" name="nombre" value="{{ $Vendedor->nombre }}" class="form-control mb-4" placeholder="Nombre" required>

        <!-- Sign in button -->
        <button class="btn btn-info btn-block" type="submit">Enviar</button>
        <a href="{{ route('cancelar', 'vendedor') }}" class="btn btn-danger btn-block">Cancelar</a>

    </form>
</div>

@endsection
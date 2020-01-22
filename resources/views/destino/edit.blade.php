@extends('plantilla.plantilla')

@section('title', 'Editar Destino')

@section('contenido')

<div class="card" style="width: 40rem; margin: auto;">
    <!-- Default form subscription -->
    <form class="text-center border border-light p-5" action="{{ route('destino.update', $Destino->iddestino) }}" method="POST">
    @method('PUT')
    @csrf

        <p class="h4 mb-4">Registro de un Transporte Nuevo</p>

        <p>LLenar todos los datos Obligatorios para el correcto registro de Clientes.</p>

        <!-- nombre -->
        <input type="text" id="" name="nombre" value="{{ $Destino->nombre }}" class="form-control mb-4" placeholder="nombre" required>

        <!-- ciudad -->
        <input type="text" id="" name="ciudad" value="{{ $Destino->ciudad }}" class="form-control mb-4" placeholder="ciudad" required>

        <!-- Sign in button -->
        <button class="btn btn-info btn-block" type="submit">Enviar</button>
        <a href="{{ route('cancelar', 'destino') }}" class="btn btn-danger btn-block">Cancelar</a>

    </form>
</div>

@endsection
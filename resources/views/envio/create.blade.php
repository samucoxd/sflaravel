@extends('plantilla.plantilla')

@section('title', 'Registro Envio')

@section('contenido')

<div class="card" style="width: 40rem; margin: auto;">
    <!-- Default form subscription -->
    <form class="text-center border border-light p-5" action="{{ route('envio.store') }}" method="POST">
    @csrf

        <p class="h4 mb-4">Registro de un Envio Nuevo</p>

        <p>LLenar todos los datos Obligatorios para el correcto registro de Envio.</p>

        <!-- idpedido -->
        <input type="text" id="" name="idpedido" class="form-control mb-4" placeholder="Pedido" required>

        <!-- fecha -->
        <input type="date" id="" name="fecha" class="form-control mb-4" placeholder="nombre" required>

        <!-- hora -->
        <input type="time" id="" name="hora" class="form-control mb-4" placeholder="ciudad" required>

        <!-- transporte -->
        <select name="idtransporte" id="" class="form-control mb-4">
            @foreach ($transporte as $transporteItem)
                <option value="{{ $transporteItem->idtransporte }}">{{ $transporteItem->nombre }}</option>
            @endforeach
        </select>

        <!-- destino -->
        <select name="iddestino" id="" class="form-control mb-4">
            @foreach ($destino as $destinoItem)
                <option value="{{ $destinoItem->iddestino }}">{{ $destinoItem->nombre }}</option>
            @endforeach
        </select>

        <!-- guia -->
        <input type="text" id="" name="guia" class="form-control mb-4" placeholder="Guia" required>

        <!-- Sign in button -->
        <button class="btn btn-info btn-block" type="submit">Guardar</button>
        <a href="{{ route('cancelar', 'envio') }}" class="btn btn-danger btn-block">Cancelar</a>

    </form>
</div>

@endsection
@extends('plantilla.plantilla')

@section('title', 'Editar Envio')

@section('contenido')

<div class="card" style="width: 40rem; margin: auto;">
    <!-- Default form subscription -->
    <form class="text-center border border-light p-5" action="{{ route('envio.update', $envio->idenvio) }}" method="POST">
    @method('PUT')
    @csrf

        <p class="h4 mb-4">Registro de un Envio Nuevo</p>

        <p>LLenar todos los datos Obligatorios para el correcto registro de Envio.</p>

        <!-- idenvios -->
        <input type="text" name="idenvios" class="form-control mb-4" placeholder="nota" value="{{ $Envios->idenvios }}" required>

        <!-- fecha -->
        <input type="date" name="fecha" class="form-control mb-4" placeholder="fecha" value="{{ $Envios->fecha }}" required>

        <!-- hora -->
        <input type="time" name="hora" class="form-control mb-4" placeholder="hora" value="{{ $Envios->hora }}" required>

        <!-- transporte -->
        <select name="idtransporte" value="" class="form-control mb-4">
            @foreach ($transporte as $transporteItem)
                @if ($transporteItem->idtransporte == $Envios->idtransporte)
                    <option selected value="{{ $transporteItem->idtransporte }}">{{ $transporteItem->nombre }}</option>
                @else
                    <option value="{{ $transporteItem->idtransporte }}">{{ $transporteItem->nombre }}</option>
                @endif
                
            @endforeach
        </select>

        <!-- destino -->
        <select name="iddestino" value="" class="form-control mb-4">
            @foreach ($destino as $destinoItem)
                @if ($destinoItem->iddestino == $Envios->iddestino)
                    <option selected value="{{ $destinoItem->iddestino }}">{{ $destinoItem->nombre }}</option>
                @else
                    <option value="{{ $destinoItem->iddestino }}">{{ $destinoItem->nombre }}</option>
                @endif
            @endforeach
        </select>

        <!-- guia -->
        <input type="text" name="idtransporte" class="form-control mb-4" placeholder="guia" value=" {{ $Envios->guia }} " required>


        <!-- Sign in button -->
        <button class="btn btn-info btn-block" type="submit">Enviar</button>
        <a href="{{ route('cancelar', 'envio') }}" class="btn btn-danger btn-block">Cancelar</a>

    </form>
</div>

@endsection
@extends('plantilla.plantilla')

@section('title', 'Registro Pedido')

@section('contenido')

<div class="card" style="width: 40rem; margin: auto;">
    <!-- Default form subscription -->
    <form class="text-center border border-light p-5" action="{{ route('pedido.store') }}" method="POST">
    @csrf

        <p class="h4 mb-4">Registro de un Pedido Nuevo</p>

        <p>LLenar todos los datos Obligatorios para el correcto registro de Pedido.</p>

        <!-- idnota -->
        <input type="text" id="" name="idnota" class="form-control mb-4" placeholder="Nota" required>

        <!-- factura -->
        <input type="text" id="" name="idfac" class="form-control mb-4" placeholder="factura" required>

        <!-- fecha -->
        <input type="date" id="" name="fecha" class="form-control mb-4" placeholder="fecha" required>

        <!-- Cliente -->
        <select name="cliente" id="" class="form-control mb-4">
            @foreach ($Cliente as $ClienteItem)
            <option value="{{ $ClienteItem->idcliente }}">{{ $ClienteItem->nombre }}</option>
            @endforeach
        </select>

        <!-- Vendedor -->
        <select name="vendedor" id="" class="form-control mb-4">
            @foreach ($Vendedor as $VendedorItem)
            <option value="{{ $VendedorItem->idvendedor }}">{{ $VendedorItem->nombre }}</option>
            @endforeach
        </select>
        
        <!-- Sign in button -->
        <button class="btn btn-info btn-block" type="submit">Guardar</button>
        <a href="{{ route('cancelar', 'pedido') }}" class="btn btn-danger btn-block">Cancelar</a>

    </form>
</div>

@endsection
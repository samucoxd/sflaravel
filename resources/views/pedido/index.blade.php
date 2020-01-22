@extends('plantilla.plantilla')

@section('title','Pedido')

@section('contenido')

@if ( session('mensaje') )

<div class="container">
    <div class="alert alert-success alert-dissmissible fade show" role="alert">
        {{ session('mensaje') }}
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>

@endif

@if ( session('cancelar') )

<div class="container">
    <div class="alert alert-danger alert-dissmissible fade show" role="alert">
        {{ session('cancelar') }}
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>


@endif

<div class="card shadow mb-4" style="width: 60rem; margin: 20px auto;">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">TABLA DE PEDIDO</h6>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-2">
                    <a href="{{ route('pedido.create') }}" class="btn btn-success btn-sm float-right">Agregar Pedido</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th scope="col">Nota</th>
                    <th scope="col">Factura</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Vendedor</th>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">Nota</th>
                        <th scope="col">Factura</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Vendedor</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ( $Pedido as $PedidoItem )
                    <tr>
                        <td> {{ $PedidoItem->idnota }} </td>
                        <td> {{ $PedidoItem->idfac }} </td>
                        <td> {{ $PedidoItem->fecha }} </td>
                        <td> {{ $PedidoItem->cliente }} </td>
                        <td> {{ $PedidoItem->vendedor }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
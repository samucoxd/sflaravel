@extends('plantilla.plantilla')

@section('title','Envios')

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
        <h6 class="m-0 font-weight-bold text-primary">TABLA DE ENVIOS</h6>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-2">
                    <a href="{{ route('envio.create') }}" class="btn btn-success btn-sm float-right">Agregar Destino</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th scope="col">ID</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Transporte</th>
                    <th scope="col">Destino</th>
                    <th scope="col">Guia</th>
                    <th scope="col">Nota</th>
                    <th scope="col">Accion</th>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Transporte</th>
                        <th scope="col">Destino</th>
                        <th scope="col">Guia</th>
                        <th scope="col">Nota</th>
                        <th scope="col">Accion</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ( $Envios as $EnviosItem )
                    <tr>
                        <td> {{ $EnviosItem->idenvios }} </td>
                        <td> {{ $EnviosItem->fecha }} </td>
                        <td> {{ $EnviosItem->hora }} </td>
                        <td> {{ $EnviosItem->transporte }} </td>
                        <td> {{ $EnviosItem->destino }} </td>
                        <td> {{ $EnviosItem->guia }} </td>
                        <td> {{ $EnviosItem->idpedido }} </td>
                        <td>
                            <a href="{{ route('envio.edit', $EnviosItem->idenvios) }}" class="btn btn-success redondo">Editar</a>
                            <a href="{{ route('envio.show', $EnviosItem->idenvios) }}" class="btn btn-danger redondo">Ver</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
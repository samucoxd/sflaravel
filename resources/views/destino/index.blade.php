@extends('plantilla.plantilla')

@section('title','Destino')

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
        <h6 class="m-0 font-weight-bold text-primary">TABLA DE DESTINO</h6>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-2">
                    <a href="{{ route('destino.create') }}" class="btn btn-success btn-sm float-right">Agregar Destino</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th scope="col">Cod</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Accion</th>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">Cod</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Accion</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ( $Destino as $DestinoItem )
                    <tr>
                        <td> {{ $DestinoItem->iddestino }} </td>
                        <td> {{ $DestinoItem->nombre }} </td>
                        <td> {{ $DestinoItem->ciudad }} </td>
                        <td>
                            <a href="{{ route('destino.edit', $DestinoItem->iddestino) }}" class="btn btn-success redondo">Editar</a>
                            <a href="{{ route('destino.show', $DestinoItem->iddestino) }}" class="btn btn-danger redondo">Ver</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
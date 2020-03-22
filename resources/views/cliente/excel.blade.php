@extends('plantilla.plantilla')

@section('title','Cliente')

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


<form action="{{ 'cliente.import.excel' }}" method="post" enctype="multipart/form-data">
@csrf

    <input type="file" name="file">

    <button>Importar Clientes </button>
</form>

@endsection
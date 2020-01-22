<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class Pedido extends Model
{
    protected $primaryKey = 'idpedido';

    static function datosCliente()
    {
        $Cliente = DB::table('clientes')->select('idcliente', 'nombre')->get();
        return $Cliente;
    }

    static function listaPedido()
    {
        $Pedido = DB::table('pedidos')
        ->join('clientes', 'pedidos.cliente', '=', 'clientes.idcliente')
        ->join('vendedors', 'pedidos.vendedor', '=', 'vendedors.idvendedor')
        ->select('pedidos.*', 'clientes.nombre as cliente', 'vendedors.nombre as vendedor')
        ->get();
        return $Pedido;
    }

    static function datosVendedor()
    {
        $Vendedor = DB::table('vendedors')->select('idvendedor', 'nombre')->get();
        return $Vendedor;
    }
}

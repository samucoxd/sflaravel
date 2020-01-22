<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Envios extends Model
{
    protected $primaryKey = 'idenvios';
    protected $table = 'envioss';

    static function datosTransporte()
    {
        $transporte = DB::table('transportes')->select('idtransporte', 'nombre')->get();
        return $transporte;

    }

    static function datosDestino()
    {
        $destino = DB::table('destinos')->select('iddestino', 'nombre')->get();
        return $destino;
    }

    static function listarEnvios()
    { 
        $Envios = DB::table('envioss')
        ->join('transportes', 'envioss.idtransporte', '=', 'transportes.idtransporte')
        ->join('destinos', 'envioss.iddestino', '=', 'destinos.iddestino')
        ->select('envioss.*', 'transportes.nombre as transporte', 'destinos.nombre as destino')
        ->get();
        return $Envios;
    }
}

<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use App\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pedido = Pedido::listaPedido();
        return view('pedido.index', compact('Pedido'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Cliente = Pedido::datosCliente();
        $Vendedor = Pedido::datosVendedor();
        return view('pedido.create', compact('Cliente', 'Vendedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Pedido = new Pedido;
        $Pedido->idnota     = $request->idnota;
        $Pedido->idfac      = $request->idfac;
        $Pedido->fecha      = $request->fecha;
        $Pedido->cliente    = $request->cliente;
        $Pedido->vendedor   = $request->vendedor;
        $Pedido->save();
        return redirect()->route('pedido.index')->with('mensaje', 'Registro Guardado Correctamente');
    }
}

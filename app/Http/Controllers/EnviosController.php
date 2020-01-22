<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\EnviosStoreRequest;
use App\Envios;


class EnviosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Envios = Envios::listarEnvios();
        return view('envio.index', compact('Envios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transporte = Envios::datosTransporte();
        $destino     = Envios::datosDestino();
        return view('envio.create', compact('transporte', 'destino'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $envios = new Envios();
        $envios->fecha = $request->fecha;
        $envios->hora = $request->hora;
        $envios->idtransporte = $request->idtransporte;
        $envios->iddestino = $request->iddestino;
        $envios->guia = $request->guia;
        $envios->idpedido = $request->idpedido;
        $envios->save();
        //$Envios = Envios::create($request->all());
        return redirect()->route('envio.index')->with('mensaje', 'Registro Guardado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Envios  $envios
     * @return \Illuminate\Http\Response
     */
    public function show(Envios $envios)
    {
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Envios  $envios
     * @return \Illuminate\Http\Response
     */
    public function edit(Envios $envios)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Envios  $envios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Envios $envios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Envios  $envios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Envios $envios)
    {
        //
    }
}

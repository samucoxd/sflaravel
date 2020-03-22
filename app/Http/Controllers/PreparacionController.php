<?php

namespace App\Http\Controllers;

use App\Preparacion;
use Illuminate\Http\Request;

class PreparacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Preparacion    =   Preparacion::all();
        return view('preparacion.index', compact('Preparacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('preparacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Preparacion    =   new Preparacion();

        $Preparacion->fecha     =  $request->fecha;
        $Preparacion->hora      =  $request->hora;
        $Preparacion->picking   =  $request->picking;
        $Preparacion->revision  =  $request->revision;
        $Preparacion->embalaje  =  $request->embalaje;
        $Preparacion->fallo     =  $request->fallo;
        $Preparacion->idpedido  =  $request->idpedido;
        $Preparacion->estado    =  $request->estado;
        $Preparacion->save();
        return redirect()->route('preparacion.index')->with('mensaje','Registro Ingresado Correctamente.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Preparacion  $preparacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Preparacion    =   Preparacion::finOrFail($id);
        return view('preparacion.show', compact('Preparacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Preparacion  $preparacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Preparacion $preparacion)
    {
        $Preparacion    =   Preparacion::finOrFail($id);
        return view('preparacion.edit', compact('Preparacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Preparacion  $preparacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Preparacion    =   Preparacion::findOrFail($id);

        $Preparacion->fecha     =  $request->fecha;
        $Preparacion->hora      =  $request->hora;
        $Preparacion->picking   =  $request->picking;
        $Preparacion->revision  =  $request->revision;
        $Preparacion->embalaje  =  $request->embalaje;
        $Preparacion->fallo     =  $request->fallo;
        $Preparacion->idpedido  =  $request->idpedido;
        $Preparacion->estado    =  $request->estado;
        $Preparacion->save();
        return redirect()->route('preparacion.index')->with('mensaje','Registro Editado Correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Preparacion  $preparacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preparacion $preparacion)
    {
        //
    }
}

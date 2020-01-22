<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transporte;
class TransporteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Transporte = Transporte::all();
        return view('transporte.index', compact('Transporte'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transporte.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Transporte = new Transporte;
        $Transporte->idtransporte   = $request->idtransporte;
        $Transporte->nombre         = $request->nombre;
        $Transporte->save();
        return redirect()->route('transporte.index')->with('mensaje', 'Registro Guardado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Transporte = Transporte::findOrFail($id);
        return view('transporte.show', compact('Transporte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Transporte = Transporte::findOrfail($id);
        return view('transporte.edit', compact('Transporte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Transporte = Transporte::findOrFail($id);
        $Transporte->idtransporte   = $request->idtransporte;
        $Transporte->nombre         = $request->nombre;
        $Transporte->save();
        return redirect()->route('transporte.index')->with('mensaje', 'Registro Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

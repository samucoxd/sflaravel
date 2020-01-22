<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destino;

class DestinoController extends Controller
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
        $Destino = Destino::all();
        return view('destino.index', compact('Destino'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('destino.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Destino = new Destino;
        $Destino->nombre    = $request->nombre;
        $Destino->ciudad    = $request->ciudad;
        $Destino->save();
        return redirect()->route('destino.index')->with('mensaje', 'Registro Guardado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Destino = Destino::findOrFail($id);
        return view('destino.show', compact('Destino'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Destino = Destino::findOrfail($id);
        return view('destino.edit', compact('Destino'));
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
        $Destino = Destino::findOrFail($id);
        $Destino->nombre    = $request->nombre;
        $Destino->ciudad    = $request->ciudad;
        $Destino->save();
        return redirect()->route('destino.index')->with('mensaje', 'Registro Editado Correctamente');
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

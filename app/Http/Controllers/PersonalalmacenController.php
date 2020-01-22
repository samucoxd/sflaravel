<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personalalmacen;

class PersonalalmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Personalalmacen = Personalalmacen::all();
        return view('personalalmacen.index', compact('Personalalmacen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personalalmacen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Personalalmacen = new Personalalmacen;
        $Personalalmacen->nombre    = $request->nombre;
        $Personalalmacen->save();
        return redirect()->route('personalalmacen.index')->with('mensaje', 'Registro Guardado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Personalalmacen = Personalalmacen::findOrFail($id);
        return view('personalalmacen.show', compact('Personalalmacen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Personalalmacen = Personalalmacen::findOrFail($id);
        return view('personalalmacen.edit', compact('Personalalmacen'));
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
        $Personalalmacen = Personalalmacen::findOrFail($id);
        $Personalalmacen->nombre    = $request->nombre;
        $Personalalmacen->save();
        return redirect()->route('personalalmacen.index')->with('mensaje', 'Registro Editado Correctamente');
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

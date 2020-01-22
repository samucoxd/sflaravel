<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendedor;

class VendedorController extends Controller
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
        $Vendedor = Vendedor::all();
        return view('vendedor.index', compact('Vendedor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Vendedor = new Vendedor;
        $Vendedor->idvendedor   = $request->idvendedor;
        $Vendedor->nombre       = $request->nombre;
        $Vendedor->save();
        return redirect()->route('vendedor.index')->with('mensaje', 'Registro Guardado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Vendedor = Vendedor::findOrFail($id);
        return view('vendedor.show', compact('Vendedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Vendedor = Vendedor::findOrfail($id);
        return view('vendedor.edit', compact('Vendedor'));
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
        $Vendedor = Vendedor::findOrFail($id);
        $Vendedor->idvendedor   = $request->idvendedor;
        $Vendedor->nombre       = $request->nombre;
        $Vendedor->save();
        return redirect()->route('vendedor.index')->with('mensaje', 'Registro Editado Correctamente');
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

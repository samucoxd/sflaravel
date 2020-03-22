<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;
use App\Imports\ClienteImport;
use Maatwebsite\Excel\Facades\Excel;

class ClienteController extends Controller
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
        $Cliente = Cliente::all();
        return view('cliente.index', compact('Cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Cliente = new Cliente;
        $Cliente->idcliente = $request->codigo;
        $Cliente->nombre    = $request->nombre;
        $Cliente->zona      = $request->zona;
        $Cliente->save();
        return redirect()->route('cliente.index')->with('mensaje', 'Registro Guardado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Cliente = Cliente::findOrFail($id);
        return view('cliente.show', compact('Cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Cliente = Cliente::findOrfail($id);
        return view('cliente.edit', compact('Cliente'));
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
        $Cliente = Cliente::findOrFail($id);
        $Cliente->idcliente = $request->codigo;
        $Cliente->nombre    = $request->nombre;
        $Cliente->zona      = $request->zona;
        $Cliente->save();
        return redirect()->route('cliente.index')->with('mensaje', 'Registro Editado Correctamente');
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

    public function excel()
    {
        return view('cliente.excel');
    }

    public function importExcel(Request $request)
    {
        $file   =   $request->file('file');
        Excel::import(new ClienteImport, $file);
        return back()->with('mensaje', 'Impotacion Correcta de Clientes');
    }


}

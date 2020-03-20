<?php

namespace App\Http\Controllers;

use App\Despachador;
use DespachadorTableSeeders;
use Illuminate\Http\Request;

class DespachadorController extends Controller
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
        $Despachador = Despachador::all();
        return view('despachador.index', compact('Despachador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Despachador  $despachador
     * @return \Illuminate\Http\Response
     */
    public function show(Despachador $despachador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Despachador  $despachador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Despachador = Despachador::findOrfail($id);
        return view('despachador.edit', compact('Despachador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Despachador  $despachador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Despachador $despachador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Despachador  $despachador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Despachador $despachador)
    {
        //
    }
}

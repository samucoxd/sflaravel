<?php

namespace App\Http\Controllers;

use App\Fallo;
use Illuminate\Http\Request;

class FalloController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Fallo = Fallo::all();
        return view('fallo.index', compact('Fallo'));
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
     * @param  \App\Fallo  $fallo
     * @return \Illuminate\Http\Response
     */
    public function show(Fallo $fallo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fallo  $fallo
     * @return \Illuminate\Http\Response
     */
    public function edit(Fallo $fallo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fallo  $fallo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fallo $fallo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fallo  $fallo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fallo $fallo)
    {
        //
    }
}

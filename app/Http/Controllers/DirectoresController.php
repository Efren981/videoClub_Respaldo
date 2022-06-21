<?php

namespace App\Http\Controllers;

use App\Models\Directores;
use Illuminate\Http\Request;

class DirectoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Directores::all();
        return view("directores.index",compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('directores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Directores::create(['idPersona'=>$request->idPersona,'nombreArtistico'=>$request->nombreArtistico]);
        return redirect()->route('directores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Directores  $directores
     * @return \Illuminate\Http\Response
     */
    public function show(Directores $directore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Directores  $directores
     * @return \Illuminate\Http\Response
     */
    public function edit(Directores $directore)
    {
        return view('directores.update',compact("directore"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Directores  $directores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Directores $directore)
    {
        $directore->update(['idPersona'=>$request->idPersona,'nombreArtistico'=>$request->nombreArtistico]);
        return redirect()->route('directores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Directores  $directores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directores $directore)
    {
        $directore->delete();
        return redirect()->route('directores.index');
    }
}

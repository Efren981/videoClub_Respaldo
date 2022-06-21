<?php

namespace App\Http\Controllers;

use App\Models\Actores;
use Illuminate\Http\Request;

class ActoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Actores::all();
        return view("actores.index",compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('actores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Actores::create(['idPersona'=>$request->idPersona,'nombreArtistico'=>$request->nombreArtistico]);
        return redirect()->route('actores.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actores  $actores
     * @return \Illuminate\Http\Response
     */
    public function show(Actores $actores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actores  $actores
     * @return \Illuminate\Http\Response
     */
    public function edit(Actores $actore)
    {
        return view('actores.update',compact("actore"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actores  $actores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actores $actore)
    {
        $actore->update(['idPersona'=>$request->idPersona,'nombreArtistico'=>$request->nombreArtistico]);
        return redirect()->route('actores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actores  $actores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actores $actore)
    {
        $actore->delete();
        return redirect()->route('actores.index');
    }
}

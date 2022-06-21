<?php

namespace App\Http\Controllers;

use App\Models\Generos;
use Illuminate\Http\Request;

class GenerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Generos::all();
        return view('generos.index',compact('datos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('generos.create');
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
        $request->validate(['descripcionGenero'=>"required"],[],['descripcionGenero'=>'desc']);
        Generos::create(['descripcionGenero'=>$request->descripcionGenero,
            ]);
        return redirect()->route('generos.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function show(Generos $generos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function edit(Generos $genero)
    {
        return view('generos.update',compact('genero'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generos $genero)
    {
        $request->validate(['descripcionGenero'=>"required"],[],['descripcionGenero'=>'desc']);
        $genero->update(['descripcionGenero'=>$request->descripcionGenero]);
        return redirect()->route('generos.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Generos $genero)
    {
        $genero->delete();
        return redirect()->route('generos.index');
        //
    }
}

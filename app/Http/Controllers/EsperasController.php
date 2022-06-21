<?php

namespace App\Http\Controllers;

use App\Models\Esperas;
use Illuminate\Http\Request;

class EsperasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Esperas::all();
        return view("esperas.index",compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("esperas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Esperas::create(['idSocio'=>$request->idSocio,
        'idPelicula'=>$request->idPelicula,
        'prioridad'=>$request->prioridad,
        'fecha'=>$request->fecha,
        'estado'=>$request->estado,]);
        return redirect()->route('esperas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Esperas  $esperas
     * @return \Illuminate\Http\Response
     */
    public function show(Esperas $esperas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Esperas  $esperas
     * @return \Illuminate\Http\Response
     */
    public function edit(Esperas $espera)
    {
        return view("esperas.update",compact(espera));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Esperas  $esperas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Esperas $espera)
    {
        $espera->update(['idSocio'=>$request->idSocio,'idPelicula'=>$request->idPelicula,'prioridad'=>$request->prioridad,'fecha'=>$request->fecha,'estado'=>$request->estado]);
        return redirect()->route('esperas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Esperas  $esperas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Esperas $espera)
    {
        $espera->delete();
        return redirect()->route('esperas.index');
    }
}

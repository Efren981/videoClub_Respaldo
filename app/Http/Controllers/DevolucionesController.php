<?php

namespace App\Http\Controllers;

use App\Models\Devoluciones;
use Illuminate\Http\Request;

class DevolucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Devoluciones::all();
        return view("devoluciones.index",compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("devoluciones.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

        ]);

        Devoluciones:: create([
            "id_detalles_prestamos"=>$request->id_detalles_prestamos,
            "fechaDevolucion"=>$request->fechaDevolucion,
            "observaciones"=>$request->observaciones,
        ]);
        return redirect()->route("devoluciones.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function show(Devoluciones $devoluciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Devoluciones $devolucione)
    {
        return view('devoluciones.update',compact("devolucione"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devoluciones $devolucione)
    {
        $request->validate([

        ]);
        $devolucione->update([
          "id_detalles_prestamos"=>$request->id_detalles_prestamos,
          "fechaDevolucion"=>$request->fechaDevolucion,
          "observaciones"=>$request->observaciones
        ]);
        return redirect()->route("devoluciones.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devoluciones $devoluciones)
    {
        $devoluciones->delete();

        return redirect()->route("devoluciones.index");

    }
}

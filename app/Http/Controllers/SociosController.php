<?php

namespace App\Http\Controllers;

use App\Models\Socios;
use Illuminate\Http\Request;

class SociosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Socios::all();
        return view("socios.index",compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("socios.create");
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
            "telefono"=>"required|min:10|max:13",
            "direccion"=>"required|unique:socios",
            ],[],["name"=>"nombre","content"=>"contenido"]);

        Socios:: create([
            "idPersona"=>$request->idPersona,
            "telefono" =>$request->telefono,
            "direccion" =>$request->direccion,
        ]);
        return redirect()->route("socios.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Socios  $socios
     * @return \Illuminate\Http\Response
     */
    public function show(Socios $socios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Socios  $socios
     * @return \Illuminate\Http\Response
     */
    public function edit(Socios $socio)
    {
        return view('socios.update',compact("socio"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Socios  $socios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Socios $socio)
    {
        $request->validate(["idPersona"=>"required",
            "direccion"=>"required|unique:socios",
            "telefono"=>"required|min:10|max:13|unique:socios",
        ],[],["name"=>"nombre","content"=>"contenido"]);

        $socio->update(["idPersona"=>$request->idPersona,
            "direccion"=>$request->direccion,
            "telefono"=>$request->telefono]);
        return redirect()->route("socios.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Socios  $socios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Socios $socio)
    {
        $socio->delete();
        return redirect()->route("socios.index");
    }
}

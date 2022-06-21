<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Personas::all();
        return view('personas.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['nombre'=>'required|max:30|min:3','apellidoPaterno'=>'required|max:30|min:3','apellidoMaterno'=>'required|max:30|min:3']);
        Personas::create([
            "nombre"=>$request->nombre,
            "apellidoPaterno"=>$request->apellidoPaterno,
            "apellidoMaterno"=>$request->apellidoMaterno,
            "id_rangos"=>$request->id_rangos,
        ]);
        return redirect()->route('personas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show(Personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit(Personas $persona)
    {
        return view('personas.update',compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personas $persona)
    {
        $request->validate(['nombre'=>'required|max:30|min:3','apellidoPaterno'=>'required|max:30','apellidoMaterno'=>'required|max:30|min:3','id_rangos'=>"required"]);
        $persona->update(['nombre'=>$request->nombre,'apellidoPaterno'=>$request->apellidoPaterno,'apellidoMaterno'=>$request->apellidoMaterno,'id_rangos'=>$request->id_rangos]);
        return redirect()->route('personas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personas $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index');
    }
}

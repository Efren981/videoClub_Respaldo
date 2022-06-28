<?php

namespace App\Http\Controllers;
use App\Models\Cintas;
use App\Models\DetallesPrestamo;
use App\Models\Prestamos;
use App\Models\Socios;
use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $datos= Prestamos::all();
      return  view('prestamos.index',compact('datos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $socios=Socios::join("personas","socios.idPersona","personas.id")
            ->select("socios.id","personas.nombre","personas.apellidoPaterno","personas.apellidoMaterno")
            ->get();
        $cintas=Cintas::join('peliculas','cintas.idPelicula','peliculas.id')

            ->select('cintas.id','peliculas.titulo','cintas.codigo')
            ->get();
       // dd($cintas);

        return view('prestamos.create',compact("socios","cintas"));
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
       // dd($request->all());
        $request->validate(["fechaPrestamo"=>"required"]);
        $prestamo=Prestamos::create(['fechaPrestamo'=>$request->fechaPrestamo,]);
        DetallesPrestamo::create([
            "idSocio"=>$request->socio,
            "idCinta"=>$request->cinta,
            "idPrestamo"=>$prestamo->id,
        ]);
       // dd($prestamo);
        return redirect()->route('prestamos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function show(Prestamos $prestamos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestamos $prestamo)
    {
        return view('prestamos.update',compact('prestamo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamos $prestamo)
    {
        //
        $prestamo->update(['fechaPrestamo'=>$request->fechaPrestamo]);
        return redirect()->route('prestamos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestamos $prestamo)
    {
        //
        $prestamo->delete();
        return redirect()->route('prestamos.index');
    }
}

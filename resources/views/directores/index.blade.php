@extends('layouts.app')

@section("socios")
    active
@endsection
@section("content")
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h1 class="text-center mb-5">Directores</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <a href="{{url("registro_director/create")}}" class="btn btn-dark btn-sm mb-4 text-white"data-toggle="tooltip" title="Cargar nuevo director"><span class="icon-pen"> Nuevo</span></a>
                        <table class="table" style="background: #e1e1e8">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" class=" justify-content-center text-center">Nombre Artístico</th>
                                <th scope="col" class=" justify-content-center text-center">Nombre Real</th>
                                <th colspan="2" scope="col" class=" justify-content-center text-center">Acciones</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datos as $director)
                                <tr scope="row">
                                    <th scope="col">{{$loop->index+1}}</th>
                                    <td scope="col">{{$director->idPersona}}</td>
                                    <td scope="col">{{$director->nombreArtistico}}</td>
                                    <td scope="col"><a href="{{route("directores.edit",$director->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Editar personas"><span class="icon-compose">Editar</span></a></td>
                                    <td scope="col"><form action="{{route("directores.destroy",$director->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Eliminar esta difusion"><span class="icon-bin">Eliminar</span></button>
                                        </form></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

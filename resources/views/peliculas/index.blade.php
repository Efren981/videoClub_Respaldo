@extends('layouts.app')

@section("pelicula")
    active
@endsection
@section("content")
    <div class="row">
        <div class="col">
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="col">
                        <h1 class="text-center mb-5 alert-primary text-center">Peliculas</h1>
                    </div>
                    <div class="card">
                        <a href="{{url("peliculas/create")}}" class="btn btn-dark btn-sm mb-4 text-white"data-toggle="tooltip" title="Cargar nuevo socio"><span class="icon-pen">Nuevo</span></a>
                        <div class="card-header">
                            <table class="table" style="background: #e1e1e8">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Genero</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datos as $peliculas)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>{{$peliculas->idGenero}}</td>
                                        <td>{{$peliculas->titulo}}</td>
                                        <td style="display: flex"><a href="{{route("peliculas.edit",$peliculas->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Editar difusion"><i class="bi bi-plus-lg"></i></a>
                                            <form action="{{route("peliculas.destroy",$peliculas->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Eliminar esta difusion"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

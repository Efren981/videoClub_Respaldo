@extends('layouts.app')

@section("Generos")
    active
@endsection
@section("content")
    <div class="row">
        <div class="col">
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-center mb-5 alert-primary">Genero</h1>
                        </div>
                    </div>
                    <div class="card">
                        <a href="{{url("registro_genero/create")}}" class="btn btn-dark btn-sm mb-4 text-white"data-toggle="tooltip" title="Cargar nuevo Genero"><span class="icon-pen"> Nuevo</span></a>
                        <div class="card-header">
                        <table class="table" style="background: #e1e1e8">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Generos</th>
                                <th colspan="2" scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datos as $genero)
                                <tr scope="row">
                                    <th scope="col">{{$loop->index+1}}</th>
                                    <td scope="col">{{$genero->descripcionGenero}}</td>

                                    <td scope="col" style="display: flex"><a href="{{route("generos.edit",$genero->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Editar difusion"><i class="bi bi-plus-lg"></i></a>
                                        <form action="{{route("generos.destroy",$genero->id)}}" method="post">
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

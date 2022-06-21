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
                            <h1 class="text-center mb-5 alert-primary">Esperas</h1>
                        </div>
                    </div>
                    <div class="card">
                        <a href="{{url("esperas/create")}}" class="btn btn-dark btn-sm mb-4 text-white"data-toggle="tooltip" title="Cargar nuevo Esperas"><span class="icon-pen"> Nuevo</span></a>
                        <div class="card-header">
                            <table class="table" style="background: #e1e1e8">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Socio</th>
                                    <th scope="col">Pelicula</th>
                                    <th scope="col">Prioridad</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Estado</th>
                                    <th colspan="2" scope="col">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datos as $esperas)
                                    <tr scope="row">
                                        <th scope="col">{{$loop->index+1}}</th>
                                        <td scope="col">{{$esperas->idSocio}}</td>
                                        <th scope="col">{{$esperas->idPelicula}}</th>
                                        <th scope="col">{{$esperas->prioridad}}</th>
                                        <th scope="col">{{$esperas->fecha}}</th>
                                        <th scope="col">{{$esperas->estado}}</th>
                                        <td scope="col" style="display: flex"><a href="{{route("esperas.edit",$esperas->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Editar espera"><i class="bi bi-plus-lg"></i></a>
                                            <form action="{{route("$esperas.destroy",$esperas->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Eliminar esta espera"><i class="bi bi-trash"></i></button>
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

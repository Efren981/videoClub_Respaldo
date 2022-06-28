@extends('layouts.app')

@section("personas")
    active
@endsection
@section("content")
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h1 >Personas</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <a href="{{url("personas/create")}}" class="btn btn-dark btn-sm mb-4 text-white"data-toggle="tooltip" title="Cargar nueva persona"><span class="icon-pen"> Nuevo</span></a>

                        <table class="table" style="background: #e1e1e8">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido Paterno</th>
                                <th scope="col">Apellido Materno</th>
                                <th scope="col">Rango</th>
                                <th scope="col">Acciones</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datos as $personas)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$personas->nombre}}</td>
                                    <td>{{$personas->apellidoPaterno}}</td>
                                    <td>{{$personas->apellidoMaterno}}</td>
                                    <td>{{$personas->id_rangos}}</td>
                                    <td style="display: flex"><a href="{{route("personas.edit",$personas->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Editar personas"><i class="bi bi-plus-lg"></i></a>
                                        <form action="{{route("personas.destroy",$personas->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Eliminar esta difusion"><i class="bi bi-trash"></i></button>
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

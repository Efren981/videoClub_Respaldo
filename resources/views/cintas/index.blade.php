@extends('layouts.app')

@section("cinta")
  active
@endsection
@section("content")
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h1 class="text-center mb-5">Cintas</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <a href="{{url("cintas/create")}}" class="btn btn-dark btn-sm mb-4 text-white"data-toggle="tooltip" title="Cargar nueva cinta"><span class="icon-pen"> Nuevo</span></a>
                        <table class="table" style="background: #e1e1e8">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" class=" justify-content-center text-center">Número de película</th>
                                <th scope="col" class=" justify-content-center text-center">Código de película</th>
                                <th colspan="2" scope="col" class=" justify-content-center text-center">Acciones</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datos as $cintas)
                                <tr scope="row">
                                    <th scope="col">{{$loop->index+1}}</th>
                                    <td scope="col">{{$cintas->idPelicula}}</td>
                                    <td scope="col">{{$cintas->codigo}}</td>
                                    <td scope="col"><a href="{{route("cintas.edit",$cintas->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Editar esta cinta"><span class="icon-compose">Editar</span></a></td>
                                    <td scope="col"><form action="{{route("cintas.destroy",$cintas->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Eliminar esta cinta"><span class="icon-bin">Eliminar</span></button>
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

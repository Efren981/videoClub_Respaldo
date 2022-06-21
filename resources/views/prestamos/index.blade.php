@extends('layouts.app')

@section("prestamos")
    active
@endsection
@section("content")
    <div class="container">
        <div class="row" >
            <div class="row d-flex justify-content-center">
                <div class="col-8">
                    <div class="col" >
                        <h1 class="text-center mb-5 alert-primary">Prestamos</h1>
                    </div>
                    <div class="card">
                        <a
                            href="{{url("prestamos/create")}}"
                            class="btn btn-dark btn-sm mb-4 text-white"
                            data-toggle="tooltip"
                            title="Cargar nueva prestacion">
                    <span
                        class="icon-pen">
                        Generar Prestamo
                    </span>
                        </a>
                        <table class="table" style="background: #e1e1e8">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Fecha</th>
                                <th colspan="2">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datos as $prestamos)
                                <tr>
                                    <td scope="row">{{$loop->index+1}}</td>
                                    <td>{{$prestamos->fechaPrestamo}}</td>
                                    <td style="display: flex"><a href="{{route("prestamos.edit",$prestamos->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Editar difusion"><i class="bi bi-plus-lg"></i></a>
                                    <form action="{{route("prestamos.destroy",$prestamos->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Eliminar esta difusion"><span class="icon-bin"><i class="bi bi-trash"></i></span></button>
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
    </div>
@endsection

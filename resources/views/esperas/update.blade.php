@extends('layouts.app')

@section("Generos")
    active
@endsection
@section("content")
    <div class="row d-flex justify-content-center">
        <div class="col-6 ">
            <div class="card">
                <h1 class=" card-title mt-2 alert-primary text-center">Editar espera</h1>
                <div class="row d-flex justify-content-center">
                    <div class="col-7">
                        <form method="POST" action="{{url("esperas")}}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control @error('idSocio') is-invalid @enderror" id="idSocio" placeholder=".." name="idSocio">
                                <label for="idSocio">id socio</label>
                                @error('idSocio')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control @error('idPelicula') is-invalid @enderror" id="idPelicula" placeholder=".." name="idPelicula">
                                <label for="idPelicula">id Pelicula</label>
                                @error('idPelicula')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('prioridad') is-invalid @enderror" id="prioridad" placeholder=".." name="prioridad">
                                <label for="prioridad">Prioridad</label>
                                @error('prioridad')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control @error('fecha') is-invalid @enderror" id="fecha" placeholder=".." name="fecha">
                                <label for="fecha">fecha</label>
                                @error('fecha')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('estado') is-invalid @enderror" id="estado" placeholder=".." name="estado">
                                <label for="estado">estado</label>
                                @error('estado')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="row my-5 d-flex justify-content-center">
                                <div class="col-3"></div>
                                <div class="col-3">
                                    <a href="{{url("generos")}}" class="btn btn-danger mb-4 text-white"><span class="icon-arrow-thin-left" data-toggle="tooltip" title="Regresar al menu principal">Cancelar</span></a>
                                </div>
                                <div class="col-3">
                                    <button class="btn btn-primary" type="submit"><span class="icon-checkmark" data-toggle="tooltip" title="Agrega nuevo genero">Guardar</span></button>
                                </div>
                                <div class="col-3"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

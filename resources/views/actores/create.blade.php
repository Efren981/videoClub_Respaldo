@extends('layouts.app')

@section("actores")
    active
@endsection
@section("content")
    <div class="row d-flex justify-content-center">
        <div class="col-6 ">
            <div class="row">
                <div class="card">
                    <h1 class="card-title mt-4 mb-4 alert-primary text-center">Registro de Actores</h1>
                    <div class="row d-flex justify-content-center">
                        <div class="col-6">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12">
                                    <form method="POST" action="{{url("actores")}}">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('idPersona') is-invalid @enderror" id="idPersona" placeholder=".." name="idPersona" value="{{old("idPersona")}}">
                                            <label for="nombre">Id Persona</label>
                                            @error('idPersona')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('nombreArtistico') is-invalid @enderror" id="nombreArtistico" placeholder=".." name="nombreArtistico" value="{{old("nombreArtistico")}}">
                                            <label for="ap1">Nombre Artistico</label>
                                            @error('nombreArtistico')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="row my-5 flex justify-content-center">
                                            <div class="col-5">
                                                <a href="{{url("actores")}}" class="btn btn-danger mb-4 text-white"><span class="icon-arrow-thin-left" data-toggle="tooltip" title="Regresar al menu principal">Cancelar</span></a>
                                            </div>
                                            <div class="col-5">
                                                <button class="btn btn-primary" type="submit"><span class="icon-checkmark" data-toggle="tooltip" title="Agregar nueva publicacion">Guardar</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

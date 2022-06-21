@extends('layouts.app')

@section("socios")
    active
@endsection
@section("content")
    <div class="row d-flex justify-content-center">
        <div class="col-6 ">
            <div class="row">
                <div class="card">
                    <h1 class="card-title mt-4 mb-4 alert-primary text-center">Registro de personas</h1>
                    <div class="row d-flex justify-content-center">
                        <div class="col-6">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12">
                                    <form method="POST" action="{{url("directores")}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control @error('idPersona') is-invalid @enderror"
                                                           id="idPersona" placeholder="..." name="idPersona">
                                                    <label for="nombre_art">id Persoona</label>
                                                    @error('idPersona')
                                                    <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control @error('nombreArtistico') is-invalid @enderror"
                                                           id="nombreArtistico" placeholder="nombreArtistico" name="nombreArtistico">
                                                    <label for="nombreArtistico">Nombre Artistico</label>
                                                    @error('nombreArtistico')
                                                    <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-5 d-flex justify-content-center">
                                            <div class="col-3"></div>
                                            <div class="col-3">
                                                <a href="{{url("directores")}}" class="btn btn-danger mb-4 text-white"><span class="icon-arrow-thin-left" data-toggle="tooltip" title="Regresar al menu principal">Cancelar</span></a>

                                            </div>
                                            <div class="col-3">
                                                <button class="btn btn-primary" type="submit"><span class="icon-checkmark" data-toggle="tooltip" title="Agregar nueva publicacion">Guardar</span></button>
                                            </div>
                                            <div class="col-3"></div>
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

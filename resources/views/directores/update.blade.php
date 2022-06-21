@extends('layouts.app')

@section("socios")
    active
@endsection
@section("content")
    <div class="row mx-5 justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-title mt-4">
                    <h4 class="alert alert-primary text-center mx-4">Actualizar Director</h4>
                </div>
                <form method="POST" action="{{route("directores.update",$directore->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="row mx-5 d-flex justify-content-center">
                        <div class="col-10">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="idPersona" placeholder=".." name="idPersona" value="{{$directore->idPersona}}">
                                <label for="idPersona">Nuevo Id Persona</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nombreArtistico" placeholder=".." name="nombreArtistico" value="{{$directore->nombreArtistico}}">
                                <label for="nombreArtistico">Nuevo nombre Artistico</label>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5 d-flex justify-content-center">
                        <div class="col-3"></div>
                        <div class="col-3">
                            <a href="{{url("registro_director")}}" class="btn btn-danger mb-4 text-white" data-toggle="tooltip" title="Regresar el menu principal">Cancelar</a>

                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary" type="submit" data-toggle="tooltip" title="Guardar cambios">Guardar</button>
                        </div>
                        <div class="col-3"></div>
                    </div>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>
@endsection

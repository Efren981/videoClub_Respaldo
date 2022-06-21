@extends('layouts.app')

@section("cinta")
    active
@endsection
@section("content")
    <div class="container">
        <h4>Editar Actores</h4>
        <div class="row">
            <div class="col-xl-12">
                <form method="POST" action="{{route("actores.update",$actore->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="row mx-5 d-flex justify-content-center">
                        <div class="col-10">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error ('idPersona') is-invalid @enderror" id="idPersona" placeholder=".." name="idPersona" value="{{$actore->idPersona}}">
                                <label for="idPersona">Nuevo Id Persona</label>
                                @error('idPersona')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error ('nombreArtistico') is-invalid @enderror" id="nombreArtistico" placeholder=".." name="nombreArtistico" value="{{$actore->nombreArtistico}}">
                                <label for="Direccion">Nuevo nombre actor</label>
                                @error('nombreArtistico')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row my-5 d-flex justify-content-center">
                        <div class="col-3"></div>
                        <div class="col-3">
                            <a href="{{url("actores")}}" class="btn btn-danger mb-4 text-white" data-toggle="tooltip" title="Regresar el menu principal">Cancelar</a>

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

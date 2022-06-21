@extends('layouts.app')

@section("pelicula")
    active
@endsection
@section("content")
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-6 ">
            <h1 class="alert-primary text-center">Crear Pelicula</h1>
            <div class="card-header">
               <div class="text-center">
                <form class="mt-4" method="POST" action="{{url("peliculas")}}">
                    @csrf
                    <div class="form-floating mb-6">
                        <select class="form-control @error ('idGenero') is-invalid @enderror" id="idGenero" name="idGenero">
                            <option selected>Eliga el genero de la pelicula</option>
                            <option value="1">eroticas</option>
                            <option value="2">eroticas recomendacion de pipe</option>
                            <option value="3">eroticas de faraón love shady</option>
                        </select>
                            @error('idGenero')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control @error ('titulo') is-invalid @enderror" id="titulo" name="titulo" value="{{old("titulo")}}">
                        <label for="titulo">Titulo</label>
                        @error('titulo')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="row my-5 d-flex justify-content-center">
                        <div class="col-3">
                            <a href="{{url("peliculas")}}" class="btn btn-danger mb-4 text-white"><span class="icon-arrow-thin-left" data-toggle="tooltip" title="Regresar al menu principal">Cancelar</span></a>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary" type="submit"><span class="icon-checkmark" data-toggle="tooltip" title="Agregar nueva publicacion">Guardar</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

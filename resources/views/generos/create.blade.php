@extends('layouts.app')

@section("Generos")
    active
@endsection
@section("content")
    <div class="row d-flex justify-content-center">
        <div class="col-6 ">
            <div class="card">
                <h1 class=" card-title mt-2 alert-primary text-center">Registrar nuevo genero</h1>
                <div class="row d-flex justify-content-center">
                    <div class="col-7">
                        <form method="POST" action="{{url("generos")}}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('descripcionGenero') is-invalid @enderror" id="desc" placeholder=".." name="descripcionGenero">
                                <label for="desc"> Descripcion Genero</label>
                                @error('descripcionGenero')
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

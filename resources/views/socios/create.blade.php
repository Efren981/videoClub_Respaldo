@extends('layouts.app')

@section("socios")
    active
@endsection
@section("content")
<div class="row d-flex justify-content-center">
    <div class="col-6 ">
        <h1 class="alert-primary text-center">Crear Socios</h1>
        <div class="row d-flex justify-content-center">
            <div class="col">
                <figure class="figure">
                    <img src="{{url("img/video.png")}}" height="150" width="150">
                </figure>
            </div>
        </div>
        <div class="card">
            <div class="row">
                <div class="col-7">
                    <form method="POST" action="{{url("socios")}}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error ('idPersona') is-invalid @enderror" id="idPersona" placeholder=".." name="idPersona">
                            <label for="idPersona">Numero de socio</label>
                            @error('idPersona')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error ('direccion') is-invalid @enderror" id="direccion" placeholder=".." name="direccion">
                            <label for="direccion">Direccion</label>
                            @error('direccion')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error ('telefono') is-invalid @enderror" id="telefono" placeholder=".." name="telefono">
                            <label for="telefono">Telefono</label>
                            @error('telefono')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="row my-5 d-flex justify-content-center">
                            <div class="col-3"></div>
                            <div class="col-3">
                                <a href="{{url("socios")}}" class="btn btn-danger mb-4 text-white"><span class="icon-arrow-thin-left" data-toggle="tooltip" title="Regresar al menu principal">Cancelar</span></a>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-primary" type="submit"><span class="icon-checkmark" data-toggle="tooltip" title="Agregar nueva publicacion">Guardar</span></button>
                            </div>
                            <div class="col-3"></div>
                        </div>
                    </form>
                </div>
                <div class="col-5">
                    <figure class="figure">
                        <img src="{{url("img/sirueta.jpeg")}}" class="text-lg-end" height="300px" width="300px">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

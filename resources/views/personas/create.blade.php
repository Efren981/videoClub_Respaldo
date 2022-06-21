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
                                    <form method="POST" action="{{url("registro_personas")}}">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder=".." name="nombre">
                                            <label for="nombre">Nombre</label>
                                            @error('nombre')
                                            <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('apellidoPaterno') is-invalid @enderror" id="ap1" placeholder=".." name="apellidoPaterno">
                                            <label for="ap1">Apellido Paterno</label>
                                            @error('apellidoPaterno')
                                            <div class="invalid-feedback">{{$message}}</div>
                                             @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('apellidoMaterno') is-invalid @enderror" id="ap2"placeholder=".." name="apellidoMaterno">
                                            <label for="ap2">Apellido Materno</label>
                                            @error('apellidoMaterno')
                                            <div class="invalid-feedback">{{$message}}</div>
                                             @enderror
                                        </div>
                                        <div class="form-label">
                                            <select class="form-control @error ('id_rangos') is-invalid @enderror" id="id_rangos" name="id_rangos">
                                                <option selected>Selecciona un rango</option>
                                                <option selected value="1">Socio</option>
                                                <option selected value="2">Director</option>
                                                <option selected value="3">Actor</option>
                                            </select>
                                            @error('id_rangos')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="row my-5 flex justify-content-center">
                                            <div class="col-5">
                                                <a href="{{url("personas")}}" class="btn btn-danger mb-4 text-white"><span class="icon-arrow-thin-left" data-toggle="tooltip" title="Regresar al menu principal">Cancelar</span></a>
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

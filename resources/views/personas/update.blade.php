@extends('layouts.app')

@section("personas")
    active
@endsection
@section("content")
    <div class="row mx-5 justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-title mt-4">
                    <h4 class="alert alert-primary text-center mx-4">Actualizar Persona</h4>
                </div>
                <form method="POST" action="{{route("personas.update",$persona->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="row mx-5 d-flex justify-content-center">
                        <div class="col-10">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="newname" placeholder=".." name="nombre" value="{{$persona->nombre}}">
                                <label for="newname">Nuevo nombre</label>
                                @error('nombre')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('apellidoPaterno') is-invalid @enderror" id="newapp" placeholder=".." name="apellidoPaterno" value="{{$persona->apellidoPaterno}}">
                                <label for="newapp">Nuevo apellido paterno</label>
                                @error('apellidoPaterno')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('apellidoMaterno') is-invalid @enderror" id="newamp" placeholder=".." name=apellidoMaterno value="{{$persona->apellidoMaterno}}">
                                <label for="newamp">Nuevo apellido materno</label>
                                @error('apellidoMaterno')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-6">
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
                        </div>
                    </div>
                        <div class="row my-5 d-flex justify-content-center">
                            <div class="col-3"></div>
                            <div class="col-3">
                                <a href="{{url("personas")}}" class="btn btn-danger mb-4 text-white" data-toggle="tooltip" title="Regresar el menu principal">Cancelar</a>

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

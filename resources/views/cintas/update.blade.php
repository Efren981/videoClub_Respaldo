@extends('layouts.app')

@section("cinta")
  active
@endsection
@section("content")
<div class="container">
    <h4>Editar Cinta</h4>
    <div class="row">
        <div class="col-xl-12">
          <form method="POST" action="{{route("cintas.update",$cinta->id)}}">
              @csrf
              @method('PUT')
              <div class="row mx-5 d-flex justify-content-center">
                  <div class="col-10">
                      <div class="form-floating mb-3">
                          <input type="text" class="form-control @error ('idPelicula') is-invalid @enderror" id="idPelicula" placeholder=".." name="idPelicula" value="{{$cinta->idPelicula}}">
                          <label for="idPelicula">Nueva pelicula</label>
                          @error('idPelicula')
                          <div class="invalid-feedback">{{$message}}</div>
                          @enderror
                      </div>
                      <div class="form-floating mb-3">
                          <input type="text" class="form-control @error ('codigo') is-invalid @enderror" id="codigo" placeholder=".." name="codigo" value="{{$cinta->codigo}}">
                          <label for="Direccion">Nueva direccion</label>
                          @error('codigo')
                          <div class="invalid-feedback">{{$message}}</div>
                          @enderror
                      </div>
                  </div>
              </div>
              <div class="row my-5 d-flex justify-content-center">
                  <div class="col-3"></div>
                  <div class="col-3">
                      <a href="{{url("cintas")}}" class="btn btn-danger mb-4 text-white" data-toggle="tooltip" title="Regresar el menu principal">Cancelar</a>

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

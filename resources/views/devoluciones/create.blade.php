@extends('layouts.app')

@section("devoluciones")
    active
@endsection
@section("content")
    <div class="row d-flex justify-content-center">
        <div class="col-6 ">
            <div class="alert alert-primary text-center" role="alert">
                <h3>Crear Devolucion</h3>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="card shadow-sm al a">
                        <div class="card-header">
                            <div class="card-body">
                                <form method="POST" action="{{url("devoluciones")}}">
                                    @csrf
                                    <div class="row">
                                        <h5 class="text-center">Nueva Devolución</h5>
                                        <div class="mt-3">
                                            <div class="card shadow-sm al">
                                                <div class="card-body">
                                                    <form method="POST" action="{{url("devoluciones")}}">
                                                        @csrf
                                                        <div class="form-floating mb-3 ">
                                                            <input type="text" class="form-control @error('id_detalle__prestamos') is-invalid @enderror"
                                                                   id="id_detalle__prestamos" placeholder=""
                                                                   name="id_detalle__prestamos">
                                                            <label for="id_detalle__prestamos">Nunero de prestamo</label>
                                                            @error('id_detalle__prestamos')
                                                            <div class="invalid-feedback">{{$message}}</div>@enderror
                                                        </div>

                                                        <div class="form-floating mb-3">
                                                            <input type="date" class="form-control @error('fecha_devolucion') is-invalid @enderror"
                                                                   id="fecha_devolucion" placeholder="" name="fecha_devolucion">
                                                            <label for="fecha_devolucion">Fecha de Devolucion</label>
                                                            @error('fecha_devolucion')
                                                            <div class="invalid-feedback">{{$message}}</div>@enderror
                                                        </div>

                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control @error('observaciones') is-invalid @enderror" id="observaciones" placeholder=""
                                                                   name="observaciones">
                                                            <label for="observaciones">Observaciones</label>
                                                            @error('observaciones')
                                                            <div class="invalid-feedback">{{$message}}</div>@enderror
                                                        </div>

                                                        <div class="row my-3 justify-content-center">
                                                            <div class="col-4">
                                                                <a href="{{url("devoluciones")}}" class="btn btn-danger text-white"
                                                                   data-toggle="tooltip" title="Regresar al menu principal">Cancelar</a>
                                                            </div>
                                                            <div class="col-4">
                                                                <button class="btn btn-primary" type="submit"
                                                                        data-toggle="tooltip" title="Agregar nueva devolucion">Guardar</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

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
@endsection

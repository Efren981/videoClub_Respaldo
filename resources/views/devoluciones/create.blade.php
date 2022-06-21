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
                                    <div class="form-floating mb-3 ">
                                        <input type="text" class="form-control @error('id_detalles_prestamos') is-invalid @enderror"
                                               id="id_detalles_prestamos" placeholder=""
                                               name="id_detalles_prestamos">
                                        <label for="id_detalles_prestamos">Numero de prestamo</label>
                                        @error('id_detalles_prestamos')
                                        <div class="invalid-feedback">{{$message}}</div>@enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control @error('fechaDevolucion') is-invalid @enderror"
                                               id="fechaDevolucion" placeholder="" name="fechaDevolucion">
                                        <label for="fechaDevolucion">Fecha de Devolucion</label>
                                        @error('fechaDevolucion')
                                        <div class="invalid-feedback">{{$message}}</div>@enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('observaciones') is-invalid @enderror" id="observaciones" placeholder=""
                                               name="observaciones">
                                        <label for="observaciones">Observaciones</label>
                                        @error('observaciones')
                                        <div class="invalid-feedback">{{$message}}</div>@enderror
                                    </div>
                                    <div class="row my-3 d-flex justify-content-center">
                                        <div class="col-3">
                                            <a href="{{url("devoluciones")}}" class="btn btn-danger mb-4 text-white"
                                               data-toggle="tooltip" title="Regresar al menu principal">Cancelar</a>
                                        </div>
                                        <div class="col-3">
                                            <button class="btn btn-primary" type="submit"
                                            data-toggle="tooltip" title="Agregar nueva devolucion">Guardar</button>
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

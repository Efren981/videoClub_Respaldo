@extends('layouts.app')
@section("prestamos")
    active
@endsection
@section("content")
    <div class="row d-flex justify-content-center">
        <div class="col-6 ">
            <div class="row">
                <div class="card">
                    <h1 class="card-title mt-4 mb-4 alert-primary text-center">Generar Prestamo</h1>
                    <div class="row d-flex justify-content-center">
                        <div class="col-6">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12">
                                    <form method="POST" action="{{url("prestamos")}}">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control @error ('fechaPrestamo') is-invalid @enderror" id="fechaPrestamo" placeholder=".." name="fechaPrestamo">
                                            <label for="nombre">Fecha Prestamo</label>
                                            @error('fechaPrestamo')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="row my-5 d-flex justify-content-center">
                                            <div class="col-3"></div>
                                            <div class="col-3">
                                                <a href="{{url("prestamos")}}" class="btn btn-danger mb-4 text-white"><span class="icon-arrow-thin-left" data-toggle="tooltip" title="Regresar al menu principal">Cancelar</span></a>

                                            </div>
                                            <div class="col-3">
                                                <button class="btn btn-primary" type="submit"><span class="icon-checkmark" data-toggle="tooltip" title="Agregar nueva publicacion">Guardar</span></button>
                                            </div>
                                            <div class="col-3"></div>
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


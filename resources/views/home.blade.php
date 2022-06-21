@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header alert-primary text-center"> BIENVENIDO </div>

                <div class="card-body flex-column text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img src="{{url("img/loge.png")}}">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

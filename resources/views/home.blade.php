@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Bienvenid@ <span class="badge badge-primary">{{ Auth::user()->name }}</span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Sirvase en navegar por cada una de las secciones del sitio. <br><br>
                    En caso de que la opción solicitada no aparezca en pantalla, favor de ponerse en contacto con el administrador del sitio, esto se debe generalmente a un problema de permisos.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

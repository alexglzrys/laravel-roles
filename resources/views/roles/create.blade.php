@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-8 offset-md-2">
      <div class="card">
        <div class="card-header">
          <h5>Formulario de Registro de Roles</h5>
        </div>
        <div class="card-body">
          {!! Form::open(['route' => ['roles.store']]) !!}
            @include('roles.partials.form')
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
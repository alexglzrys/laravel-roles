@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2">
        <div class="card">
          <div class="card-header">
            <h5>Formulario de Edición de Usuarios</h5>
          </div>
          <div class="card-body">
            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
              @include('users.partials.form')
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
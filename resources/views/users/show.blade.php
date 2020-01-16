@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2">
        <div class="card">
          <div class="card-header">
            <h5>Usuario <span class="badge badge-primary">{{ $user->id }}</span></h5>
          </div>
          <div class="card-body">
            <p><strong>Nombre del Usuario: </strong><br>{{ $user->name }}</p>
            <p><strong>Email</strong><br>{{ $user->email }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
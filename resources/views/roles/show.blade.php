@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-8 offset-sm-2">
      <div class="card">
        <div class="card-header">
          <h5>Rol <span class="badge badge-primary">{{ $role->id }}</span></h5>
        </div>
        <div class="card-body">
          <p><strong>Nombre:</strong><br>{{ $role->name }}</p>
          <p><strong>Slug:</strong><br>{{ $role->slug }}</p>
          <p><strong>Descripción:</strong><br>{{ $role->description }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2">
        <div class="card">
          <div class="card-header">
            <h5>Producto <span class="badge badge-primary">{{ $product->id }}</span></h5>
          </div>
          <div class="card-body">
            <p><strong>Nombre del Producto: </strong><br>{{ $product->name }}</p>
            <p><strong>Descripción</strong><br>{{ $product->description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
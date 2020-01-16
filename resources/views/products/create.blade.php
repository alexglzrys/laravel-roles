@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2">
        <div class="card">
          <div class="card-header">
            <h5>Formulario de Registro de Productos</h5>
          </div>
          <div class="card-body">
            {!! Form::open(['route' => ['products.store']]) !!}
              @include('products.partials.form')
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2">
        <div class="card">
          <div class="card-header">
            <h5>Formulario de Edición de Productos</h5>
          </div>
          <div class="card-body">
            {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'put']) !!}
              @include('products.partials.form')
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
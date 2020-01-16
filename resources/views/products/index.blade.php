@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2">
        <div class="card">
          <div class="card-header">
            <h5 class="float-left">Administrador de Catálogo de Productos</h5>
            <!-- ¿El usuario puede crear productos? -->
            @can('products.create')
              <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
            @endcan
          </div>
          <div class="card-body">
            <table class="table table-hover table-striped table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Nombre del Producto</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                  <tr>
                    <td width="10">{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td width="10">
                      <!-- ¿El usuario puede ver los detalles de un producto? -->
                      @can('products.show')
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-success">Mostrar</a>
                      @endcan
                    </td>
                    <td width="10">
                      <!-- ¿El usuario puede editar un producto? -->
                      @can('products.edit')
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Editar</a>
                      @endcan
                    </td>
                    <td width="10">
                      <!-- ¿El usuario puede eliminar un producto? -->
                      @can('products.destroy')
                        {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                          {!! Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger']) !!}
                        {!! Form::close()  !!}
                      @endcan
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer">
            {!! $products->render() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
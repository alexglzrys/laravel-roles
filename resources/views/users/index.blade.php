@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2">
        <div class="card">
          <div class="card-header">
            <h5><i class="fas fa-book-reader"></i> Administrador de Catálogo de Usuarios</h5>
          </div>
          <div class="card-body">
            <table class="table table-hover table-striped table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Nombre del Usuario</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                  <tr>
                    <td width="10">{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td width="10">
                      <!-- ¿El usuario puede ver los detalles de un producto? -->
                      @can('users.show')
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-success" style="width: 79px"><i class="fas fa-eye"></i> Mostrar</a>
                      @endcan
                    </td>
                    <td width="10">
                      <!-- ¿El usuario puede editar un producto? -->
                      @can('users.edit')
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning" style="width: 79px"><i class="fas fa-edit"></i> Editar</a>
                      @endcan
                    </td>
                    <td width="10">
                      <!-- ¿El usuario puede eliminar un producto? -->
                      @can('users.destroy')
                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                          {!! Form::button('<i class="fas fa-trash"></i> Eliminar', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger', 'style' => 'width: 79px']) !!}
                        {!! Form::close()  !!}
                      @endcan
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer">
            {!! $users->render() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
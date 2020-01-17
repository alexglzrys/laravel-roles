@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            <h5 class="float-left"><i class="fas fa-book-reader"></i> Administrador del Catálogo de Roles</h5>
            @can('roles.create')
              <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary float-right"><i class="fas fa-plus-circle"></i> Crear</a>
            @endcan
          </div>
          <div class="card-body">
            <table class="table table-hover table-striped table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Nombre del Rol</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach($roles as $role)
                  <tr>
                    <td width="10">{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td width="10">
                      <!-- ¿El usuario puede ver los detalles de un rol? -->
                      @can('roles.show')
                        <a href="{{ route('roles.show', $role->id) }}" class="btn btn-sm btn-success" style="width: 79px"><i class="fas fa-eye"></i> Mostrar</a>
                      @endcan
                    </td>
                    <td width="10">
                      <!-- ¿El usuario puede editar los detalles de un rol? -->
                      @can('roles.edit')
                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-warning" style="width: 79px"><i class="fas fa-edit"></i> Editar</a>
                      @endcan
                    </td>
                    <td width="10">
                      @can('roles.destroy')
                        {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'delete']) !!}
                          {!! Form::button('<i class="fas fa-trash"></i> Eliminar', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger', 'style' => 'width: 79px']) !!}
                        {!! Form::close() !!}
                      @endcan
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer">
            {!! $roles->render() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
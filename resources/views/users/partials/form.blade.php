<div class="form-group">
  {!! Form::label('name', 'Nombre del Usuario') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<h5>Lista de roles disponibles en el sistema</h5>
<div class="form-group">
  <ul class="list-unstyled">
    @foreach($roles as $role)
      <li class="list-item">
        <label>
            {!! Form::checkbox('roles[]', $role->id, null) !!}
            {{ $role->name }}
            <em>({{ $role->description ?: 'Sin descripción' }})</em>
        </label>
      </li>
    @endforeach  
  </ul>
</div>
{!! Form::button('<i class="fas fa-save"></i> Guardar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
<div class="form-group">
  {!! Form::label('name', 'Nombre del Rol') !!}
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese un nombre para el nuevo rol']) !!}
</div>
<div class="form-group">
  {!! Form::label('slug', 'Slug') !!}
  {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese un identificador para el nuevo rol']) !!}
</div>
<div class="form-group">
  {!! Form::label('description', 'Descripción') !!}
  {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 5, 'placeholder' => 'Ingrese una descripción detallada para el nuevo rol']) !!}
</div>

<hr>
<h5>Permisos Especiales</h5>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    {!! Form::radio('special', 'all-access', null, ['class' => 'form-check-input']) !!} Acceso Total
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    {!! Form::radio('special', 'no-access', null, ['class' => 'form-check-input']) !!} Ningún Acceso
  </label>
</div>

<hr>
<h5>Listado de Permisos</h5>
<div class="form-group">
  <ul class="list-unstyled">
    @foreach($permissions as $permission)
      <li class="list-item">
        <div class="form-check">
          <label class="form-check-label">
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'form-check-input']) !!}
            {{ $permission->name }}
            <em>{{ $permission->description ?: 'Sin descripción' }}</em>
          </label>
        </div>
      </li>
    @endforeach
  </ul>
</div>
{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
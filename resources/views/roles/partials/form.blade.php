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
{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
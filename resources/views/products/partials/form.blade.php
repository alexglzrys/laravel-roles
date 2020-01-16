<div class="form-group">
  {!! Form::label('name', 'Nombre del Producto') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('description', 'Descripción del Producto') !!}
  {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 5]) !!}
</div>
{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
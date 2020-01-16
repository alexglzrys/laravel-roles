<div class="form-group">
  {!! Form::label('name', 'Nombre del Usuario') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('email', 'Correo Electrónico') !!}
  {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
<div class="form-group">
  {!! Form::label('name', 'Nombre del Producto') !!}
  {!! Form::text('name', null, ['class' => 'form-control ' . ($errors->has('name') ? 'is-invalid' : '')]) !!}
  {!! $errors->first('name', '<span class="invalid-feedback">:message</span>') !!}
</div>
<div class="form-group">
  {!! Form::label('description', 'Descripción del Producto') !!}
  {!! Form::textarea('description', null, ['class' => 'form-control ' . ($errors->has('description') ? 'is-invalid' : ''), 'rows' => 5]) !!}
  @error('description')
    <span class="invalid-feedback">{{ $message }}</span>
  @enderror
</div>
{!! Form::button('<i class="fas fa-save"></i> Guardar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
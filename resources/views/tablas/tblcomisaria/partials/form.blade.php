<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('state', 'Estado') }}
	{{ Form::select('state', [ '1' => 'Activo', '0' => 'Inactivo'], null, ['class' => 'form-control', 'id' => 'state']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Descripción') }}
	{{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => '4']) }}
</div>
<div class="form-group">
	@if( ! empty($category['id']))
		{{ Form::submit('Actualizar', ['class' => 'btn btn-warning']) }}
	@else
		{{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
	@endif
	<a href="{{ url('/categories') }}" class="btn btn-default pull-right">Cancelar</a>
</div>
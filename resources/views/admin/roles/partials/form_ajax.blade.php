<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box_plus box_plus-default ">
        <div id="box_plus-title" class="box_plus-heading">
        	@if(isset($role))
        		Editar Rol
	        @else
        		Crear Rol
	        @endif
        </div>
        <div class="box_plus-body">

        	@if(isset($role))
          	{!! Form::model($role, [ 'route' => ['roles.update', $role->id], 'method' => 'PUT', 'id'=>'form_role' ]) !!}
	        @else
	          {!! Form::open([ 'route' => 'roles.store', 'id'=>'form_role' ]) !!}
	        @endif

						<div class="form-group">
							{{ Form::label('name', 'Nombre') }}
							{{ Form::text('name', null, ['class' => 'form-control'.($errors->has('name')?" is-invalid":""), 	"autofocus", 'id' => 'name']) }}
							<span id="error-name" class="invalid-feedback"></span>
						</div>

						<div class="form-group">
							{{ Form::label('slug', 'URL Amigable') }}
							{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
						</div>

						<div class="form-group">
							{{ Form::label('description', 'Descripción') }}
							{{ Form::textarea('description', null, ['class' => 'form-control'.($errors->has('description')?" is-invalid":""), 'rows' => '4']) }}
							<span id="error-description" class="invalid-feedback"></span>
						</div>

						<hr>
						<h3>Permiso especial</h3>
						<div class="form-group">
						 	<label>{{ Form::radio('special', 'all-access') }} Acceso total</label>
						 	<label>{{ Form::radio('special', 'no-access') }} Ningún acceso</label>
						 	<label>{{ Form::radio('special', '') }} Ningun Permiso Especial</label>
						</div>

						<h3>Lista de permisos</h3>
						<div class="form-group">
							<ul class="list-unstyled">
								@foreach($permissions as $permission)
							    <li>
							        <label>
							        {{ Form::checkbox('permissions[]', $permission->id, null) }}
							        {{ $permission->name }}
							        <em>({{ $permission->description }})</em>
							        </label>
							    </li>
							    @endforeach
						    </ul>
						</div>
						
						<div class="form-group">
							@if( ! empty($role['id'])) 
								{!! Form::button("Actualizar",["type" => "submit","class"=>"btn btn-warning"])!!}
							@else
								{!! Form::button("Guardar",["type" => "submit","class"=>"btn btn-primary"])!!}
							@endif
							<a href="javascript:ajaxLoad('{{ url('/roles') }}')" class="btn btn-default pull-right">Cancelar</a>
						</div>
					
          {!! Form::close() !!}

				</div>
      </div>
    </div>
  </div>
</div>
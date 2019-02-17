<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box_plus box_plus-default ">
        <div id="box_plus-title" class="box_plus-heading">
        	@if(isset($caracteristica))
        		Editar Caracteristica
	        @else
        		Crear Caracteristica
	        @endif
        </div>
        <div class="box_plus-body">

        	@if(isset($caracteristica))
          	{!! Form::model($caracteristica, [ 'route' => ['caracteristicas.update', $caracteristica->id], 'method' => 'PUT', 'id'=>'form_caracteristica' ]) !!}
	        @else
	          {!! Form::open([ 'route' => 'caracteristicas.store', 'id'=>'form_caracteristica' ]) !!}
	        @endif

						<div class="form-group">
							{{ Form::label('name', 'Nombre') }}
							{{ Form::text('name', null, ['class' => 'form-control'.($errors->has('name')?" is-invalid":""), 	"autofocus", 'id' => 'name']) }}
							<span id="error-name" class="invalid-feedback"></span>
						</div>

						<div class="form-group">
							{{ Form::label('state', 'Estado') }}
							{{ Form::select('state', [ '1' => 'Activo', '0' => 'Inactivo'], null, ['class' => 'form-control', 'id' => 'state']) }}
						</div>

						<div class="form-group">
							{{ Form::label('description', 'Descripción') }}
							{{ Form::textarea('description', null, ['class' => 'form-control'.($errors->has('description')?" is-invalid":""), 'rows' => '4']) }}
							<span id="error-description" class="invalid-feedback"></span>
						</div>
						
						<div class="form-group">
							@if( ! empty($caracteristica['id'])) 
								{!! Form::button("Actualizar",["type" => "submit","class"=>"btn btn-warning"])!!}
							@else
								{!! Form::button("Guardar",["type" => "submit","class"=>"btn btn-primary"])!!}
							@endif
							<a href="javascript:ajaxLoad('{{ url('/caracteristicas') }}')" class="btn btn-default pull-right">Cancelar</a>
						</div>
					
          {!! Form::close() !!}

				</div>
      </div>
    </div>
  </div>
</div>
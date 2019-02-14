<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box_plus box_plus-default ">
        <div id="box_plus-title" class="box_plus-heading">
        	@if(isset($tblmedida) && !empty($tblmedida['id']))
        		Editar Tipo Medida de Proteccion
	        @else
        		Crear Tipo Medida de Proteccion
	        @endif
        </div>
        <div class="box_plus-body">

        	@if(isset($tblmedida) && !empty($tblmedida['id']))
          	{!! Form::model($tblmedida, [ 'route' => ['tblmedida.update', $tblmedida->id], 'method' => 'PUT', 'id'=>'form_tblmedida' ]) !!}
	        @else
	          {!! Form::open([ 'route' => 'tblmedida.store', 'id'=>'form_tblmedida' ]) !!}
          @endif

            <div class="form-group has-feedback {{ $errors->has('nombre')? 'has-error':'' }}">
              {{ Form::label('nombre', 'Tipo de medida de proteccion') }}
              {{ Form::text('nombre', null, ['class' => 'form-control input-sm'.($errors->has('nombre')?" is-invalid":""), "autofocus", 'id' => 'nombre', 'autocomplete' => 'off']) }}
              <span id="error-nombre" class="invalid-feedback"></span>
            </div>

            {{-- <div class="form-group has-feedback {{ $errors->has('sigla')? 'has-error':'' }}">
              {{ Form::label('sigla', 'Sigla') }}
              {{ Form::text('sigla', null, ['class' => 'form-control input-sm'.($errors->has('sigla')?" is-invalid":""), "autofocus", 'id' => 'sigla', 'autocomplete' => 'off']) }}
              <span id="error-sigla" class="invalid-feedback"></span>
            </div>

            <div class="form-group">
              {{ Form::label('Modulo') }}
              {{ Form::select('tblmodulo_id', $modulos, null, array('class'=>'form-control input-sm'.($errors->has('tblmodulo_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Modulo')) }}
              <span id="error-tblmodulo_id" class="invalid-feedback"></span>
            </div>

            <div class="form-group">
              {{ Form::label('Departamento') }}
              {{ Form::select('tbldepartamento_id', $departamentos, null, array('class'=>'form-control input-sm'.($errors->has('tbldepartamento_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Departamento')) }}
              <span id="error-tbldepartamento_id" class="invalid-feedback"></span>
            </div> --}}

            {{-- <div class="form-group">
              {{ Form::label('Provincia') }}
              {{ Form::select('tblprovincia_id', [], null, array('class'=>'form-control input-sm'.($errors->has('tblprovincia_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Provincia')) }}
              <span id="error-tblprovincia_id" class="invalid-feedback"></span>
            </div>

            <div class="form-group">
              {{ Form::label('Distrito') }}
              {{ Form::select('tbldistrito_id', [], null, array('class'=>'form-control input-sm'.($errors->has('tbldistrito_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Distrito')) }}
              <span id="error-tbldistrito_id" class="invalid-feedback"></span>
            </div> --}}

						<div class="form-group">
							@if( !empty($tblmedida['id']) ) 
								{!! Form::button("Actualizar",["type" => "submit","class"=>"btn btn-warning"])!!}
							@else
								{!! Form::button("Guardar",["type" => "submit","class"=>"btn btn-primary"])!!}
							@endif
							<a href="javascript:ajaxLoad('{{ url('/tblmedida') }}')" class="btn btn-default pull-right">Cancelar</a>
						</div>
					
          {!! Form::close() !!}

				</div>
      </div>
    </div>
  </div>
</div>

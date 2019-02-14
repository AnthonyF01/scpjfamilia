<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box_plus box_plus-default ">
        <div id="box_plus-title" class="box_plus-heading">
        	@if(isset($tblcomisaria) && !empty($tblcomisaria['id']))
        		Editar Institución
	        @else
        		Crear Institución
	        @endif
        </div>
        <div class="box_plus-body">

        	@if(isset($tblcomisaria) && !empty($tblcomisaria['id']))
          	{!! Form::model($tblcomisaria, [ 'route' => ['comisaria.update', $tblcomisaria->id], 'method' => 'PUT', 'id'=>'form_comisaria' ]) !!}
	        @else
	          {!! Form::open([ 'route' => 'comisaria.store', 'id'=>'form_comisaria' ]) !!}
          @endif

            <div class="form-group has-feedback {{ $errors->has('nombre')? 'has-error':'' }}">
              {{ Form::label('nombre', 'Institución') }}
              {{ Form::text('nombre', null, ['class' => 'form-control input-sm'.($errors->has('nombre')?" is-invalid":""), "autofocus", 'id' => 'nombre', 'autocomplete' => 'off']) }}
              <span id="error-nombre" class="invalid-feedback"></span>
            </div>

            <div class="form-group has-feedback {{ $errors->has('latitud')? 'has-error':'' }}">
              {{ Form::label('latitud', 'Latitud') }}
              {{ Form::text('latitud', null, ['class' => 'form-control input-sm'.($errors->has('latitud')?" is-invalid":""), "autofocus", 'id' => 'latitud', 'autocomplete' => 'off']) }}
              <span id="error-latitud" class="invalid-feedback"></span>
            </div>

            <div class="form-group has-feedback {{ $errors->has('longitud')? 'has-error':'' }}">
              {{ Form::label('longitud', 'Longitud') }}
              {{ Form::text('longitud', null, ['class' => 'form-control input-sm'.($errors->has('longitud')?" is-invalid":""), "autofocus", 'id' => 'longitud', 'autocomplete' => 'off']) }}
              <span id="error-longitud" class="invalid-feedback"></span>
            </div>

            <div class="form-group">
              {{ Form::label('Tipo Institución') }}
              {{Form::select('tipo_int',['0'=>'Comisaría','1'=>'Fiscalía'],null,array('class' => 'form-control input-sm'.($errors->has('tipo_int')?" is-invalid":""), 'placeholder'=>'Elegir tipo','name'=>'tipo_int','id'=>'tipo_int'))}}
              <span id="error-tipo_int" class="invalid-feedback"></span>
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
            </div>

						<div class="form-group">
							@if( !empty($tblcomisaria['id']) ) 
								{!! Form::button("Actualizar",["type" => "submit","class"=>"btn btn-warning"])!!}
							@else
								{!! Form::button("Guardar",["type" => "submit","class"=>"btn btn-primary"])!!}
							@endif
							<a href="javascript:ajaxLoad('{{ url('/tblcomisaria') }}')" class="btn btn-default pull-right">Cancelar</a>
						</div>
					
          {!! Form::close() !!}

				</div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('.datepicker').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy'
  }).addClass('hasDatepicker');

  $('#imagen').fileinput({
    theme: 'fa',
    language: 'es',
    showUpload: false,
    showCaption: true,
    showClose: true,
    showBrowse: true,
    showUploadedThumbs: false,
    showPreview: false,
    // uploadUrl: '#',
    allowedFileExtensions: ['jpg', 'png', 'gif']
  });

  $("#show_password").hover(
    function functionName() {
      //Change the attribute to text
      $("#password").attr("type", "text");
      $("#pwdButton")
        .removeClass("glyphicon-eye-open")
        .addClass("glyphicon-eye-close");
    },
    function() {
      //Change the attribute back to password
      $("#password").attr("type", "password");
      $("#pwdButton")
        .removeClass("glyphicon-eye-close")
        .addClass("glyphicon-eye-open");
    }
  );
</script>
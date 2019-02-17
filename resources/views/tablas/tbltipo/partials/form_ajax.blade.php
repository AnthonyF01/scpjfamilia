<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box_plus box_plus-default ">
        <div id="box_plus-title" class="box_plus-heading">
        	@if(isset($tbltipo) && !empty($tbltipo['id']))
        		Editar Tipo
	        @else
        		Crear Tipo
	        @endif
        </div>
        <div class="box_plus-body">

        	@if(isset($tbltipo) && !empty($tbltipo['id']))
          	{!! Form::model($tbltipo, [ 'route' => ['tipo.update', $tbltipo->id], 'method' => 'PUT', 'id'=>'form_tipo' ]) !!}
	        @else
	          {!! Form::open([ 'route' => 'tipo.store', 'id'=>'form_tipo' ]) !!}
          @endif

            <div class="form-group has-feedback {{ $errors->has('nombre')? 'has-error':'' }}">
              {{ Form::label('nombre', 'Tipo') }}
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
							@if( !empty($tbltipo['id']) ) 
								{!! Form::button("Actualizar",["type" => "submit","class"=>"btn btn-warning"])!!}
							@else
								{!! Form::button("Guardar",["type" => "submit","class"=>"btn btn-primary"])!!}
							@endif
							<a href="javascript:ajaxLoad('{{ url('/tbltipo') }}')" class="btn btn-default pull-right">Cancelar</a>
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
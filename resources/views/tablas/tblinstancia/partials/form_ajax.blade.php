<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box_plus box_plus-default ">
        <div id="box_plus-title" class="box_plus-heading">
          @if(isset($tblinstancia) && !empty($tblinstancia['id']))
            Editar Instancia
          @else
            Crear Instancia
          @endif
        </div>
        <div class="box_plus-body">

          @if(isset($tblinstancia) && !empty($tblinstancia['id']))
            {!! Form::model($tblinstancia, [ 'route' => ['instancia.update', $tblinstancia->id], 'method' => 'PUT', 'id'=>'form_instancia' ]) !!}
          @else
            {!! Form::open([ 'route' => 'instancia.store', 'id'=>'form_instancia' ]) !!}
          @endif

            <div class="form-group has-feedback {{ $errors->has('nombre')? 'has-error':'' }}">
              {{ Form::label('nombre', 'Instancia') }}
              {{ Form::text('nombre', null, ['class' => 'form-control input-sm'.($errors->has('nombre')?" is-invalid":""), "autofocus", 'id' => 'nombre', 'autocomplete' => 'off']) }}
              <span id="error-nombre" class="invalid-feedback"></span>
            </div>

            <div class="form-group has-feedback {{ $errors->has('sigla')? 'has-error':'' }}">
              {{ Form::label('sigla', 'Sigla') }}
              {{ Form::text('sigla', null, ['class' => 'form-control input-sm'.($errors->has('sigla')?" is-invalid":""), "autofocus", 'id' => 'sigla', 'autocomplete' => 'off']) }}
              <span id="error-sigla" class="invalid-feedback"></span>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group has-feedback {{ $errors->has('tipo')? 'has-error':'' }}">
                  {{ Form::label('tipo', 'Tipo') }}
                  {{ Form::select('tipo', ['CI'=>'Juzgado Civil','FA'=>'Juzgado de Familia','IP'=>'Juzgado de Investigación Preparatoria','JM'=>'Juzgado Mixto','LA'=>'Juzgado de Trabajo','PL'=>'Juzgado de Paz Letrado','PU'=>'Juzgado Unipersonal','SC'=>'Sala Civil','SL'=>'Sala Laboral ','SP'=>'Sala Penal','SS'=>'Sala Superior','SSP'=>'Sala Suprema Penal','MP'=>'Ministerio Público'], null, array('class'=>'form-control input-sm'.($errors->has('tipo')?" is-invalid":""), 'placeholder'=>'Seleccione un Tipo')) }}
                  <span id="error-tipo" class="invalid-feedback"></span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group has-feedback {{ $errors->has('estadistica')? 'has-error':'' }}">
                  {{ Form::label('estadistica', 'Visualizar en Gráfica Estadística ?') }}
                  {{ Form::select('estadistica', [0=>'NO',1=>'SI'], null, array('class'=>'form-control input-sm'.($errors->has('estadistica')?" is-invalid":""))) }}
                  <span id="error-estadistica" class="invalid-feedback"></span>
                </div>

              </div>
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
              @if( !empty($tblinstancia['id']) )
                {!! Form::button("Actualizar",["type" => "submit","class"=>"btn btn-warning"])!!}
              @else
                {!! Form::button("Guardar",["type" => "submit","class"=>"btn btn-primary"])!!}
              @endif
              <a href="javascript:ajaxLoad('{{ url('/tblinstancia') }}')" class="btn btn-default pull-right">Cancelar</a>
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

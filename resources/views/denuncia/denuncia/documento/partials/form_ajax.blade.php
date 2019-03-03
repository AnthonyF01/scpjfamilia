<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box_plus box_plus-default ">
        <div id="box_plus-title" class="box_plus-heading">
          @if(isset($documento) && !empty($documento['id']))
            Editar Documento Digitalizado
          @else
            Crear Documento Digitalizado
          @endif
        </div>
        <div class="box_plus-body">
          @if(isset($documento) && !empty($documento['id']))
            {!! Form::model($documento, [ 'route' => ['ddocumento.update', $documento->id], 'method' => 'PUT', 'id'=>'form_doc' ]) !!}
          @else
            {!! Form::open([ 'route' => 'ddocumento.store', 'id'=>'form_doc' ]) !!}
          @endif
            <div class="form-group has-feedback {{ $errors->has('numero')? 'has-error':'' }}">
              <div class="row">
                {{ Form::label('numero', 'Nro. Documento:', ['class' => 'col-sm-3 control-label', 'style' => 'line-height:30px']) }}
                <div class="col-sm-8">
                  {{ Form::text('numero', null, ['class' => 'form-control input-sm'.($errors->has('numero')?" is-invalid":""), "autofocus", 'name' => 'numero', 'id' => 'numero', 'autocomplete' => 'off']) }}
                  <span id="error-numero" class="invalid-feedback"></span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                {{ Form::label('fecha', 'Fecha del Documento:', ['class' => 'col-sm-3 control-label', 'style' => 'line-height:30px']) }}
                <div class="col-sm-8">
                  <div class="input-group date">
                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                    {{ Form::text('fecha', null, ['class' => 'form-control input-sm datepicker'.($errors->has('fecha')?" is-invalid":""), "autofocus", 'name' => 'fecha', 'id' => 'fecha', 'autocomplete' => 'off']) }}
                  </div>
                  <span id="error-fecha" class="invalid-feedback"></span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                {{ Form::label('tipo', 'Tipo Documento:', ['class' => 'col-sm-3 control-label', 'style' => 'line-height:30px']) }}
                <div class="col-sm-8">
                  {{Form::select('tipo',['INFORME'=>'Informe','OFICIO'=>'Oficio','OFICIO CIRCULAR'=>'Oficio Circular','MEMORANDUM'=>'Memorándum','RESOLUCION'=>'Resolución'],null,array('class' => 'form-control input-sm'.($errors->has('tipo')?" is-invalid":""), 'placeholder'=>'Elegir tipo','name'=>'tipo','id'=>'tipo'))}}
                  <span id="error-tipo" class="invalid-feedback"></span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                {{ Form::label('file', 'Archivo:', ['class' => 'col-sm-3 control-label', 'style' => 'line-height:30px']) }}
                <div class="col-sm-8">
                  <div class="input-group">
                    <div class="input-group-btn">
                      @if (isset($documento->file) && !empty($documento->file) && isset(explode("documento/",$documento->file)[1]))
                        <a style="margin-right: 0px;" title="Descargar Documento Digitalizado" href="{{ $documento->file }}" target="_blank" class="btn btn-outline-primary"><i class="fa fa-download"></i></a>
                      @else
                        <a disabled style="margin-right: 0px;" title="Documento Digitalizado" href="javascript:void(0)" target="_blank" class="btn btn-outline-primary"><i class="fa fa-download"></i></a>
                      @endif
                    </div>
                    {{-- <input type="text" class="form-control"> --}}
                    <div class="file-loading">
                      <input id="file" name="file" type="file">
                    </div>
                  </div>
                  @if (isset($documento->file) && !empty($documento->file) && isset(explode("documento/",$documento->file)[1]))
                    <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> {{ explode("documento/",$documento->file)[1] }}</span>
                  @else
                    <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> No disponible</span>
                  @endif
                  <br>
                  <span id="error-file" class="invalid-feedback"></span>
                </div>
              </div>
            </div>

            <div class="form-group">
              @if( !empty($documento['id']) ) 
                {!! Form::button("Actualizar",["type" => "submit","class"=>"btn btn-warning"])!!}
              @else
                {!! Form::button("Guardar",["type" => "submit","class"=>"btn btn-primary"])!!}
              @endif
              <a href="javascript:ajaxLoad('{{ url('/documento') }}')" class="btn btn-default pull-right">Cancelar</a>
            </div>

          {!! Form::close() !!}    
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('#file').fileinput({
    theme: 'fa',
    language: 'es',
    showUpload: false,
    showCaption: true,
    showClose: true,
    showBrowse: true,
    showUploadedThumbs: false,
    showPreview: false,
    // uploadUrl: '#',
    allowedFileExtensions: ['pdf']
  });
  $('.datepicker').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy',
    todayHighlight: false,
  });
</script>
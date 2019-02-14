@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Denuncias
@endsection

@section('contentheader_title')
  Denuncias
@endsection

@section('contentheader_subtitle')
    Editar Denuncias
@endsection

@section('denuncia')
  active
@endsection


@section('css')
  <style>
    .menu_tab {
      padding: 15px 20px;
      /*font-size: 14px;*/
      font-weight: bold;
    }
    .menu_tab > img, .menu_tab > i {
      font-size: 25px;
    }
    .menu_tab > span {
      float: right;
      line-height: 25px;
      margin-left: 10px;
    }
    label {
      font-weight: bold;
      text-align: right;
    }
    li.select2-selection__choice{
      color: #fff;
      padding-top: 2px;
      padding-bottom: 2px;
    }
    li.select2-selection__choice span.select2-selection__choice__remove{
      color: #fff;
    }
    table.table-den>thead>tr{
      background: #666;
      color: #fff;
    }
    table.table-den>tbody>tr>td.noitems{
      text-align: center;
      background: #f5f5f5;
    }
    table.table-den>tbody>tr>td>span{
      line-height: 22px;
    }
  </style>
@endsection

@section('main-content')

<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">
      <div class="box_plus box_plus-default ">
        <div id="box_plus-title" class="box_plus-heading">
          <i class="fa fa-list-ul"></i>
          @if(isset($denuncia) && !empty($denuncia['id']))
            Ejecucion Medida de Proteccion
          @else
            Agregar Denuncia
          @endif
          <a href="{{ url('denuncia') }}" class="btn btn-outline-primary btn-xs pull-right" type="submit"><i class="fa fa-arrow-circle-left"></i> Registros</a>
        </div>
        <div class="box_plus-body">
          <div class="row">
            <div class="col-md-9">
              {!! Form::model($denuncia, [ 'route' => ['denuncia.ejecucionUpdate', $denuncia->id], 'method' => 'PUT', 'id'=>'form_agresor' ]) !!}
                <input type="hidden" name="action" value="ejecucion">
                <div class="form-group has-feedback {{ $errors->has('oficioejecucion')? 'has-error':'' }}">
                  <div class="row">
                    {{ Form::label('oficioejecucion', 'Nro. Informe:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                    <div class="col-sm-8">
                      {{ Form::text('oficioejecucion', null, ['class' => 'form-control input-sm'.($errors->has('oficioejecucion')?" is-invalid":""), "autofocus", 'id' => 'oficioejecucion', 'autocomplete' => 'off']) }}
                      <span id="error-oficioejecucion" class="invalid-feedback"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    {{ Form::label('foficioejecucion', 'Fecha Informe:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                    <div class="col-sm-8">
                      <div class="input-group date">
                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                        {{ Form::text('foficioejecucion', null, ['class' => 'form-control input-sm datepicker'.($errors->has('foficioejecucion')?" is-invalid":""), "autofocus", 'id' => 'foficioejecucion', 'autocomplete' => 'off']) }}
                      </div>
                      <span id="error-foficioejecucion" class="invalid-feedback"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    {{ Form::label('oficioejecucion_file', 'Informe:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                    <div class="col-sm-8">
                      <div class="input-group">
                        <div class="input-group-btn">
                          @if (isset($denuncia->oficioejecucion_file) && !empty($denuncia->oficioejecucion_file) && isset(explode("denuncia/",$denuncia->oficioejecucion_file)[1]))
                            <a style="margin-right: 0px;" title="Descargar Informe de ejecucion" href="{{ $denuncia->oficioejecucion_file }}" target="_blank" class="btn btn-outline-primary"><i class="fa fa-download"></i></a>
                          @else
                            <a disabled style="margin-right: 0px;" title="Informe de ejecucion" href="javascript:void(0)" target="_blank" class="btn btn-outline-primary"><i class="fa fa-download"></i></a>
                          @endif
                        </div>
                        {{-- <input type="text" class="form-control"> --}}
                        <div class="file-loading">
                          <input id="oficioejecucion_file" name="oficioejecucion_file" type="file">
                        </div>
                      </div>
                      @if (isset($denuncia->oficioejecucion_file) && !empty($denuncia->oficioejecucion_file) && isset(explode("denuncia/",$denuncia->oficioejecucion_file)[1]))
                        <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> {{ explode("denuncia/",$denuncia->oficioejecucion_file)[1] }}</span>
                      @else
                        <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> No disponible</span>
                      @endif
                      <span id="error-oficioejecucion_file" class="invalid-feedback"></span>
                    </div>
                  </div>
                </div>
                <h4>Datos de las partes</h4>
                <hr>
                <h5>Victima(as)</h5>
                  @if (isset($denuncia->victimas) && !empty($denuncia->victimas))
                    <?php $counter=1; ?>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Documento</th>
                          <th>Edad</th>
                          <th>Hijos</th>
                          <th>Tipo</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($denuncia->victimas as $victima)
                          <tr>
                            <td><?php echo $counter++; ?></td>
                            <td>{{ $victima->nombre }}</td>
                            <td>{{ $victima->apellido }}</td>
                            <td>{{ $victima->nro_doc }}</td>
                            <td>{{ $victima->edad }}</td>
                            <td>{{ $victima->hijos }}</td>
                            <td>{{ $victima->tbltipo->nombre }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  @else
                    No hay victimas disponibles
                  @endif
                <hr>
                <h5>Agresor(es)</h5>
                  @if (isset($denuncia->agresores) && !empty($denuncia->agresores))
                    <?php $counter=1; ?>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Documento</th>
                          <th>Sexo</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($denuncia->agresores as $agresor)
                          <tr>
                            <td><?php echo $counter++; ?></td>
                            <td>{{ $agresor->nombre }}</td>
                            <td>{{ $agresor->apellido }}</td>
                            <td>{{ $agresor->nro_doc }}</td>
                            <td>{{ $agresor->sexo }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  @else
                    No hay victimas disponibles
                  @endif
                <hr>
                <h4>Datos de la denuncia</h4>
                <hr>
                  <div class="form-group">
                    <div class="row">
                      {{ Form::label('oficio', 'Oficio:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                      <div class="col-sm-8">
                        <label style="text-align: right;width: 100%;" for="oficio" class="input-sm" autofocus="" id="oficio" autocomplete="off">{{$denuncia->oficio}}</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      {{ Form::label('tbldenuncia_id', 'Grado de valoracion:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                      <div class="col-sm-8">
                        <label style="text-align: right;width: 100%;" for="tbldenuncia_id" class="input-sm" autofocus="" id="tbldenuncia_id" autocomplete="off">{{$denuncia->tbldenuncia->nombre}}</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      {{ Form::label('fdenuncia', 'Fecha de Denuncia:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                      <div class="col-sm-8">
                        <label style="text-align: right;width: 100%;" for="fdenuncia" class="input-sm" autofocus="" id="fdenuncia" autocomplete="off">{{$denuncia->fdenuncia}}</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      {{ Form::label('fformalizacion', 'Fecha de Formalizacion:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                      <div class="col-sm-8">
                        <label style="text-align: right;width: 100%;" for="fformalizacion" class="input-sm" autofocus="" id="fformalizacion" autocomplete="off">{{$denuncia->fformalizacion}}</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      {{ Form::label('institucion', 'Institucion:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                      <div class="col-sm-8">
                        <label style="text-align: right;width: 100%;" for="fformalizacion" class="input-sm" autofocus="" id="fformalizacion" autocomplete="off">{{(isset($denuncia->tblcomisaria->nombre) && !empty($denuncia->tblcomisaria->nombre)) ? $denuncia->tblcomisaria->nombre : $denuncia->tblmodulo->nombre}}</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      {{ Form::label('registro_file', 'Archivo de Registro:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                      <div class="col-sm-8">
                        <label style="text-align: right;width: 100%;" for="fformalizacion" class="input-sm" autofocus="" id="fformalizacion" autocomplete="off">{{(isset($denuncia->registro_file) && !empty($denuncia->registro_file)) ? $denuncia->registro_file : '-'}}</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      {{ Form::label('observacion', 'Fecha de Denuncia:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                      <div class="col-sm-8">
                        <label style="text-align: right;width: 100%;" for="observacion" class="input-sm" autofocus="" id="fformalizacion" autocomplete="off">{{(isset($denuncia->observacion) && !empty($denuncia->observacion))?$denuncia->observacion:'-'}}</label>
                      </div>
                    </div>
                  </div>
                <h4>Datos del expediente</h4>
                <hr>
                  <div class="form-group">
                    <div class="row">
                      {{ Form::label('tblinstancia_id', 'Juzgado:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                      <div class="col-sm-8">
                        <label style="text-align: right;width: 100%;" for="tblinstancia_id" class="input-sm" autocomplete="off">{{(isset($denuncia->tblinstancia->nombre) && !empty($denuncia->tblinstancia->nombre)) ? $denuncia->tblinstancia->nombre : '-'}}</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      {{ Form::label('expediente', 'Expediente:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                      <div class="col-sm-8">
                        <label style="text-align: right;width: 100%;" for="expediente" class="input-sm" autocomplete="off">{{$denuncia->expediente}}</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      {{ Form::label('calificacion', 'Calificacion:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                      <div class="col-sm-8">
                        <label style="text-align: right;width: 100%;" for="calificacion" class="input-sm" autocomplete="off">{{(isset($denuncia->calificacion) && !empty($denuncia->calificacion))?$denuncia->calificacion:'-'}}</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      {{ Form::label('faudiencia', 'Fecha de Audiencia:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                      <div class="col-sm-8">
                        <label style="text-align: right;width: 100%;" for="faudiencia" class="input-sm" autocomplete="off">{{(isset($denuncia->faudiencia) && !empty($denuncia->faudiencia))?$denuncia->faudiencia." ".$denuncia->hora:'-'}}</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      {{ Form::label('tblmedida_id', 'Tipo de medida:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                      <div class="col-sm-8">
                        <label style="text-align: right;width: 100%;" for="tblmedida_id" class="input-sm" autofocus="" id="tblmedida_id" autocomplete="off">{{$denuncia->tblmedida->nombre}}</label>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="row">
                    {{ Form::label('medida_file', 'Tipo de medida:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                    <div class="col-sm-8">
                      <label style="text-align: right;width: 100%;" for="medida_file" class="input-sm" autofocus="" id="medida_file" autocomplete="off">{{(isset($denuncia->medida_file) && !empty($denuncia->medida_file) && isset(explode("denuncia/",$denuncia->medida_file)[1]))?explode("denuncia/",$denuncia->medida_file)[1]:'-'}}</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    {{ Form::label('fmedida', 'Fecha de medida de proteccion:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                    <div class="col-sm-8">
                      <label style="text-align: right;width: 100%;" for="fmedida" class="input-sm" autocomplete="off">{{(isset($denuncia->fmedida) && !empty($denuncia->fmedida))?$denuncia->fmedida:'-'}}</label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-sm-offset-4">
                  <button class="btn btn-outline-primary btn-sm" type="submit"><i class="fa fa-save"></i> Actualizar</button>
                  <a href="{{ url('denuncia') }}" class="btn btn-default btn-sm pull-right" type="button"><i class="fa fa-times"></i> Cancelar</a>
                </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

@section('js')
  <script src="{{ asset('assests/js/denuncia/denuncia/denuncia.js') }}"></script>
  <script type="text/javascript">
    $('#oficioejecucion_file').fileinput({
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
  </script>
@endsection
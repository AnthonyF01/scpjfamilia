@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Justicia Itinerante
@endsection

@section('contentheader_title')
  Justicia Itinerante
@endsection

@section('jitinerante')
  active
@endsection

@section('css')
  <style>
    .loading {
      background: lightgrey;
      padding: 20px;
      position: fixed;
      border-radius: 5px;
      left: 59%;
      top: 50%;
      text-align: center;
      margin: -40px 0 0 -50px;
      z-index: 2000;
      display: none;
    }
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
    hr {
      margin-top: 10px;
      margin-bottom: 20px;
    }

    /* table datatble */
    label.doc, span.span_det{
      font-size: 13px;
      line-height: 30px;
      margin-bottom: 0px;
    }

    table.dataTable > tbody > tr > td {
      padding-left: 10px;
      padding-right: 10px;
    }

    table.dataTable > tbody > tr > td:first-child {
      padding: 5px;
    }

  </style>
  
  <style type="text/css">
    /* SWITCH STYLES */
    /* SOURCE: https://proto.io/freebies/onoff/ */
    .onoffswitch {
        position: relative; width: 70px;
        -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
    }
    .onoffswitch-checkbox {
        display: none;
    }
    .onoffswitch-label {
        display: block; overflow: hidden; cursor: pointer;
        border: 2px solid #FFFFFF; border-radius: 20px;
    }
    .onoffswitch-inner {
        display: block; width: 200%; margin-left: -100%;
        transition: margin 0.3s ease-in 0s;
    }
    .onoffswitch-inner:before, .onoffswitch-inner:after {
        display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
        font-size: 12px; color: black; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
        box-sizing: border-box;
    }
    .onoffswitch-inner:before {
        content: "SI";
        padding-left: 15px;
        background-color: #167ebb; color: #FFFFFF;
        text-align: left;
    }
    .onoffswitch-inner:after {
        content: "NO";
        padding-right: 15px;
        background-color: #e84655; color: #FFFFFF;
        text-align: right;
    }
    .onoffswitch-switch {
        display: block; width: 12px; margin: 5px;
        background: #FFFFFF;
        position: absolute; top: 0; bottom: 0;
        right: 40px;
        border: 2px solid #FFFFFF; border-radius: 20px;
        transition: all 0.3s ease-in 0s; 
    }
    .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
        margin-left: 0;
    }
    .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
        right: 8px; 
    }
    
    /* adicional */
    .onoffswitch-content {
      float: left;
    }
    .onoffswitch-lbln {
      line-height: 34px;
      margin-left: 10px;
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
            Editar Denuncia - <i>{{ (isset($denuncia->codigo) && !empty($denuncia->codigo)) ? $denuncia->codigo : 'Sin código único' }}</i>
          @else
            Agregar Denuncia
          @endif

          <a href="{{ url('denuncia/jitinerante/index') }}" class="btn btn-outline-primary btn-xs pull-right" type="submit"><i class="fa fa-arrow-circle-left"></i> Registros</a>
        </div>
        <div class="box_plus-body">
          
          <div class="alert alert-danger" style="{{ ( isset($denuncia->victimas) && !empty($denuncia->victimas) && isset($denuncia->agresores) && !empty($denuncia->agresores) ) ? ( ((count($denuncia->victimas) > 0) && (count($denuncia->agresores) > 0)) ? 'display: none' : ( ((count($denuncia->victimas) <= 0) && (count($denuncia->agresores) <= 0)) ? 'display: block' : ((count($denuncia->victimas) <= 0) ? 'display: block' : ( (count($denuncia->agresores) <= 0) ? 'display: block' : 'display: none' ) ) ) ) : 'display: none' }}">
            @if ( isset($denuncia->victimas) && !empty($denuncia->victimas) && isset($denuncia->agresores) && !empty($denuncia->agresores) )
              @if ((count($denuncia->victimas) <= 0) && (count($denuncia->agresores) <= 0))
                <ul><li>Las Victimas y los Agresores deben ser registrados en la denuncia</li></ul>
              @else 
                @if (count($denuncia->victimas) <= 0)
                  <ul><li>Las Victimas deben ser registradas en la denuncia</li></ul>
                @else 
                  @if (count($denuncia->agresores) <= 0)
                    <ul><li>Los Agresores deben ser registrados en la denuncia</li></ul>
                  @endif
                @endif
              @endif
            @endif
          </div>

          @if(isset($denuncia) && !empty($denuncia['id']))
            {!! Form::model($denuncia, [ 'route' => ['denuncia.jiupdate', $denuncia->id], 'method' => 'PUT', 'id'=>'form_denuncia_itinerante' ]) !!}
          @else
            {!! Form::open([ 'route' => 'denuncia.jistore', 'id'=>'form_denuncia_itinerante' ]) !!}
          @endif
  
          <div class="row">
            <div class="col-md-12">
              {{ Form::label('exp', 'Información de la Denuncia', ['class' => 'lbldenh control-label']) }}
            </div>
            <div class="col-md-4">
              <div class="form-group">
                {{ Form::label('tblcomisaria_id', 'Comisaría:', ['class' => 'lbldens control-label']) }}
                {{ Form::select('tblcomisaria_id', $comisarias, null, array('class'=>'form-control input-sm'.($errors->has('tblcomisaria_id')?" is-invalid":""), 'placeholder'=>'Seleccione una Comisaría', 'style'=>'width: 100%')) }}
                <span id="error-tblcomisaria_id" class="invalid-feedback"></span>
              </div>
              {{-- <div class="form-group has-feedback {{ $errors->has('oficio')? 'has-error':'' }}">
                {{ Form::label('oficio', 'Oficio:', ['class' => 'lbldens control-label']) }}
                {{ Form::text('oficio', null, ['class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""), "autofocus", 'id' => 'oficio', 'autocomplete' => 'off']) }}
                <span id="error-oficio" class="invalid-feedback"></span>
              </div> --}}
            </div>
            <div class="col-md-4">
              <div class="form-group">
                {{ Form::label('fdenuncia', 'Fecha de Denuncia:', ['class' => 'lbldens control-label']) }}
                <div class="input-group date">
                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                  {{ Form::text('fdenuncia', null, ['class' => 'form-control input-sm datepicker'.($errors->has('fdenuncia')?" is-invalid":""), "autofocus", 'id' => 'fdenuncia', 'autocomplete' => 'off', 'data-date-end-date'=>"0d"]) }}
                </div>
                <span id="error-fdenuncia" class="invalid-feedback"></span>
              </div>
              {{-- <div class="form-group">
                {{ Form::label('registro_file', 'Archivo de Registro Policial:', ['class' => 'lbldens control-label']) }}
                <div class="file-loading">
                  <input id="registro_file" name="registro_file" type="file">
                </div>
                @if (isset($denuncia->registro_file) && !empty($denuncia->registro_file))
                  <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> <a href="{{ url($denuncia->registro_file) }}" target="_blank">{{ explode("denuncia/",$denuncia->registro_file)[1] }}</a></span><br>
                @endif
                <span id="error-registro_file" class="invalid-feedback"></span>
              </div> --}}
            </div>
            <div class="col-md-4">
              <div class="form-group">
                {{ Form::label('itinerancia', 'Itinerancia:', ['class' => 'lbldens control-label']) }}
                <div class="row">
                  <div class="col-md-12">
                    <div class="onoffswitch-content">
                      <div class="onoffswitch">
                        @if(isset($denuncia) && !empty($denuncia['id']))
                          {!! Form::checkbox('itinerancia', $denuncia->itinerancia, (isset($denuncia) && !empty($denuncia['id']) && $denuncia->itinerancia == '1') ? true : false, ['class' => 'onoffswitch-checkbox', 'id' => 'itinerancia']) !!}
                        @else
                          {!! Form::checkbox('itinerancia', null, null, ['class' => 'onoffswitch-checkbox', 'id' => 'itinerancia']) !!}
                        @endif
                        <label class="onoffswitch-label" for="itinerancia">
                          <span class="onoffswitch-inner"></span>
                          <span class="onoffswitch-switch"></span>
                        </label>
                      </div>
                    </div>
                    <span class="onoffswitch-lbln">Itinerancia en comisaría</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <hr>

          <div class="row">
            <div class="col-md-12">
              {{ Form::label('exp', 'Característica de la Violencia', ['class' => 'lbldenh control-label']) }}
            </div>
            <div class="col-md-6">
              <div class="form-group">
                {{ Form::label('tblviolencia_id', 'Tipo de Violencia:', ['class' => 'lbldens control-label']) }}
                @if(isset($denuncia) && !empty($denuncia['id']))
                  {{Form::select('tblviolencia_id',$violencias,$denuncia->tblviolencias()->pluck('tblviolencia.id','tblviolencia.nombre')->toArray(),array('class' => 'form-control input-sm'.($errors->has('tblviolencia_id')?" is-invalid":""), 'multiple'=>'multiple','name'=>'tblviolencia_id[]','id'=>'tblviolencia_id'))}}
                @else
                  {{Form::select('tblviolencia_id',$violencias,null,array('class' => 'form-control input-sm'.($errors->has('tblviolencia_id')?" is-invalid":""), 'multiple'=>'multiple','name'=>'tblviolencia_id[]','id'=>'tblviolencia_id'))}}
                @endif
                <span id="error-tblviolencia_id" class="invalid-feedback"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                {{ Form::label('tbldenuncia_id', 'Grado de violencia:', ['class' => 'lbldens control-label']) }}
                {{Form::select('tbldenuncia_id',$tdenuncias,null,array('class' => 'form-control input-sm'.($errors->has('tbldenuncia_id')?" is-invalid":""),'name'=>'tbldenuncia_id','id'=>'tbldenuncia_id'))}}
                <span id="error-tbldenuncia_id" class="invalid-feedback"></span>
              </div>
            </div>
          </div>

          <hr>

          <div class="row">
            <div class="col-md-12">
              {{ Form::label('exp', 'Información de la Audiencia', ['class' => 'lbldenh control-label']) }}
            </div>
            <div class="col-md-6">
              <div class="form-group">
                {{ Form::label('faudiencia', 'Fecha de Audiencia:', ['class' => 'lbldens control-label']) }}
                <div class="input-group date">
                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                  {{ Form::text('faudiencia', null, ['class' => 'form-control input-sm datepicker'.($errors->has('faudiencia')?" is-invalid":""), "autofocus", 'id' => 'faudiencia', 'autocomplete' => 'off']) }}
                </div>
                <span id="error-faudiencia" class="invalid-feedback"></span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                {{ Form::label('hora', 'Hora Inicio de Audiencia:', ['class' => 'lbldens control-label']) }}
                <div class="input-group">
                  {{ Form::text('hora', null, ['class' => 'form-control input-sm timepicker'.($errors->has('hora')?" is-invalid":""), "autofocus", 'id' => 'hora', 'autocomplete' => 'off']) }}
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                </div>
                <span id="error-hora" class="invalid-feedback"></span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                {{ Form::label('horaf', 'Hora Fin de Audiencia:', ['class' => 'lbldens control-label']) }}
                <div class="input-group">
                  {{ Form::text('horaf', null, ['class' => 'form-control input-sm timepicker'.($errors->has('horaf')?" is-invalid":""), "autofocus", 'id' => 'horaf', 'autocomplete' => 'off']) }}
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                </div>
                <span id="error-horaf" class="invalid-feedback"></span>
              </div>
            </div>
          </div>

          <hr>

          <div class="row">
            <div class="col-md-12">
              {{ Form::label('exp', 'Medida de Protección', ['class' => 'lbldenh control-label']) }}              
            </div>
            <div class="col-md-6">
              <div class="form-group">
                {{ Form::label('tblmedida_id', 'Tipo de Medida de Protección:', ['class' => 'lbldens control-label']) }}
                @if(isset($denuncia) && !empty($denuncia['id']))
                  {{Form::select('tblmedida_id',$medidas,$denuncia->tblmedidas()->pluck('tblmedida.id','tblmedida.nombre')->toArray(),array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""), 'multiple'=>'multiple','name'=>'tblmedida_id[]','id'=>'tblmedida_id'))}}
                @else
                  {{Form::select('tblmedida_id',$medidas,null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""), 'multiple'=>'multiple','name'=>'tblmedida_id[]','id'=>'tblmedida_id'))}}
                @endif
                <span id="error-tblmedida_id" class="invalid-feedback"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                {{ Form::label('fmedida', 'Fecha de Medida de Protección:', ['class' => 'lbldens control-label']) }}
                <div class="input-group date">
                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                  {{ Form::text('fmedida', null, ['class' => 'form-control input-sm datepicker'.($errors->has('fmedida')?" is-invalid":""), "autofocus", 'id' => 'fmedida', 'autocomplete' => 'off']) }}
                </div>
                <span id="error-fmedida" class="invalid-feedback"></span>
              </div>
              {{-- <div class="form-group">
                {{ Form::label('medida_file', 'Medida de Protección:', ['class' => 'lbldens control-label']) }}
                <div class="input-group">
                  <div class="input-group-btn">
                    @if (isset($denuncia->medida_file) && !empty($denuncia->medida_file) && isset(explode("denuncia/",$denuncia->medida_file)[1]))
                      <a style="margin-right: 0px;" title="Descargar Medida de Protección" href="{{ $denuncia->medida_file }}" target="_blank" class="btn btn-outline-primary"><i class="fa fa-download"></i></a>
                    @else
                      <a disabled style="margin-right: 0px;" title="Medida de Protección disponible" href="javascript:void(0)" target="_blank" class="btn btn-outline-primary"><i class="fa fa-download"></i></a>
                    @endif
                  </div>
                  <div class="file-loading">
                    <input id="medida_file" name="medida_file" type="file">
                  </div>
                </div>
                @if (isset($denuncia->medida_file) && !empty($denuncia->medida_file) && isset(explode("denuncia/",$denuncia->medida_file)[1]))
                  <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> {{ explode("denuncia/",$denuncia->medida_file)[1] }}</span>
                @else
                  <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> No disponible</span>
                @endif
                <span id="error-medida_file" class="invalid-feedback"></span>
              </div> --}}
            </div>
          </div>

          <hr>

          <div class="row">
            <div class="col-md-12">
              {{ Form::label('exp', 'Aplicación Botón de Pánico', ['class' => 'lbldenh control-label']) }}  
            </div>
            <div class="col-md-6">
              <div class="form-group">
                {{ Form::label('device', 'Aplicación Móvil:', ['class' => 'lbldens control-label']) }}
                <div class="row">
                  <div class="col-md-12">
                    <div class="onoffswitch-content">
                      <div class="onoffswitch">
                        @if(isset($denuncia) && !empty($denuncia['id']))
                          {!! Form::checkbox('device', $denuncia->device, (isset($denuncia) && !empty($denuncia['id']) && $denuncia->device == '1') ? true : false, ['class' => 'onoffswitch-checkbox', 'id' => 'device']) !!}
                        @else
                          {!! Form::checkbox('device', null, null, ['class' => 'onoffswitch-checkbox', 'id' => 'device']) !!}
                        @endif
                        <label class="onoffswitch-label" for="device">
                          <span class="onoffswitch-inner"></span>
                          <span class="onoffswitch-switch"></span>
                        </label>
                      </div>
                    </div>
                    <span class="onoffswitch-lbln">Instalación de Botón de Pánico</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                {{ Form::label('pabogado', 'Participacón del Abogado:', ['class' => 'lbldens control-label']) }}
                <ul class="list-unstyled">
                  @foreach($pabogados as $pabogado)
                    <li>
                      @if(isset($denuncia) && !empty($denuncia['id']))
                        <label>
                        {{ Form::radio('pabogado', $pabogado['sigla'], ( ($pabogado['sigla'] == $denuncia->pabogado) ? true : false ) ) }}
                        {{ $pabogado['nombre'] }}
                        </label>
                      @else
                        <label>
                        {{ Form::radio('pabogado', $pabogado['sigla'], false) }}
                        {{ $pabogado['nombre'] }}
                        </label>
                      @endif
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                {{ Form::label('pdenuncia', 'Presentación de la denuncia:', ['class' => 'lbldens control-label']) }}
                <ul class="list-unstyled">
                  @foreach($pdenuncias as $pdenuncia)
                    <li>
                      @if(isset($denuncia) && !empty($denuncia['id']))
                        <label>
                        {{ Form::radio('pdenuncia', $pdenuncia['sigla'], ( ($pdenuncia['sigla'] == $denuncia->pdenuncia) ? true : false )) }}
                        {{ $pdenuncia['nombre'] }}
                        </label>
                      @else
                        <label>
                        {{ Form::radio('pdenuncia', $pdenuncia['sigla'], false) }}
                        {{ $pdenuncia['nombre'] }}
                        </label>
                      @endif
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>

          <hr>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group has-feedback {{ $errors->has('observacion')? 'has-error':'' }}">
                {{ Form::label('observacion', 'Observaciones:', ['class' => 'lbldens control-label']) }}
                <div class="input-group">
                  {{ Form::textarea('observacion', null, ['class' => 'form-control input-sm'.($errors->has('observacion')?" is-invalid":""), "autofocus", 'id' => 'observacion', 'autocomplete' => 'off', 'rows' => 4]) }}
                  <div class="input-group-addon"><i class="fa fa-edit"></i></div>
                </div>
                <span id="error-observacion" class="invalid-feedback"></span>
              </div>
            </div>
          </div>

          <hr>

          <div class="box_plus box_plus-default ">
            <div id="box_plus-title" class="box_plus-heading">
              Victimas 
            </div> 
            <div class="box_plus-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="row">
                      {{ Form::label('victima_id', 'Buscar Victima:', ['class' => 'col-sm-2 control-label', 'style' => 'line-height:30px; text-align:left; width: 125px;']) }}
                      <div class="col-sm-6">
                        <div class="input-group width100">
                          <div class="input-group-addon pointer" onclick="refresh('victima_id','form_victima_modal')" style="cursor: pointer;">
                            <a href="javascript:void(0);"><span class="fa fa-refresh"></span></a>
                          </div>
                          <div class="input-group-addon pointer" onclick="openModal('form_victima_modal','myModal1','victima_id','getVictima')" style="cursor: pointer;">
                            <a href="javascript:void(0);"><span class="fa fa-plus"></span></a>
                          </div>
                          {{ Form::select('victima_id', [], null, array('class'=>'form-control input-sm'.($errors->has('victima_id')?" is-invalid":""), 'style'=>'width: 100%')) }}
                        </div>
                        <span id="error-victima_id" class="invalid-feedback"></span>
                      </div>
                      <div class="col-sm-4">
                        <a class="btn btn-outline-success btn-sm" onclick="agregarVictima()"><i class="fa fa-plus"></i> Agregar víctima a la denuncia</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <table class="table table-striped table-condensed table-hover" id="victimas">
                    <thead>
                      <tr style="color:#fff;">
                        <th style="width: 25px; padding: 10px; font-size: 12px; text-align: center; background: rgba(23, 146, 181, 0.9); border-bottom: 2px solid #ddd;">#</th>
                        <th style="width: 200px; padding: 10px; font-size: 12px; background: rgba(23, 146, 181, 0.9); border-bottom: 2px solid #ddd;">DOCUMENTO</th>
                        <th style="padding: 10px; font-size: 12px; background: rgba(23, 146, 181, 0.9); border-bottom: 2px solid #ddd;">APELLIDOS Y NOMBRE</th>
                        <th style="padding: 10px; font-size: 12px; background: rgba(23, 146, 181, 0.9); border-bottom: 2px solid #ddd;">EDAD</th>
                        <th style="padding: 10px; font-size: 12px; background: rgba(23, 146, 181, 0.9); border-bottom: 2px solid #ddd;">HIJOS</th>
                        <th style="padding: 10px; font-size: 12px; background: rgba(23, 146, 181, 0.9); border-bottom: 2px solid #ddd;">DEPARTAMENTO</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <hr>
          
          <div class="box_plus box_plus-default ">
            <div id="box_plus-title" class="box_plus-heading">
              Agresores 
            </div> 
            <div class="box_plus-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="row">
                      {{ Form::label('agresor_id', 'Buscar agresor:', ['class' => 'col-sm-2 control-label', 'style' => 'line-height:30px; text-align:left; width: 125px;']) }}
                      <div class="col-sm-6">
                        <div class="input-group width100">
                          <div class="input-group-addon pointer" onclick="refresh('agresor_id','form_agresor_modal')" style="cursor: pointer;">
                            <a href="javascript:void(0);"><span class="fa fa-refresh"></span></a>
                          </div>
                          <div class="input-group-addon pointer" onclick="openModal('form_agresor_modal','myModal2','agresor_id','getAgresor')" style="cursor: pointer;">
                              <a href="javascript:void(0);"><span class="fa fa-plus"></span></a>
                          </div>
                          {{ Form::select('agresor_id', [], null, array('class'=>'form-control input-sm'.($errors->has('agresor_id')?" is-invalid":""), 'style'=>'width: 100%')) }}
                        </div>
                        <span id="error-agresor_id" class="invalid-feedback"></span>
                      </div>
                      <div class="col-sm-4">
                        <a class="btn btn-outline-success btn-sm" onclick="agregarAgresor()"><i class="fa fa-plus"></i> Agregar agresor a la denuncia</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <table class="table table-striped table-condensed table-hover" id="agresores">
                    <thead>
                      <tr style="color:#fff;">
                        <th style="padding: 10px; font-size: 12px; text-align: center; background: rgba(23, 146, 181, 0.9); border-bottom: 2px solid #ddd; width: 24px;">#</th>
                        <th style="padding: 10px; font-size: 12px; background: rgba(23, 146, 181, 0.9); border-bottom: 2px solid #ddd;">DOCUMENTO</th>
                        <th style="padding: 10px; font-size: 12px; background: rgba(23, 146, 181, 0.9); border-bottom: 2px solid #ddd;">APELLIDOS Y NOMBRES</th>
                        <th style="padding: 10px; font-size: 12px; background: rgba(23, 146, 181, 0.9); border-bottom: 2px solid #ddd;">PARENTESCO</th>
                        <th style="padding: 10px; font-size: 12px; background: rgba(23, 146, 181, 0.9); border-bottom: 2px solid #ddd;">DEPARTAMENTO</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <hr>
          
          <div class="row">
            <div class="col-md-offset-3 col-md-3">
              @if(isset($denuncia) && !empty($denuncia['id']))
                <div style="text-align: center">
                  <button class="btn btn-outline-warning btn-sm btn-block" type="submit"><i class="fa fa-save"></i> Actualizar</button>
                </div>
              @else
                <div style="text-align: center">
                  <button class="btn btn-outline-primary btn-sm btn-block" type="submit"><i class="fa fa-save"></i> Registrar</button>
                </div>
              @endif
            </div>
            <div class="col-md-3">
              <a href="{{ route('denuncia.jitinerante') }}" class="btn btn-sm btn-default btn-block">Cancelar</a>
            </div>
          </div>

          {!! Form::close() !!}          
        </div>
      </div>

    </div>
  </div>
</div>

{{-- victima modal --}}
<div class="modal modal-plus fade z-index-1060" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal11Label" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #337ab7; color:#fff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title" id="myModal11Label">Registrar Victima</h5>
      </div>
      <div class="modal-body">
        {!! Form::open([ 'route' => 'victima.store', 'id'=>'form_victima_modal' ]) !!}    
          {{-- <div class="row">
            <div class="col-md-6">
              <div class="form-group has-feedback {{ $errors->has('nombre')? 'has-error':'' }}">
                {{ Form::label('nombre', 'Nombre') }}
                {{ Form::text('nombre', null, ['class' => 'form-control input-sm'.($errors->has('nombre')?" is-invalid":""), "autofocus", 'id' => 'nombre', 'autocomplete' => 'off']) }}
                <span id="error-nombre" class="invalid-feedback"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group has-feedback {{ $errors->has('apellido')? 'has-error':'' }}">
                {{ Form::label('apellido', 'Apellido') }}
                {{ Form::text('apellido', null, ['class' => 'form-control input-sm'.($errors->has('apellido')?" is-invalid":""), "autofocus", 'id' => 'apellido', 'autocomplete' => 'off']) }}
                <span id="error-apellido" class="invalid-feedback"></span>
              </div>
            </div>
          </div> --}}
          <div class="row">
            <div class="col-md-4">
              <div class="form-group has-feedback {{ $errors->has('nombre1')? 'has-error':'' }}">
                {{ Form::label('nombre1', 'Primer Nombre') }}
                {{ Form::text('nombre1', null, ['class' => 'form-control input-sm'.($errors->has('nombre1')?" is-invalid":""), "autofocus", 'id' => 'nombre1', 'autocomplete' => 'off']) }}
                <span id="error-nombre1" class="invalid-feedback"></span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group has-feedback {{ $errors->has('nombre2')? 'has-error':'' }}">
                {{ Form::label('nombre2', 'Segundo Nombre') }}
                {{ Form::text('nombre2', null, ['class' => 'form-control input-sm'.($errors->has('nombre2')?" is-invalid":""), "autofocus", 'id' => 'nombre2', 'autocomplete' => 'off']) }}
                <span id="error-nombre2" class="invalid-feedback"></span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group has-feedback {{ $errors->has('nombre3')? 'has-error':'' }}">
                {{ Form::label('nombre3', 'Tercer Nombre') }}
                {{ Form::text('nombre3', null, ['class' => 'form-control input-sm'.($errors->has('nombre3')?" is-invalid":""), "autofocus", 'id' => 'nombre3', 'autocomplete' => 'off']) }}
                <span id="error-nombre3" class="invalid-feedback"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group has-feedback {{ $errors->has('apellido1')? 'has-error':'' }}">
                {{ Form::label('apellido1', 'Apellido Paterno') }}
                {{ Form::text('apellido1', null, ['class' => 'form-control input-sm'.($errors->has('apellido1')?" is-invalid":""), "autofocus", 'id' => 'apellido1', 'autocomplete' => 'off']) }}
                <span id="error-apellido1" class="invalid-feedback"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group has-feedback {{ $errors->has('apellido2')? 'has-error':'' }}">
                {{ Form::label('apellido2', 'Apellido Materno') }}
                {{ Form::text('apellido2', null, ['class' => 'form-control input-sm'.($errors->has('apellido2')?" is-invalid":""), "autofocus", 'id' => 'apellido2', 'autocomplete' => 'off']) }}
                <span id="error-apellido2" class="invalid-feedback"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                {{ Form::label('Tipo de Documento') }}
                {{ Form::select('tbldocumento_id', $documentos, null, array('id'=>'tbldocumento_id', 'class'=>'form-control input-sm'.($errors->has('tbldocumento_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Tipo de Documento')) }}
                <span id="error-tbldocumento_id" class="invalid-feedback"></span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group has-feedback {{ $errors->has('nro_doc')? 'has-error':'' }}">
                {{ Form::label('nro_doc', 'Numero de Documento') }}
                <span title="Usar el generador de código si no existe nro. de documento" class="pull-right"><i class="fa fa-info-circle"></i></span>
                {{-- {{ Form::text('nro_doc', null, ['class' => 'form-control input-sm'.($errors->has('nro_doc')?" is-invalid":""), "autofocus", 'id' => 'nro_doc', 'autocomplete' => 'off']) }} --}}
                <div class="input-group">
                  {{ Form::text('nro_doc', null, ['class' => 'form-control input-sm'.($errors->has('nro_doc')?" is-invalid":""), "autofocus", 'id' => 'nro_doc', 'autocomplete' => 'off']) }}
                  <span onclick="gCodigo(10,$(this),1)" class="input-group-addon"><i class="fa fa-refresh"></i></span>
                </div>
                <span id="error-nro_doc" class="invalid-feedback"></span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                {{ Form::label('Tipo') }}
                {{ Form::select('tbltipo_id', $tipos, null, array('id'=>'tbltipo_id','class'=>'form-control input-sm'.($errors->has('tbltipo_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Tipo')) }}
                <span id="error-tbltipo_id" class="invalid-feedback"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group has-feedback {{ $errors->has('edad')? 'has-error':'' }}">
                {{ Form::label('edad', 'Edad') }}
                {{ Form::number('edad', '0', ['min' => '0', 'class' => 'form-control input-sm'.($errors->has('edad')?" is-invalid":""), "autofocus", 'id' => 'edad', 'autocomplete' => 'off', 'style' => 'padding-right:10px']) }}
                <span id="error-edad" class="invalid-feedback"></span>
              </div>                
            </div>
            <div class="col-md-4">
              <div class="form-group has-feedback {{ $errors->has('hijos')? 'has-error':'' }}">
                {{ Form::label('hijos', 'Hijos') }}
                {{ Form::number('hijos', '0', ['min' => '0', 'class' => 'form-control input-sm'.($errors->has('hijos')?" is-invalid":""), "autofocus", 'id' => 'hijos', 'autocomplete' => 'off', 'style' => 'padding-right:10px']) }}
                <span id="error-hijos" class="invalid-feedback"></span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group has-feedback {{ $errors->has('telefono')? 'has-error':'' }}">
                {{ Form::label('telefono', 'Teléfono') }}
                {{ Form::text('telefono', null, ['class' => 'form-control input-sm'.($errors->has('telefono')?" is-invalid":""), "autofocus", 'id' => 'telefono', 'autocomplete' => 'off']) }}
                <span id="error-telefono" class="invalid-feedback"></span>
              </div>
            </div>
          </div>

          <div class="form-group has-feedback {{ $errors->has('email')? 'has-error':'' }}">
            {{ Form::label('email', 'Correo Electrónico') }}
            {{ Form::text('email', null, ['class' => 'form-control input-sm'.($errors->has('email')?" is-invalid":""), "autofocus", 'id' => 'email', 'autocomplete' => 'off']) }}
            <span id="error-email" class="invalid-feedback"></span>
          </div>

          <div class="form-group has-feedback {{ $errors->has('direccion')? 'has-error':'' }}">
            {{ Form::label('direccion', 'Dirección') }}
            {{ Form::text('direccion', null, ['class' => 'form-control input-sm'.($errors->has('direccion')?" is-invalid":""), "autofocus", 'id' => 'direccion', 'autocomplete' => 'off']) }}
            <span id="error-direccion" class="invalid-feedback"></span>
          </div>

          <div class="form-group">
            {{ Form::label('Departamento') }}
            {{ Form::select('tbldepartamento_id', $departamentos, null, array('class'=>'form-control input-sm tbldepartamento_id'.($errors->has('tbldepartamento_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Departamento', 'id'=>'tbldepartamento_id')) }}
            <span id="error-tbldepartamento_id" class="invalid-feedback"></span>
          </div>

          <div class="form-group">
            {{ Form::label('Provincia') }}
            {{ Form::select('tblprovincia_id', [], null, array('class'=>'form-control input-sm tblprovincia_id'.($errors->has('tblprovincia_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Provincia', 'id'=>'tblprovincia_id')) }}
            <span id="error-tblprovincia_id" class="invalid-feedback"></span>
          </div>

          <div class="form-group">
            {{ Form::label('Distrito') }}
            {{ Form::select('tbldistrito_id', [], null, array('class'=>'form-control input-sm tbldistrito_id'.($errors->has('tbldistrito_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Distrito', 'id'=>'tbldistrito_id')) }}
            <span id="error-tbldistrito_id" class="invalid-feedback"></span>
          </div>
        {!! Form::close() !!}
        
        <div class="row">
          <div class="col-sm-6">
            <div class="store" >
              {!! Form::button("Guardar",['id'=>"store_btn", "type" => "button","class"=>"btn btn-primary","onclick"=>"savePartes('form_victima_modal')"])!!}
            </div>

            <div class="update" >
              {!! Form::button("Actualizar",["type" => "button","class"=>"update_btn btn btn-warning","onclick"=>"savePartes('form_victima_modal')"])!!}
            </div>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            {!! Form::button("Limpiar",["type" => "button","class"=>"btn","style"=>"margin-right:10px","onclick"=>"resetPartes('form_victima_modal')"])!!}
            {!! Form::button("Cancelar",["type" => "button","class"=>"btn","data-dismiss"=>"modal","aria-label"=>"Close"])!!}
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

{{-- agresor modal --}}
<div class="modal modal-plus fade z-index-1060" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal21Label" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #337ab7; color:#fff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title" id="myModal21Label">Registrar Agresor</h5>
      </div>
      <div class="modal-body">
        {!! Form::open([ 'route' => 'agresor.store', 'id'=>'form_agresor_modal' ]) !!}    
          {{-- <div class="row">
            <div class="col-md-6">
              <div class="form-group has-feedback {{ $errors->has('nombre')? 'has-error':'' }}">
                {{ Form::label('nombre', 'Nombre') }}
                {{ Form::text('nombre', null, ['class' => 'form-control input-sm'.($errors->has('nombre')?" is-invalid":""), "autofocus", 'id' => 'nombre', 'autocomplete' => 'off']) }}
                <span id="error-nombre" class="invalid-feedback"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group has-feedback {{ $errors->has('apellido')? 'has-error':'' }}">
                {{ Form::label('apellido', 'Apellido') }}
                {{ Form::text('apellido', null, ['class' => 'form-control input-sm'.($errors->has('apellido')?" is-invalid":""), "autofocus", 'id' => 'apellido', 'autocomplete' => 'off']) }}
                <span id="error-apellido" class="invalid-feedback"></span>
              </div>
            </div>
          </div> --}}
          <div class="row">
            <div class="col-md-4">
              <div class="form-group has-feedback {{ $errors->has('nombre1')? 'has-error':'' }}">
                {{ Form::label('nombre1', 'Primer Nombre') }}
                {{ Form::text('nombre1', null, ['class' => 'form-control input-sm'.($errors->has('nombre1')?" is-invalid":""), "autofocus", 'id' => 'nombre1', 'autocomplete' => 'off']) }}
                <span id="error-nombre1" class="invalid-feedback"></span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group has-feedback {{ $errors->has('nombre2')? 'has-error':'' }}">
                {{ Form::label('nombre2', 'Segundo Nombre') }}
                {{ Form::text('nombre2', null, ['class' => 'form-control input-sm'.($errors->has('nombre2')?" is-invalid":""), "autofocus", 'id' => 'nombre2', 'autocomplete' => 'off']) }}
                <span id="error-nombre2" class="invalid-feedback"></span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group has-feedback {{ $errors->has('nombre3')? 'has-error':'' }}">
                {{ Form::label('nombre3', 'Tercer Nombre') }}
                {{ Form::text('nombre3', null, ['class' => 'form-control input-sm'.($errors->has('nombre3')?" is-invalid":""), "autofocus", 'id' => 'nombre3', 'autocomplete' => 'off']) }}
                <span id="error-nombre3" class="invalid-feedback"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group has-feedback {{ $errors->has('apellido1')? 'has-error':'' }}">
                {{ Form::label('apellido1', 'Apellido Paterno') }}
                {{ Form::text('apellido1', null, ['class' => 'form-control input-sm'.($errors->has('apellido1')?" is-invalid":""), "autofocus", 'id' => 'apellido1', 'autocomplete' => 'off']) }}
                <span id="error-apellido1" class="invalid-feedback"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group has-feedback {{ $errors->has('apellido2')? 'has-error':'' }}">
                {{ Form::label('apellido2', 'Apellido Materno') }}
                {{ Form::text('apellido2', null, ['class' => 'form-control input-sm'.($errors->has('apellido2')?" is-invalid":""), "autofocus", 'id' => 'apellido2', 'autocomplete' => 'off']) }}
                <span id="error-apellido2" class="invalid-feedback"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                {{ Form::label('Tipo de Documento') }}
                {{ Form::select('tbldocumento_id', $documentos, null, array('id'=>'tbldocumento_id','class'=>'form-control input-sm'.($errors->has('tbldocumento_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Tipo de Documento')) }}
                <span id="error-tbldocumento_id" class="invalid-feedback"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group has-feedback {{ $errors->has('nro_doc')? 'has-error':'' }}">
                {{ Form::label('nro_doc', 'Numero de Documento') }}
                <span title="Usar el generador de código si no existe nro. de documento" class="pull-right"><i class="fa fa-info-circle"></i></span>
                <div class="input-group">
                  {{ Form::text('nro_doc', null, ['class' => 'form-control input-sm'.($errors->has('nro_doc')?" is-invalid":""), "autofocus", 'id' => 'nro_doc', 'autocomplete' => 'off']) }}
                  <span onclick="gCodigo(10,$(this),2)" class="input-group-addon"><i class="fa fa-refresh"></i></span>
                </div>
                <span id="error-nro_doc" class="invalid-feedback"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group has-feedback {{ $errors->has('sexo')? 'has-error':'' }}">
                {{ Form::label('sexo', 'Sexo') }}
                {{ Form::select('sexo', ['Masculino'=>'Masculino','Femenino'=>'Femenino'], null, array('class'=>'form-control input-sm'.($errors->has('sexo')?" is-invalid":""), 'placeholder'=>'Seleccione un Sexo')) }}
                <span id="error-sexo" class="invalid-feedback"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group has-feedback {{ $errors->has('telefono')? 'has-error':'' }}">
                {{ Form::label('telefono', 'Teléfono') }}
                {{ Form::text('telefono', null, ['class' => 'form-control input-sm'.($errors->has('telefono')?" is-invalid":""), "autofocus", 'id' => 'telefono', 'autocomplete' => 'off']) }}
                <span id="error-telefono" class="invalid-feedback"></span>
              </div>
            </div>
          </div>

          <div class="form-group has-feedback {{ $errors->has('email')? 'has-error':'' }}">
            {{ Form::label('email', 'Correo Electrónico') }}
            {{ Form::text('email', null, ['class' => 'form-control input-sm'.($errors->has('email')?" is-invalid":""), "autofocus", 'id' => 'email', 'autocomplete' => 'off']) }}
            <span id="error-email" class="invalid-feedback"></span>
          </div>

          <div class="form-group has-feedback {{ $errors->has('direccion')? 'has-error':'' }}">
            {{ Form::label('direccion', 'Dirección') }}
            {{ Form::text('direccion', null, ['class' => 'form-control input-sm'.($errors->has('direccion')?" is-invalid":""), "autofocus", 'id' => 'direccion', 'autocomplete' => 'off']) }}
            <span id="error-direccion" class="invalid-feedback"></span>
          </div>

          <div class="form-group">
            {{ Form::label('Departamento') }}
            {{ Form::select('tbldepartamento_id', $departamentos, null, array('class'=>'form-control input-sm tbldepartamento_id'.($errors->has('tbldepartamento_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Departamento', 'id'=>'tbldepartamento_id')) }}
            <span id="error-tbldepartamento_id" class="invalid-feedback"></span>
          </div>

          <div class="form-group">
            {{ Form::label('Provincia') }}
            {{ Form::select('tblprovincia_id', [], null, array('class'=>'form-control input-sm tblprovincia_id'.($errors->has('tblprovincia_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Provincia', 'id'=>'tblprovincia_id')) }}
            <span id="error-tblprovincia_id" class="invalid-feedback"></span>
          </div>

          <div class="form-group">
            {{ Form::label('Distrito') }}
            {{ Form::select('tbldistrito_id', [], null, array('class'=>'form-control input-sm tbldistrito_id'.($errors->has('tbldistrito_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Distrito', 'id'=>'tbldistrito_id')) }}
            <span id="error-tbldistrito_id" class="invalid-feedback"></span>
          </div>
        {!! Form::close() !!}

        <div class="row">
          <div class="col-sm-6">
            <div class="store" >
              {!! Form::button("Guardar",["type" => "button","class"=>"btn btn-primary","onclick"=>"savePartes('form_agresor_modal')"])!!}
            </div>

            <div class="update" >
              {!! Form::button("Actualizar",["type" => "button","class"=>"update_btn btn btn-warning","onclick"=>"savePartes('form_agresor_modal')"])!!}
            </div>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            {!! Form::button("Limpiar",["type" => "button","class"=>"btn","onclick"=>"resetPartes('form_agresor_modal')"])!!}
            {!! Form::button("Cancelar",["type" => "button","class"=>"btn","data-dismiss"=>"modal","aria-label"=>"Close"])!!}
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<div class="loading" style="display: none;">
  <i class="fa fa-refresh fa-spin fa-2x fa-tw"></i>
  <br>
  <span>Loading</span>
</div>

@endsection

@section('js')
  
  <script type="text/javascript">
    $(".loading").css('display','block');

    var url_ditr = "{{ route('denuncia.jitinerante') }}";
    var denuncia_id = "{{ ( isset($denuncia->id) && !empty($denuncia->id)) ? $denuncia->id : 0 }}";
    if (typeof denuncia_id !== 'undefined' && (denuncia_id) && (denuncia_id =! 0)) {
      var victima_arr = @json( ( isset($denuncia->victimas) && !empty($denuncia->victimas) ) ? $denuncia->victimas : array() );
      // se agrega la columna de la tabla pivot "tblparentesco_id" a cada array de agresores
      var agresor_arr = @json( ( isset($denuncia->agresores) && !empty($denuncia->agresores) ) ? $denuncia->agresores : array() );
      debugger
    }
    $(document).ready(function() {
      $(".loading").css('display','none');
      // ambas funciones se encuentran en assests/js/denuncia/itinerante/itinerante.js
      if ((victima_arr.length != 0) && (agresor_arr.length != 0)) {
        cargarVictima(victima_arr);
        cargarAgresor(agresor_arr);
      }
    });
  </script>

  <script src="{{ asset('assests/js/denuncia/itinerante/itinerante.js') }}"></script>
  
  <script type="text/javascript">
    
    function randomString(length, chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
      var result = '';
      for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
      return result;
    }

    // generar codigo
    function gCodigo(length,elm,type) {
      debugger
      var time = new Date().getTime();
      var code = randomString(length)+time;

      var nombre1 = $("form#"+$(elm).closest('form').attr('id')+" input#nombre1").val();
      var nombre2 = $("form#"+$(elm).closest('form').attr('id')+" input#nombre2").val();
      var nombre3 = $("form#"+$(elm).closest('form').attr('id')+" input#nombre3").val();
      var apellido1 = $("form#"+$(elm).closest('form').attr('id')+" input#apellido1").val();
      var apellido2 = $("form#"+$(elm).closest('form').attr('id')+" input#apellido2").val();
      
      // if (!nombre1.trim() && !apellido1.trim() && !apellido2.trim() && nombre1 != '' && apellido1 != '' && apellido2 != '') {
      if (nombre1 != '' && apellido1 != '' && apellido2 != '') {

        var prefix = nombre1[0]+apellido1[0]+apellido2[0];

        $.ajax({
          type: "GET",
          url: '/denuncia/genLDAP/',
          data : { prefix : prefix, type : type },
          cache: false, // al navegar atras se muestra todo correctamente
          contentType: false,
          success: function (data) {
            debugger
            console.log(data);
            $("form#"+$(elm).closest('form').attr('id')+" input#"+$(elm).prev().attr('id')).val(prefix+data);
          },
          error: function (xhr, status, error) {
              alert(xhr.responseText);
          }
        });
      
      }else {
        alert("Debe ingresar al menos un nombre y los apellidos.");
      }

    }

    // select
    $('#tblviolencia_id').select2({
      placeholder: 'Seleccione un Tipo',
      width: '100%'
    });
    $('#tblmedida_id').select2({
      placeholder: 'Seleccione un Tipo',
      width: '100%'
    });
    $('#tbldenuncia_id').select2({
      placeholder: 'Seleccione un Tipo',
      width: '100%'
    });
    $('#tblcomisaria_id').select2();

    // victima
    $('#victima_id').select2({ // SELECT CLASS
      // dropdownCssClass: "select-size",
      language: "es",
      placeholder: 'Buscar por Nombres, DNI ...',
      ajax: {
        url: '/getVictima',
        dataType: 'json',
        delay: 250,
        processResults: function (data) {
          return {
            results:  $.map(data, function (item) {
                return {
                    id: item.id,
                    text: item.nro_doc+" | "+item.apellido+", "+item.nombre,
                }
            })
          };
        },
        cache: true
      }
    });
    $("#victima_id").on('change',function(){ 
      if ($("#victima_id").val() !== null) {
        $('#victima_id').prev().find('span').attr('class','fa fa-folder-open');
      }
    });

    // agresor
    $('#agresor_id').select2({ // SELECT CLASS
      // dropdownCssClass: "select-size",
      language: "es",
      placeholder: 'Buscar por Nombres, DNI ...',
      ajax: {
        url: '/getAgresor',
        dataType: 'json',
        delay: 250,
        processResults: function (data) {
          return {
            results:  $.map(data, function (item) {
                return {
                    id: item.id,
                    text: item.nro_doc+" | "+item.apellido+", "+item.nombre,
                }
            })
          };
        },
        cache: true
      }
    });
    $("#agresor_id").on('change',function(){ 
      if ($("#agresor_id").val() !== null) {
        $('#agresor_id').prev().find('span').attr('class','fa fa-folder-open');
      }
    });

    // files
    $('#medida_file').fileinput({
      theme: 'fa',
      language: 'es',
      showUpload: false,
      showCaption: true,
      showClose: true,
      showBrowse: true,
      showUploadedThumbs: false,
      showPreview: false,
      // uploadUrl: '#',
      allowedFileExtensions: ['pdf','doc','docx']
    });
    $('#registro_file').fileinput({
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

    // timepicker
    $('.timepicker').timepicker({
      minuteStep: 5,
      showInputs: false,
      showMeridian: false,
      showSeconds: false,
      defaultTime:'00:00',
    })

  </script>

@endsection
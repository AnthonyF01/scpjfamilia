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
    .loading2 {
      background: lightgrey;
      padding: 20px;
      position: fixed;
      border-radius: 5px;
      left: 50%;
      top: 50%;
      text-align: center;
      margin: -40px 0 0 -50px;
      z-index: 2000;
      display: none;
    }
    .box.cld{
      border-radius: 3px !important;
      border-top-width: 3px !important;
    }

    .panel-warning {
      border-color: #ffc107 !important;
    }
    .panel-warning>.panel-heading {
      color: #fff !important;
      background-color: #ffc107 !important;
      border-color: #ffc107 !important;
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
          <div class="row">
            <div class="col-md-6"><i class="fa fa-list-ul"></i> Denuncias</div>
            <div class="col-md-6">
              @can('denuncia.jicreate')
                <a href="{{ route('denuncia.jicreate') }}" class="btn btn-xs btn-outline-primary pull-right">
                  <i class="fa fa-plus"></i> Agregar Nuevo Registro de Denuncia
                </a>
              @endcan
            </div>
          </div>
        </div>
        <div class="box_plus-body">
          <div class="row">

            <div class="col-md-12">
              <div class="box cld box-primary">
                <div class="box-body">
                  <!-- THE CALENDAR -->
                  <div id="calendar"></div>
                </div>
                <!-- /.box-body -->
              </div><br>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="row">
                  {{ Form::label('tblcomisaria_id', 'Comisaría:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                  <div class="col-sm-8">
                    {{ Form::select('tblcomisaria_id', $comisarias, Session::get('tblcomisaria_id'), array('class'=>'form-control input-sm'.($errors->has('tblcomisaria_id')?" is-invalid":""), 'placeholder'=>'Seleccione una Comisaría', 'style'=>'width: 100%', 'onChange'=>'showRowC(this)')) }}
                    <span id="error-tblcomisaria_id" class="invalid-feedback"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label" style="vertical-align: middle; line-height: 34px; margin: 0px;">Intervalo de fechas: </label>
                  <div class="col-md-8">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <div class="checkbox icheck icheck-sm" onclick="/*onClickCheck()*/">
                          <label class="">
                            <div class="icheckbox_square-blue" style="position: relative;">
                              {!! Form::checkbox('intfech', null, null, (Session::get('checked')) ? [ 'checked'=>'checked' ] : [ ''=>'' ] ) !!}
                            </div>
                          </label>
                        </div>
                      </div>
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="dateRange">
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <label for="showing" class="col-sm-4 control-label" style="line-height:30px">Registros por página:</label>
                  <div class="col-sm-8">
                    <select name="showing" aria-controls="showing" class="input-sm form-control" onchange="showRow(this);">
                      <option value="10" {{ (request()->session()->get('show') == '10' ) ? 'selected' : '' }} >10</option>
                      <option value="25" {{ (request()->session()->get('show') == '25' ) ? 'selected' : '' }} >25</option>
                      <option value="50" {{ (request()->session()->get('show') == '50' ) ? 'selected' : '' }} >50</option>
                      <option value="100" {{ (request()->session()->get('show') == '100' ) ? 'selected' : '' }} >100</option>
                      <option value="200" {{ (request()->session()->get('show') == '200' ) ? 'selected' : '' }} >200</option>
                      <option value="300" {{ (request()->session()->get('show') == '300' ) ? 'selected' : '' }} >300</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              
              <div class="form-group has-feedback ">
                <div class="row">
                  <label for="oficio" class="col-sm-4 control-label" style="line-height:30px">Código Denuncia:</label>
                  <div class="col-sm-8">
                    <div class="input-group">
                      <input class="form-control input-sm" autofocus="autofocus" id="search" value="{{ request()->session()->get('search') }}" onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('denuncia/jitinerante/index')}}?search='+this.value)" placeholder="Buscar..." name="search" type="text"/>
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-primary" onclick="ajaxLoad('{{url('denuncia/jitinerante/index')}}?search='+$('input#search').val())">
                          <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group has-feedback ">
                <div class="row">
                  <label for="dni" class="col-sm-4 control-label" style="line-height:30px">DNI:</label>
                  <div class="col-sm-8">
                    <div class="input-group">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-primary" onclick="$('#selectVictima').val(null).trigger('change'); ajaxLoad('{{url('denuncia/jitinerante/index')}}?dni='+'');">
                          <i class="fa fa-refresh" aria-hidden="true"></i>
                        </button>
                      </div>
                      <select id="selectVictima" class="form-control" name="selectVictima"></select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <label for="success" class="col-md-12 control-label" style="line-height:30px"><i style="margin-right: 2px; color: #00a65a; font-size: 15px;" title="" class="fa fa-check-circle"></i> Registro de denuncia correcto y completo</label>
            <label for="error" class="col-md-12 control-label" style="line-height:30px"><i style="margin-right: 2px; color: #dd4b39; font-size: 15px;" title="" class="fa fa-times-circle"></i> Registro de denuncia incompleto</label>

            <div id="content_ajax">
              @include('denuncia.itinerante.ajax')   
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="modalItinerante" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="row">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <span class="title">Agregar Denuncia - Justicia ItineranTE</span>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="fa fa-times-circle"></span>
              </button>
              <span id="span-title" style="font-size: 14px"></span>
            </div>
            <div class="panel-body" style="padding: 15px">
              <form method="POST" action="http://localhost:8000/denuncia/jitinerante/store" accept-charset="UTF-8" id="form_denuncia_itinerante">

                @method('POST')
                @csrf
  
                <div class="row">
                  <div class="col-md-6">
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
                  <div class="col-md-6">
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
                </div>

                <div class="form-group">
                  {{ Form::label('tblviolencia_id', 'Tipo de Violencia:', ['class' => 'lbldens control-label']) }}
                  @if(isset($denuncia) && !empty($denuncia['id']))
                    {{Form::select('tblviolencia_id',$violencias,$denuncia->tblviolencias()->pluck('tblviolencia.id','tblviolencia.nombre')->toArray(),array('class' => 'form-control input-sm'.($errors->has('tblviolencia_id')?" is-invalid":""), 'multiple'=>'multiple','name'=>'tblviolencia_id[]','id'=>'tblviolencia_id'))}}
                  @else
                    {{Form::select('tblviolencia_id',$violencias,null,array('class' => 'form-control input-sm'.($errors->has('tblviolencia_id')?" is-invalid":""), 'multiple'=>'multiple','name'=>'tblviolencia_id[]','id'=>'tblviolencia_id'))}}
                  @endif
                  <span id="error-tblviolencia_id" class="invalid-feedback"></span>
                </div>

                
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('tbldenuncia_id', 'Grado de violencia:', ['class' => 'lbldens control-label']) }}
                      {{Form::select('tbldenuncia_id',$tdenuncias,null,array('class' => 'form-control input-sm'.($errors->has('tbldenuncia_id')?" is-invalid":""),'name'=>'tbldenuncia_id','id'=>'tbldenuncia_id'))}}
                      <span id="error-tbldenuncia_id" class="invalid-feedback"></span>
                    </div>
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
                </div>

                <div class="row">
                  <div class="col-md-6">
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
                  <div class="col-md-6">
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

                <div class="form-group">
                  {{ Form::label('tblmedida_id', 'Tipo de Medida de Protección:', ['class' => 'lbldens control-label']) }}
                  @if(isset($denuncia) && !empty($denuncia['id']))
                    {{Form::select('tblmedida_id',$medidas,$denuncia->tblmedidas()->pluck('tblmedida.id','tblmedida.nombre')->toArray(),array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""), 'multiple'=>'multiple','name'=>'tblmedida_id[]','id'=>'tblmedida_id'))}}
                  @else
                    {{Form::select('tblmedida_id',$medidas,null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""), 'multiple'=>'multiple','name'=>'tblmedida_id[]','id'=>'tblmedida_id'))}}
                  @endif
                  <span id="error-tblmedida_id" class="invalid-feedback"></span>
                </div>
                
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('fmedida', 'Fecha de Medida de Protección:', ['class' => 'lbldens control-label']) }}
                      <div class="input-group date">
                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                        {{ Form::text('fmedida', null, ['class' => 'form-control input-sm datepicker'.($errors->has('fmedida')?" is-invalid":""), "autofocus", 'id' => 'fmedida', 'autocomplete' => 'off']) }}
                      </div>
                      <span id="error-fmedida" class="invalid-feedback"></span>
                    </div>
                  </div>
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
  
                <div class="row">
                  <div class="col-md-6">
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

                <div class="form-group has-feedback {{ $errors->has('observacion')? 'has-error':'' }}">
                  {{ Form::label('observacion', 'Observaciones:', ['class' => 'lbldens control-label']) }}
                  <div class="input-group">
                    {{ Form::textarea('observacion', null, ['class' => 'form-control input-sm'.($errors->has('observacion')?" is-invalid":""), "autofocus", 'id' => 'observacion', 'autocomplete' => 'off', 'rows' => 4]) }}
                    <div class="input-group-addon"><i class="fa fa-edit"></i></div>
                  </div>
                  <span id="error-observacion" class="invalid-feedback"></span>
                </div>

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
                    <div class="form-group" style="margin-bottom: 0px;">
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
                  <div class="col-md-offset-4 col-md-4">
                    <div class="btnIt">
                      <a class="btn btn-outline-primary btn-sm btn-block" onclick="doSubmit()"><i class="fa fa-save"></i> Registrar</a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
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

<div class="loading2" style="display: none;">
  <i class="fa fa-refresh fa-spin fa-2x fa-tw"></i>
  <br>
  <span>Loading</span>
</div>

@endsection

@section('js')
  <script type="text/javascript">
    var date1 = "{{ request()->session()->get('fecha1') }}";
    var date2 = "{{ request()->session()->get('fecha2') }}";
    var chk = {{ Session::get('checked') }};
  </script>
  <script type="text/javascript">
    // form action
    store = "{{ route('denuncia.jistore') }}";
    update = "{{ url('/denuncia/jitinerante/') }}";

    // modal elemetn (button - title)
    var btnIt = '';
    var title = '';

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    var calendar = $('#calendar').fullCalendar({
      locale: 'es',
      themeSystem: 'bootstrap4',
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay,listWeek'
      },
      aspectRatio: 1.605,
      columnHeaderFormat:'dddd',
      height: 510,
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      defaultView: 'agendaWeek',
      minTime: "8:00:00",
      maxTime: "18:00:00",
      selectable: true,
      allDaySlot: true,
      defaultEventMinutes: 120,
      slotLabelFormat: 'HH:mm',
      weekNumbers: true,
      weekNumbersWithinDays: true,
      selectHelper:true,
      nowIndicator:true,
      buttonText: {
        today: 'Hoy',
        month: 'Mes',
        week : 'Semana',
        listweek : 'Agenda',
        day  : 'Día'
      },
      //Random default events
      /*events    : [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954' //red
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Reunión',
          start          : new Date(y, m, d, 11, 0),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Almuerzo',
          start          : new Date(y, m, d, 13, 30),
          end            : new Date(y, m, d, 14, 30),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Itinerancia-Audiencia en comisaria',
          start          : new Date(y, m, d + 1, 15, 0),
          end            : new Date(y, m, d + 1, 16, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'http://google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],*/
      events: "{{ url('denuncia/jitinerante/getAudiencia') }}",
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped
        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }
      },
      eventClick:  function(event, jsEvent, view) { // click sobre un evento creado
        // $('#modalItinerante').modal();
        console.log("abrir");

        $("#modalItinerante #form_denuncia_itinerante input[name=faudiencia]").datepicker({
            autoclose: true,
            format: 'dd/mm/yyyy',
        }).removeAttr('readonly');

        btnIt = '<a class="btn btn-outline-warning btn-sm btn-block" type="submit"><i class="fa fa-save"></i>Actualizar</a>';
        title = 'Agregar Denuncia - Justicia Itinerante';
        $(".btnIt").html(btnIt);
        $("#modalItinerante #form_denuncia_itinerante input[name=method]").val('PUT');
        $("#modalItinerante #form_denuncia_itinerante").attr('action',update);
        $('#modalItinerante .panel').removeClass('panel-primary');
        $('#modalItinerante .panel').addClass('panel-warning');
        $('#modalItinerante').modal('toggle');
      },
      select: function(start, end, jsEvent) { // seleccionar un espacio en blanco
        endtime = $.fullCalendar.moment(end).format('HH:mm');
        ftime = endtime;
        starttime = $.fullCalendar.moment(start).format('dddd, DD MMMM YYYY, HH:mm');
        itime = $.fullCalendar.moment(start).format('HH:mm');
        adate = $.fullCalendar.moment(start).format('DD/MM/YYYY'); // faudiencia
        var mywhen = starttime + ' - ' + endtime;
        start = moment(start).format();
        end = moment(end).format();
        // alert(starttime+' | '+endtime+' | '+mywhen+' | '+start+' | '+end);

        $("#modalItinerante #form_denuncia_itinerante input[name=hora]").timepicker('setTime', itime);
        $("#modalItinerante #form_denuncia_itinerante input[name=horaf]").timepicker('setTime', ftime);
        $("#modalItinerante #form_denuncia_itinerante input[name=faudiencia]").datepicker('destroy').attr('readonly', 'readonly');
        $("#modalItinerante #form_denuncia_itinerante input[name=faudiencia]").val(adate);
        $("#modalItinerante #form_denuncia_itinerante input[name=fmedida]").datepicker("setDate", adate);

        btnIt = '<a class="btn btn-outline-primary btn-sm btn-block" onclick="doSubmit()"><i class="fa fa-save"></i> Registrar</a>';
        title = 'Agregar Denuncia - Justicia ItineranTE';
        $(".btnIt").html(btnIt);
        $("#modalItinerante #form_denuncia_itinerante input[name=method]").val('POST');
        $("#modalItinerante #form_denuncia_itinerante").attr('action',store);
        $('#modalItinerante .panel').removeClass('panel-warning');
        $('#modalItinerante .panel').addClass('panel-primary');
        $('#modalItinerante').modal('toggle');
      },
    });
  
    function doSubmit(){
      debugger;
      $(".loading2").css('display','block');
      $(".btnIt a").attr("disabled", true);

      var form = $("#modalItinerante #form_denuncia_itinerante");
      var formData  = new FormData($("#modalItinerante #form_denuncia_itinerante")[0]);
      var url = form.attr("action");

      // input checkbox
      if (formData.has('device')) {
          formData.set('device', parseInt($('#modalItinerante #form_denuncia_itinerante input[name="device"]:checked').length));
      }
      if (formData.has('itinerancia')) {
          formData.set('itinerancia', parseInt($('#modalItinerante #form_denuncia_itinerante input[name="itinerancia"]:checked').length));
      }

      // input radio
      var pabogado = $('#modalItinerante #form_denuncia_itinerante input[name=pabogado]:checked').val();
      if (typeof pabogado !== 'undefined' && (pabogado)) {
          formData.append("pabogado",pabogado);
      }
      var pdenuncia = $('#modalItinerante #form_denuncia_itinerante input[name=pdenuncia]:checked').val();
      if (typeof pdenuncia !== 'undefined' && (pdenuncia)) {
          formData.append("pdenuncia",pdenuncia);
      }

      formData.append('rmodal',1);

      $.ajax({
        url: url,
        type: form.attr('method'),
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
          debugger
          $(".btnIt a").removeAttr("disabled");
          $('#modalItinerante #form_denuncia_itinerante .is-invalid').removeClass('is-invalid');
          $('#modalItinerante #form_denuncia_itinerante .invalid-feedback').html('');

          if (data.fail) {
            for (control in data.errors) {
              $('#modalItinerante #form_denuncia_itinerante #' + control).addClass('is-invalid');
              $('#modalItinerante #form_denuncia_itinerante #error-' + control).html(data.errors[control]);
            }
            $(".loading2").css('display','none');
          } else {
            window.location = update+'/'+data.id+'/edit';
          }
        },
        error: function (xhr, textStatus, errorThrown) {
          $(".btnIt a").removeAttr("disabled");
          $(".loading2").css('display','none');
          alert("Error: " + errorThrown);
        }
      });

    }
    
  </script>
  <script type="text/javascript">
    // fix button calendar
    $(document).ready(function() {
      $(".fc-listWeek-button").text("Agenda");
    });
  </script>
  <script type="text/javascript">
    // select
    $('#modalItinerante #tblviolencia_id').select2({
      placeholder: 'Seleccione un Tipo',
      width: '100%'
    });
    $('#modalItinerante #tblmedida_id').select2({
      placeholder: 'Seleccione un Tipo',
      width: '100%'
    });
    $('#modalItinerante #tbldenuncia_id').select2({
      placeholder: 'Seleccione un Tipo',
      width: '100%'
    });
    $('#modalItinerante #tblcomisaria_id').select2();

    // timepicker
    $('.timepicker').timepicker({
      minuteStep: 5,
      showInputs: false,
      showMeridian: false,
      showSeconds: false,
      defaultTime:'08:00',
    })
  </script>
  <script src="{{ asset('assests/js/denuncia/itinerante/itinerante.js') }}"></script>
@endsection
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
              @can('denuncia.create')
                <a href="{{ route('denuncia.create') }}" class="btn btn-xs btn-outline-primary pull-right">
                  <i class="fa fa-plus"></i> Agregar Nuevo Registro de Denuncia
                </a>
              @endcan
            </div>
          </div>
        </div>
        <div class="box_plus-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <div class="row">
                  <label for="showing" class="col-sm-4 control-label" style="line-height:30px">Mes: </label>
                  <div class="col-sm-8">
                    <select name="mes" class="form-control input-sm" id="mes">
                       <option value="0">Elegir Mes</option>
                       <option value="1" {{ ( (isset($request['mes']) && !empty($request['mes']) && $request['mes'] == '1') ? 'selected="selected"' : '' ) }}>Enero</option>
                       <option value="2" {{ ( (isset($request['mes']) && !empty($request['mes']) && $request['mes'] == '2') ? 'selected="selected"' : '' ) }}>Febrero</option>
                       <option value="3" {{ ( (isset($request['mes']) && !empty($request['mes']) && $request['mes'] == '3') ? 'selected="selected"' : '' ) }}>Marzo</option>
                       <option value="4" {{ ( (isset($request['mes']) && !empty($request['mes']) && $request['mes'] == '4') ? 'selected="selected"' : '' ) }}>Abril</option>
                       <option value="5" {{ ( (isset($request['mes']) && !empty($request['mes']) && $request['mes'] == '5') ? 'selected="selected"' : '' ) }}>Mayo</option>
                       <option value="6" {{ ( (isset($request['mes']) && !empty($request['mes']) && $request['mes'] == '6') ? 'selected="selected"' : '' ) }}>Junio</option>
                       <option value="7" {{ ( (isset($request['mes']) && !empty($request['mes']) && $request['mes'] == '7') ? 'selected="selected"' : '' ) }}>Julio</option>
                       <option value="8" {{ ( (isset($request['mes']) && !empty($request['mes']) && $request['mes'] == '8') ? 'selected="selected"' : '' ) }}>Agosto</option>
                       <option value="9" {{ ( (isset($request['mes']) && !empty($request['mes']) && $request['mes'] == '9') ? 'selected="selected"' : '' ) }}>Septiembre</option>
                       <option value="10" {{ ( (isset($request['mes']) && !empty($request['mes']) && $request['mes'] == '10') ? 'selected="selected"' : '' ) }}>Octubre</option>
                       <option value="11" {{ ( (isset($request['mes']) && !empty($request['mes']) && $request['mes'] == '11') ? 'selected="selected"' : '' ) }}>Noviembre</option>
                       <option value="12" {{ ( (isset($request['mes']) && !empty($request['mes']) && $request['mes'] == '12') ? 'selected="selected"' : '' ) }}>Diciembre</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="row">
                  {{ Form::label('anio', 'Año:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                  <div class="col-sm-8">
                    {{ Form::select('anio', $anios, ( (isset($request['anio']) && !empty($request['anio'])) ? $request['anio'] : null ), array('class'=>'form-control input-sm', 'placeholder'=>'Seleccione Año', 'style'=>'width: 100%')) }}
                    <span id="error-anio" class="invalid-feedback"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-xs-12" style="border-right: 1px solid #ccc">
              <div id="graficoMensual" style="min-width: 100%; max-width: 100%; height: auto; margin: 0 auto;"></div>
            </div>
            <div class="col-sm-6 col-xs-12">
              <div id="graficoAnual" style="min-width: 100%; max-width: 100%; height: auto; margin: 0 auto;"></div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <div class="row">
                  {{ Form::label('tblinstancia_id', 'Juzgado:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                  <div class="col-sm-8">
                    {{ Form::select('tblinstancia_id', $instancias, Session::get('tblinstancia_id'), array('class'=>'form-control input-sm'.($errors->has('tblinstancia_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Juzgado', 'style'=>'width: 100%', 'onChange'=>'showRowJ(this)')) }}
                    <span id="error-tblinstancia_id" class="invalid-feedback"></span>
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

              <div class="form-group">
                <div class="row">
                  <label for="showing" class="col-sm-4 control-label" style="line-height:30px">Estado:</label>
                  <div class="col-sm-8">
                    <select name="showing" aria-controls="showing" class="input-sm form-control" onchange="showEstado(this)">
                      <option value="0" {{ (request()->session()->get('estado') == '0' ) ? 'selected' : '' }} >Seleccion Estado</option>
                      <option value="1" {{ (request()->session()->get('estado') == '1' ) ? 'selected' : '' }} >Tramitado</option>
                      <option value="2" {{ (request()->session()->get('estado') == '2' ) ? 'selected' : '' }} >Pendiente</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group has-feedback ">
                <div class="row">
                  <label for="dni" class="col-sm-4 control-label" style="line-height:30px">DNI:</label>
                  <div class="col-sm-8">
                    <div class="input-group">
                      <input class="form-control input-sm" autofocus="autofocus" id="dni" value="{{ request()->session()->get('dni') }}" onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('denuncia')}}?dni='+this.value)" placeholder="Buscar..." name="dni" type="text"/>
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-primary" onclick="ajaxLoad('{{url('denuncia')}}?dni='+$('input#dni').val())">
                          <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="row">
                  {{ Form::label('tblcomisaria_id', 'Institución:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                  <div class="col-sm-8">
                    {{ Form::select('tblcomisaria_id', $comisarias, Session::get('tblcomisaria_id'), array('class'=>'form-control input-sm'.($errors->has('tblcomisaria_id')?" is-invalid":""), 'placeholder'=>'Seleccione una Institución', 'style'=>'width: 100%', 'onChange'=>'showRowC(this)')) }}
                    <span id="error-tblcomisaria_id" class="invalid-feedback"></span>
                  </div>
                </div>
              </div>
              <div class="form-group has-feedback ">
                <div class="row">
                  <label for="oficio" class="col-sm-4 control-label" style="line-height:30px">Expediente:</label>
                  <div class="col-sm-8">
                    <div class="input-group">
                      <input class="form-control input-sm" autofocus="autofocus" id="search" value="{{ request()->session()->get('search') }}" onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('denuncia')}}?search='+this.value)" placeholder="Buscar..." name="search" type="text"/>
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-primary" onclick="ajaxLoad('{{url('denuncia')}}?search='+$('input#search').val())">
                          <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                      </div>
                    </div>
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

              <div class="form-group has-feedback ">
                <div class="row">
                  <label for="dni" class="col-sm-4 control-label" style="line-height:30px">DNI:</label>
                  <div class="col-sm-8">
                    <select id="selectVictima" class="form-control" name="selectVictima"></select>
                  </div>
                </div>
              </div>

            </div>
          </div><br>

          <div id="content_ajax">
            @include('denuncia.denuncia.ajax')
          </div>

          <div class="modal fade" id="showModalRegistro" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="col-xs-12 col-md-12 col-lg-12">
                  <div class="row">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true" class="fa fa-times-circle"></span>
                        </button>
                        <span id="span-title" style="font-size: 14px"></span>
                      </div>
                      <div class="panel-body" style="padding: 15px">
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12 hide" id="modal_message">
                            <div class="alert alert-warning">
                              <button type="button" class="close" onclick="$('div#modal_message').removeClass('show'); $('div#modal_message').addClass('hide');">
                                <span aria-hidden="true">×</span>
                              </button>
                              <div id="show_message"></div>
                            </div>
                          </div>

                          <div class="col-sm-12">
                            <form id="form-file" onsubmit="return false;">
                              <div class="col-md-12 col-lg-12 col-xs-12">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                  <label>Adjuntar Documento</label>
                                  <input type="file" name="document_file" id="document_file" class="form-control" accept=".pdf">
                                </div>
                                <div class="row">
                                  <div class="col-sm-12 col-xs-12">
                                    <div class="form-group hide" id="pdf-document_file">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-12">
                                    <button disabled="" id="button-file" class="btn btn-sm">
                                    </button>
                                    <button type="reset" data-dismiss="modal" class="btn btn-danger pull-right btn-sm">
                                      <i style="color:white" class="glyphicon glyphicon-remove-sign"></i>
                                      Cerrar
                                    </button>
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
            </div>
          </div>

          <div class="modal fade" id="showModalNotificacion" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 1100px !important;">
              <div class="modal-content">
                <div class="col-xs-12 col-md-12 col-lg-12">
                  <div class="row">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        Notificaciones
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true" class="fa fa-times-circle"></span>
                        </button>
                        <span id="span-title" style="font-size: 14px"></span>
                      </div>
                      <div class="panel-body" style="padding: 15px">
                        <div class="row">
                          <div class="col-md-4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </div>
                          <div class="col-md-8">
                            <!-- MAP -->
                            <div class="thumbnail" id="widget">
                                <div class="map_canvas" id="mapa" style="height: 500px; "></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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

@endsection

@section('js')
  <script type="text/javascript">
    var url = "{{url('denuncia/getGData')}}";
    var URLs="{{url('/')}}";
    var date1 = "{{ request()->session()->get('fecha1') }}";
    var date2 = "{{ request()->session()->get('fecha2') }}";
    var chk = {{ Session::get('checked') }};
    // alert(date1 + ' - ' + date2 + ' - ' + chk);
  </script>
  <script src="{{ asset('assests/js/denuncia/denuncia/denuncia.js') }}"></script>
@endsection

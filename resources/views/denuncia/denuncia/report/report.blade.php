@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Denuncias
@endsection

@section('contentheader_title')
    Denuncias
@endsection

@section('contentheader_subtitle')
    Reportes
@endsection

@section('report')
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
      <div id="content_ajax">
        <div class="box_plus box_plus-default ">
          <div id="box_plus-title" class="box_plus-heading">
            <div class="row">
              <div class="col-md-6"><i class="fa fa-list-ul"></i> Reportes</div>
            </div>
          </div> 
          <div class="box_plus-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="row">
                    {{ Form::label('tblinstancia_id', 'Juzgado:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                    <div class="col-sm-8">
                      {{ Form::select('tblinstancia_id', $instancias, null, array('class'=>'form-control input-sm'.($errors->has('tblinstancia_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Juzgado', 'style'=>'width: 100%')) }}
                      <span id="error-tblinstancia_id" class="invalid-feedback"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    {{ Form::label('anio', 'Año:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                    <div class="col-sm-8">
                      {{ Form::select('anio', $anios, null, array('class'=>'form-control input-sm', 'placeholder'=>'Seleccione Año', 'style'=>'width: 100%')) }}
                      <span id="error-anio" class="invalid-feedback"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label for="showing" class="col-sm-4 control-label" style="line-height:30px">Mes: </label>
                    <div class="col-sm-8">
                      <select name="mes" class="form-control input-sm" id="mes">
                         <option value="0">Elegir Mes</option>
                         <option value="1">Enero</option>
                         <option value="2">Febrero</option>  
                         <option value="3">Marzo</option>           
                         <option value="4">Abril</option>
                         <option value="5">Mayo</option>
                         <option value="6">Junio</option>
                         <option value="7">Julio</option>  
                         <option value="8">Agosto</option>  
                         <option value="9">Septiembre</option>  
                         <option value="10">Octubre</option>  
                         <option value="11">Noviembre</option> 
                         <option value="12">Diciembre</option>                                                            
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    {{ Form::label('pendiente', 'Registros pendientes:', ['class' => 'col-sm-4 control-label', 'style' => 'padding-top: 10px;']) }}
                    <div class="col-sm-8">
                      <div class="checkbox icheck">
                        <label class="">
                          <div class="icheckbox_square-blue" style="position: relative;">
                            {!! Form::checkbox('formalizacion', null, null) !!}
                          </div> Módulo Familia: Formalización
                        </label>
                      </div>
                      <div class="checkbox icheck">
                        <label class="">
                          <div class="icheckbox_square-blue" style="position: relative;">
                            {!! Form::checkbox('audiencia', null, null) !!}
                          </div> Módulo Familia: Audiencia
                        </label>
                      </div>
                      <div class="checkbox icheck">
                        <label class="">
                          <div class="icheckbox_square-blue" style="position: relative;">
                            {!! Form::checkbox('remision', null, null) !!}
                          </div> Fase I: Remision
                        </label>
                      </div>
                      <div class="checkbox icheck">
                        <label class="">
                          <div class="icheckbox_square-blue" style="position: relative;">
                            {!! Form::checkbox('denuncia', null, null) !!}
                          </div> Fase II: Ministerio Publico
                        </label>
                      </div>
                      <div class="checkbox icheck">
                        <label class="">
                          <div class="icheckbox_square-blue" style="position: relative;">
                            {!! Form::checkbox('juzgado', null, null) !!}
                          </div> Fase III: NCPP
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-4">
                    <button class="btn btn-outline-success sm" onclick="ajaxLoad('{{url('denuncia/report')}}?type=list&search='+$('input#search').val()+'&tblinstancia_id='+$('#tblinstancia_id').val()+'&tdias='+$('#tdias').val()+'&tblcomisaria_id='+$('#tblcomisaria_id').val()+'&anio='+$('#anio').val()+'&mes='+$('#mes').val()+'&formalizacion='+$('input[name=formalizacion]:checked').length+'&audiencia='+$('input[name=audiencia]:checked').length+'&remision='+$('input[name=remision]:checked').length+'&denuncia='+$('input[name=denuncia]:checked').length+'&juzgado='+$('input[name=juzgado]:checked').length+'&victima='+$('input[name=victima]:checked').length+'&agresor='+$('input[name=agresor]:checked').length+(($('input[name=intfech]:checked').length)? '&fecha1='+$('#dateRange').val().split(' - ')[0].split('/')[2]+'-'+$('#dateRange').val().split(' - ')[0].split('/')[1]+'-'+$('#dateRange').val().split(' - ')[0].split('/')[0]+'&fecha2='+$('#dateRange').val().split(' - ')[1].split('/')[2]+'-'+$('#dateRange').val().split(' - ')[1].split('/')[1]+'-'+$('#dateRange').val().split(' - ')[1].split('/')[0] : '' ))" type="button">Consultar</button>
                    <button class="btn btn-outline-danger sm" type="button" onclick="ajaxLoadPDF('{{url('denuncia/report')}}?type=report&search='+$('input#search').val()+'&tblinstancia_id='+$('#tblinstancia_id').val()+'&tblcomisaria_id='+$('#tblcomisaria_id').val()+'&anio='+$('#anio').val()+'&mes='+$('#mes').val()+'&formalizacion='+$('input[name=formalizacion]:checked').length+'&audiencia='+$('input[name=audiencia]:checked').length+'&remision='+$('input[name=remision]:checked').length+'&denuncia='+$('input[name=denuncia]:checked').length+'&juzgado='+$('input[name=juzgado]:checked').length+'&victima='+$('input[name=victima]:checked').length+'&agresor='+$('input[name=agresor]:checked').length+(($('input[name=intfech]:checked').length)? '&fecha1='+$('#dateRange').val().split(' - ')[0].split('/')[2]+'-'+$('#dateRange').val().split(' - ')[0].split('/')[1]+'-'+$('#dateRange').val().split(' - ')[0].split('/')[0]+'&fecha2='+$('#dateRange').val().split(' - ')[1].split('/')[2]+'-'+$('#dateRange').val().split(' - ')[1].split('/')[1]+'-'+$('#dateRange').val().split(' - ')[1].split('/')[0] : '' ))">Generar Reporte</button>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="row">
                    {{ Form::label('tblcomisaria_id', 'Institución:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                    <div class="col-sm-8">
                      {{ Form::select('tblcomisaria_id', $comisarias, null, array('class'=>'form-control input-sm'.($errors->has('tblcomisaria_id')?" is-invalid":""), 'placeholder'=>'Seleccione una Institución', 'style'=>'width: 100%')) }}
                      <span id="error-tblcomisaria_id" class="invalid-feedback"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group has-feedback ">
                  <div class="row">
                    <label for="oficio" class="col-sm-4 control-label" style="line-height:30px">Expediente:</label>
                    <div class="col-sm-8">
                      <input class="form-control input-sm" autofocus="autofocus" id="search" placeholder="Buscar..." name="search" type="text"/>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-4 control-label" style="vertical-align: middle; line-height: 34px; margin: 0px;">Intervalo de fechas: </label>
                    <div class="col-md-8">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <div class="checkbox icheck icheck-sm">
                            <label class="">
                              <div class="icheckbox_square-blue" style="position: relative;">
                                {!! Form::checkbox('intfech', null, null) !!}
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
                    <label for="tdias" class="col-sm-4 control-label" style="line-height:30px">Total de dias, menor a:</label>
                    <div class="col-sm-8">
                      <input class="form-control input-sm" autofocus="autofocus" id="tdias" placeholder="0" name="tdias" type="number" min="0" max="100" />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    {{ Form::label('reincidente', 'Participantes reincidentes:', ['class' => 'col-sm-4 control-label', 'style' => 'padding-top: 10px;']) }}
                    <div class="col-sm-8">
                      <div class="checkbox icheck">
                        <label class="">
                          <div class="icheckbox_square-blue" style="position: relative;">
                            {!! Form::checkbox('victima', null, null) !!}
                          </div> Víctimas
                        </label>
                      </div>
                      <div class="checkbox icheck">
                        <label class="">
                          <div class="icheckbox_square-blue" style="position: relative;">
                            {!! Form::checkbox('agresor', null, null) !!}
                          </div> Agresores
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><br>
            <div id="reportAjax">
              {{-- @include('denuncia.denuncia.report.ajax')   --}}
            </div>
            {{-- Container Graph --}}
            {{-- {{ $chart->id }}
            <div id="container">
              {!! $chart->container() !!}
            </div> --}}
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
  <script src="{{ asset('assests/js/denuncia/denuncia/report.js') }}"></script>
  <script type="text/javascript">
    $('#tblcomisaria_id').select2();
    $('#tblinstancia_id').select2();
    $("input[name='intfech'],input[name='formalizacion'],input[name='audiencia'],input[name='remision'],input[name='denuncia'],input[name='juzgado'],input[name='victima'],input[name='agresor']").iCheck({ 
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' 
    });
    $('#dateRange').daterangepicker({
        locale: {
            'format': 'DD/MM/YYYY',
            'separator': ' - ',
            'applyLabel': 'Aplicar',
            'cancelLabel': 'Cancelar',
            'fromLabel': 'From',
            'toLabel': 'To',
            'customRangeLabel': 'Custom',
            'daysOfWeek': [
                'Do',
                'Lu',
                'Ma',
                'Mi',
                'Ju',
                'Vi',
                'Sa'
            ],
            'monthNames': [
                'Enero',
                'Febrero',
                'Marzo',
                'Abril',
                'Mayo',
                'Junio',
                'Julio',
                'Agosto',
                'Setiembre',
                'Octubre',
                'Noviembre',
                'Diciembre'
            ],
            'firstDay': 1
        }
    });
  </script>

  {{-- {!! $chart->script() !!} --}}

@endsection
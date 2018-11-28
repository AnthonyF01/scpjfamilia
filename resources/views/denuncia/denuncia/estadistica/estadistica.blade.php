@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Denuncias
@endsection

@section('contentheader_title')
    Denuncias
@endsection

@section('contentheader_subtitle')
    Estadisticas
@endsection

@section('estadistica')
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

    /* color */
    .color_bl {
      color: #fff;
    }

    .color_bk {
      color: #000;
    }

    .color_rd {
      color: rgb(203, 0, 0);
    }

    .red {
      background-color: rgb(203, 0, 0) !important;
    }

    .green {
      background-color: rgb(0,100,40);
    }

    .pink {
      background-color: rgb(255,51,153);
    }

    .blue {
      background-color: rgb(37,89,151);
    }

    .black {
      background-color: rgb(0, 0, 0);
    }

    .blank {
      background-color: #fff;
    }

    .circle {
      margin: 0 auto 0 auto;
      font-size: 40px;
      font-weight: bold;
      width: 240px;
      height: 240px;
      line-height: 240px;
      vertical-align: middle;
      border-radius: 170px;
      box-shadow:4px 0 10px black;
    }

    .adjust {
      font-size: 25px;
      width: 180px;
      height: 180px;
      line-height: 180px;
    }

    .center {
      text-align: center;
    }

    .tape{
      margin: 40px 0px;
      line-height: 40px;
      background-color: #555;
      color: #fff;
      text-align: center;
    }

    .col-sm-1_5 {
      width: 12.5%;
      float: left;
      position: relative;
      min-height: 1px;
      padding-right: 15px;
      padding-left: 15px;
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
              <div class="col-md-6"><i class="fa fa-list-ul"></i> Estadísticas</div>
            </div>
          </div> 
          <div class="box_plus-body" style="background-color: #fff;">
            <form action="estadistica" id="frmestadistica" method="GET">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="row">
                      {{ Form::label('tblinstancia_id', 'Juzgado:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                      <div class="col-sm-8">
                        {{ Form::select('tblinstancia_id', $instancias, ( (isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id'])) ? $request['tblinstancia_id'] : null ), array('class'=>'form-control input-sm'.($errors->has('tblinstancia_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Juzgado', 'style'=>'width: 100%')) }}
                        <span id="error-tblinstancia_id" class="invalid-feedback"></span>
                      </div>
                    </div>
                  </div>
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
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="row">
                      {{ Form::label('tblcomisaria_id', 'Institución:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                      <div class="col-sm-8">
                        {{ Form::select('tblcomisaria_id', $comisarias, ( (isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id'])) ? $request['tblcomisaria_id'] : null ), array('class'=>'form-control input-sm'.($errors->has('tblcomisaria_id')?" is-invalid":""), 'placeholder'=>'Seleccione una Institución', 'style'=>'width: 100%')) }}
                        <span id="error-tblcomisaria_id" class="invalid-feedback"></span>
                      </div>
                    </div>
                  </div>
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
              </div>
              <div class="form-group">
                <div class="row">
                  {{ Form::label('pendiente', 'Gráficos Estadísticos:', ['class' => 'col-sm-2 control-label', 'style' => 'padding-top: 10px;']) }}
                  <div class="col-sm-10">
                    <div class="checkbox icheck">
                      <label class="">
                        <div class="icheckbox_square-blue" style="position: relative;">
                          {!! Form::checkbox('graph1', null, null, (isset($request['graph1']) && !empty($request['graph1'])) ? ['class'=>'chkCharts', 'checked'=>'checked'] : ['class'=>'chkCharts'] ) !!}
                        </div> 1. Consolidado de atención de víctimas y agresores en las denuncias de Violencia Ley Nº 30364
                      </label>
                    </div>
                    <div class="checkbox icheck">
                      <label class="">
                        <div class="icheckbox_square-blue" style="position: relative;">
                          {!! Form::checkbox('graph2', null, null, (isset($request['graph2']) && !empty($request['graph2'])) ? ['class'=>'chkCharts', 'checked'=>'checked'] : ['class'=>'chkCharts']) !!}
                        </div> 2. Consolidado de atención y duración del trámite de las denuncias de Violencia Ley Nº 30364
                      </label>
                    </div>
                    <div class="checkbox icheck">
                      <label class="">
                        <div class="icheckbox_square-blue" style="position: relative;">
                          {!! Form::checkbox('graph3', null, null, (isset($request['graph3']) && !empty($request['graph3'])) ? ['class'=>'chkCharts', 'checked'=>'checked'] : ['class'=>'chkCharts']) !!}
                        </div> 3. Consolidado anual de focalización de víctimas y agresores de las denuncias de violencia familiar según Ley Nº 30364
                      </label>
                    </div>
                    <div class="checkbox icheck">
                      <label class="">
                        <div class="icheckbox_square-blue" style="position: relative;">
                          {!! Form::checkbox('graph4', null, null, (isset($request['graph4']) && !empty($request['graph4'])) ? ['class'=>'chkCharts', 'checked'=>'checked'] : ['class'=>'chkCharts']) !!}
                        </div> 4. Consolidado anual de ingresos, tiempos y carga procesal de las denuncias de violencia familiar en aplicación de la Ley Nº 30364
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                  <button type="submit" class="btn btn-outline-success">Consultar</button>
                  {{-- <button class="btn btn-outline-danger sm" type="button" onclick="ajaxLoadPDF('{{url('denuncia/estadistica')}}?type=estadistica&search='+$('input#search').val()+'&tblinstancia_id='+$('#tblinstancia_id').val()+'&tblcomisaria_id='+$('#tblcomisaria_id').val()+'&anio='+$('#anio').val()+'&mes='+$('#mes').val()+'&graph1='+$('input[name=graph1]:checked').length+'&graph2='+$('input[name=graph2]:checked').length+'&graph3='+$('input[name=graph3]:checked').length+'&graph4='+$('input[name=graph4]:checked').length)">Generar Reporte</button> --}}
                  <button class="btn btn-outline-danger sm" type="button" onclick="loadPdf( ($('input[name=graph1]:checked').length) ? 1 : ( ($('input[name=graph2]:checked').length) ? 2 : ( ($('input[name=graph3]:checked').length) ? 3 : ( ($('input[name=graph4]:checked').length) ? 4 : 0 ) ) ) )">Generar Reporte</button>
                </div>
              </div>
            </form>
            <br>
            <div id="estadisticaAjax">
              {{-- @if (isset($request['anio']) && !empty($request['anio']))
                {{ $request['anio'] }}
              @endif --}}
              {{-- @include('denuncia.denuncia.report.ajax')   --}}
            </div>

            {{-- Container Graph --}}
            <div id="container" style="width: 1057px; max-width: 1057px; margin: 0 auto;">
              @if (isset($graphGenerated) && !empty($graphGenerated))
                @if ($graphGenerated == '1' || $graphGenerated == '3')
                  <h3 class="tape red">VICTIMAS</h3>
                  <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                      @if (isset($vDTotal))
                        <h3 class="center" style="margin-bottom: 16px;">Victimas denunciantes</h3>
                        <div class="circle center red color_bl">{{ $vDTotal }}</div>
                        {{-- {{ "Victimas denunciantes: ".$vDTotal }} --}}
                      @endif
                    </div>
                    <div class="col-sm-4">
                      @if (isset($hHTotal))
                        <h3 class="center" style="margin-bottom: 16px;">Hijos de victimas</h3>
                        <div class="circle center red color_bl">{{ $hHTotal }}</div>
                        {{-- {{ "Hijos de victimas: ".$hHTotal }} --}}
                      @endif
                    </div>
                    <div class="col-sm-2"></div>
                  </div>  
                  <div class="row">
                    <div class="col-sm-6">
                      @if (isset($chartCV) && !empty($chartCV))
                        <h3 class="center" style="z-index: 1;position: absolute;top: 0px;width: 94%;">Características de las Víctimas</h3>
                        <div style="margin-top: 10px;"></div>
                        {!! $chartCV->container() !!}
                        {!! $chartCV->script() !!}
                        {{-- {{ $chartCV->id }} --}}
                      @endif
                    </div>
                    <div class="col-sm-6">
                      @if (isset($chartPV) && !empty($chartPV))
                        <h3 class="center" style="z-index: 1;position: absolute;top: 0px;width: 94%;">Distribución de edades de las Víctimas</h3>
                        <div style="margin-top: 10px;"></div>
                        {!! $chartPV->container() !!}
                        {!! $chartPV->script() !!}
                        {{-- {{ $chartPV->id }} --}}
                      @endif
                    </div>
                  </div>
                  <h3 class="tape">AGRESORES</h3>
                  <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                      @if (isset($pATotal))
                        <h3 class="center" style="margin-bottom: 16px;">Presuntos agresores</h3>
                        <div class="circle center black color_bl">{{ $pATotal }}</div>
                        {{-- {{ "Presuntos agresores: ".$pATotal }} --}}
                      @endif
                    </div>
                    <div class="col-sm-4">
                      @if (isset($chartSA) && !empty($chartSA))
                        <h3 class="center" style="z-index: 1;position: absolute;top: 0px;width: 94%;">Sexo de los agresores</h3>
                        <div style="margin-top: 10px;"></div>
                        {!! $chartSA->container() !!}
                        {!! $chartSA->script() !!}
                        {{-- {{ $chartSA->id }} --}}
                      @endif
                    </div>
                    <div class="col-sm-2"></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-1_5"></div>
                    <div class="col-sm-9">
                      @if (isset($chartPPA) && !empty($chartPPA))
                        <h3 class="center" style="z-index: 1;position: absolute;top: 0px;width: 94%;">Parentesco de los presuntos agresores</h3>
                        <div style="margin-top: 40px;"></div>
                        {!! $chartPPA->container() !!}
                        {!! $chartPPA->script() !!}
                        {{-- {{ $chartPPA->id }} --}}
                      @endif
                      {{-- {{ (isset($idChartArr) && !empty($idChartArr)) ? $idChartArr : '' }} --}}
                    </div>
                  </div>
                @endif
                @if ($graphGenerated == '2')
                  <h3 class="tape">Tiempo de Tramite</h3>
                  <div class="row">
                    <div class="col-sm-3">
                      @if (isset($PNPTotal))
                        <h4 class="center">PNP</h4>
                        <div class="circle adjust center green color_bl">{{ $PNPTotal }}</div>
                        {{-- {{ "PNP: ".$PNPTotal }} --}}
                      @endif
                    </div>
                    <div class="col-sm-3">
                      @if (isset($MVFTotal))
                        <h4 class="center">Módulo VF</h4>
                        <div class="circle adjust center pink color_bl">{{ $MVFTotal }}</div>
                        {{-- {{ "Modulo VF: ".$MVFTotal }} --}}
                      @endif
                    </div>
                    <div class="col-sm-3">
                      @if (isset($DRTotal))
                        <h4 class="center">Duración</h4>
                        <div class="circle adjust center blue color_bl">{{ $DRTotal }}</div>
                        {{-- {{ "Duracion: ".$DRTotal }} --}}
                      @endif
                    </div>
                    <div class="col-sm-3">
                      @if (isset($REMTotal))
                        <h4 class="center">Remisión</h4>
                        <div class="circle adjust center blue color_bl">{{ $REMTotal }}</div>
                        {{-- {{ "Remision: ".$REMTotal }} --}}
                      @endif
                    </div>
                  </div>
                  <h3 class="tape">Carga laboral</h3>
                  <div class="row">
                    <div class="col-sm-4">
                      @if (isset($ApTotal))
                        <h4 class="center">Atención Psicológica</h4>
                        <div class="circle center red color_bl">{{ $ApTotal }}</div>
                        {{-- {{ "Atencion Psicologica: ".$ApTotal }} --}}
                      @endif
                    </div>
                    <div class="col-sm-4">
                      @if (isset($AlTotal))
                        <h4 class="center">Asistencia legal</h4>
                        <div class="circle center red color_bl">{{ $AlTotal }}</div>
                        {{-- {{ "Asistencia legal: ".$AlTotal }} --}}
                      @endif
                    </div>
                    <div class="col-sm-4">
                      @if (isset($DPTotal))
                        <h4 class="center">Denuncia Policial</h4>
                        <div class="circle center green color_bl">{{ $DPTotal }}</div>
                        {{-- {{ "Denuncia Policial: ".$DPTotal }} --}}
                      @endif
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      @if (isset($chartCDN) && !empty($chartCDN))
                        <h4 class="center" style="z-index: 1;position: absolute;top: 0px;width: 100%;">Calificación Denuncia</h4>
                        <div style="margin-top: 10px;"></div>
                        {!! $chartCDN->container() !!}
                        {!! $chartCDN->script() !!}
                        {{-- {{ $chartCDN->id }} --}}
                      @endif
                    </div>
                    <div class="col-sm-4">
                      @if (isset($AJTotal))
                        <h4 class="center">Audiencias Judiciales</h4>
                        <div class="circle center green color_bl">{{ $AJTotal }}</div>
                        {{-- {{ "Audiencias Judiciales: ".$AJTotal }} --}}
                      @endif
                    </div>
                    <div class="col-sm-4">
                      @if (isset($chartVAR) && !empty($chartVAR))
                        <h4 class="center" style="z-index: 1;position: absolute;top: 0px;width: 100%;">A-V reincidentes</h4>
                        <div style="margin-top: 10px;"></div>
                        {!! $chartVAR->container() !!}
                        {!! $chartVAR->script() !!}
                        {{-- {{ $chartVAR->id }} --}}
                      @endif
                    </div>
                  </div>
                @endif
                @if ($graphGenerated == '4')
                  <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                      @if (isset($chartCID) && !empty($chartCID))
                        <h3 class="center" style="z-index: 1;position: absolute;top: 0px;width: 100%;">Ingreso de denuncias Ley Nº 30364</h3>
                        <div style="margin-top: 40px;"></div>
                        {!! $chartCID->container() !!}
                        {!! $chartCID->script() !!}
                        {{-- {{ $chartCID->id }} --}}
                      @endif
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                      @if (isset($chartTTC) && !empty($chartTTC))
                        <h3 class="center" style="z-index: 1;position: absolute;top: 0px;width: 100%;">Tiempos de trámite de denuncias Ley Nº 30364</h3>
                        <div style="margin-top: 40px;"></div>
                        <div id="ttramite" style="min-width: 100%; max-width: 100%; height: auto; margin: 0 auto;"></div>
                        {{-- {!! $chartTTC->container() !!} --}}
                        {{-- {!! $chartTTC->script() !!} --}}
                        {{-- {{ $chartTTC->id }} --}}
                      @endif
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      @if (isset($PNPTotal))
                        <h3 class="center">Policía Nacional del Peru</h3>
                        <div class="circle center green color_bl">{{ $PNPTotal }}</div>
                        {{-- {{ "PNP: ".$PNPTotal }} --}}
                      @endif
                    </div>
                    <div class="col-sm-4">
                      @if (isset($MVFTotal))
                        <h3 class="center">Modulo Violencia Familiar</h3>
                        <div class="circle center pink color_bl">{{ $MVFTotal }}</div>
                        {{-- {{ "Modulo VF: ".$MVFTotal }} --}}
                      @endif
                    </div>
                    <div class="col-sm-4">
                      @if (isset($PSCEMTotal))
                        <h3 class="center">Psicologia-CEM</h3>
                        <div class="circle center red color_bl">{{ $PSCEMTotal }}</div>
                        {{-- {{ "Psicologia-CEM: ".$PSCEMTotal }} --}}
                      @endif
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      @if (isset($ALCEMTotal))
                        <h3 class="center">Asesoria-CEM</h3>
                        <div class="circle center red color_bl">{{ $ALCEMTotal }}</div>
                        {{-- {{ "Asesoria-CEM: ".$ALCEMTotal }} --}}
                      @endif
                    </div>
                    <div class="col-sm-4">
                      @if (isset($MINTotal))
                        <h3 class="center">Ministerio Público</h3>
                        <div class="circle center red color_bl">{{ $MINTotal }}</div>
                        {{-- {{ "Ministerio: ".$MINTotal }} --}}
                      @endif
                    </div>
                    <div class="col-sm-4">
                    </div>
                  </div>
                @endif
              @else
                {{-- <div class="row">
                  <div class="col-sm-8">
                    @if (isset($chart) && !empty($chart))
                      {!! $chart->container() !!}
                      {!! $chart->script() !!}
                    @endif
                  </div>
                </div> --}}
              @endif
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
  <script src="{{ asset('assests/js/denuncia/denuncia/estadistica.js') }}"></script>
  <script type="text/javascript">
    $('#tblcomisaria_id').select2();
    $('#tblinstancia_id').select2();
    $("input[name='graph1'],input[name='graph2'],input[name='graph3'],input[name='graph4']").iCheck({ 
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' 
    });
    // seleccionar solo un checkbox
    $('input.chkCharts').on('ifChecked', function() {
      console.log("checked");
      $('input.chkCharts').not(this).iCheck('uncheck');
    });

  </script>

  <script type="text/javascript">
    $("#frmestadistica").on('submit',function (e) {
      debugger
      e.preventDefault();
      if ($('input[name=graph1]:checked').length || $('input[name=graph2]:checked').length || $('input[name=graph3]:checked').length || $('input[name=graph4]:checked').length) {
        if ($("#anio").val()=='') {
          alert("Debe seleccionar el Año como mínimo.");
          return false;
        }
        if ($('input[name=graph1]:checked').length) {
          if ($("#mes").val()=='0') {
            alert("Debe seleccionar el Mes.");
            return false;
          }
          event.currentTarget.submit();
        }
        if ($('input[name=graph2]:checked').length) {
          if ($("#mes").val()=='0') {
            alert("Debe seleccionar el Mes.");
            return false;
          }
          event.currentTarget.submit();
        }
        if ($('input[name=graph3]:checked').length) {
          if ($("#mes").val()!='0') {
            alert("La selección de Mes no corresponde en la generación de gráficos anuales.");
            return false;
          }
          event.currentTarget.submit();
        }
        if ($('input[name=graph4]:checked').length) {
          if ($("#mes").val()!='0') {
            alert("La selección de Mes no corresponde en la generación de gráficos anuales.");
            return false;
          }
          event.currentTarget.submit();
        }

      }else{
        alert("Debe seleccionar un Gráfico Estadístico.")
      }
    })
  </script>

  <script type="text/javascript">
      debugger
      var ttr = '{{ (isset($ttramite) && !empty($ttramite)) ? $ttramite : '' }}';
      var ttrarr = ttr.split(',&quot;b&quot;:');
      ttrarr[0] = ttrarr[0].replace('{&quot;a&quot;:', '');
      ttrarr[0] = ttrarr[0].replace('[', '');
      ttrarr[0] = ttrarr[0].replace(']', '');
      ttrarr[1] = ttrarr[1].replace('}', '');
      ttrarr[1] = ttrarr[1].replace('[', '');
      ttrarr[1] = ttrarr[1].replace(']', '');
      var ttr1 = ttrarr[0].split(',');
      var ttr2 = ttrarr[1].split(',');
      for(i=0;i<ttr1.length;i++) { if(ttr1[i]=='null'){ ttr1[i] = null; }else{ ttr1[i] = parseFloat(ttr1[i]); } }
      for(i=0;i<ttr2.length;i++) { if(ttr2[i]=='null'){ ttr2[i] = null; }else{ ttr2[i] = parseFloat(ttr2[i]); } }

      ttramite = new Highcharts.Chart({
          chart: {
              renderTo: 'ttramite',
              // backgroundColor: {
              //     linearGradient: [0, 0, 500, 500],
              //     stops: [
              //         [0, 'rgb(255, 255, 255)'],
              //         [1, '#bbb']
              //     ]
              // },
              type: 'column'
          },

          credits: {
              enabled: false
          },

          legend: {
              align: 'center',
              verticalAlign: 'top',
              // layout: 'vertical',
          },

          title: {
              text: null
          },

          xAxis: {
              // categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
              categories: ['ENE', 'FEB', 'MAR', 'ABR', 'MAY', 'JUN', 'JUL', 'AGO', 'SEP', 'OCT', 'NOV', 'DIC'],
              lineColor: 'transparent',
              tickColor: 'transparent',
              labels : {
                style : {
                  color : '#000',
                  fontWeight : 'bold',
                  fontSize : '15px',
                  textTransform : 'uppercase',
                }
              }
          },

          yAxis: {
              visible: false,
              allowDecimals: false,
              min: 0,
              title: {
                  text: 'Number of fruits'
              }
          },

          tooltip: {
              formatter: function () {
                  return '<b>' + this.x + '</b><br/>' +
                      this.series.name + ': ' + this.y + '<br/>' +
                      'Total: ' + this.point.stackTotal;
              }
          },

          plotOptions: {
              column: {
                  stacking: 'normal'
              },
              series: {
                pointWidth: 45,
                borderWidth: 0,
                dataLabels: {
                  allowOverlap: true,
                  enabled: true,
                  style: {
                    textOutline: false,
                    fontWeight: 'bold',
                    fontSize: '14px',
                    color: '#fff',
                    textTransform: 'uppercase',
                  }
                }
              }
          },

          series: [{
              name: 'MVF',
              data: ttr2,
              // data: [null,null,null,null,16.25, 8, 6, 7.25, 9,null,null,null],
              color: 'rgb(255, 51, 153)',
              /* stack: 'male' */
          }, {
              name: 'PNP',
              // data: [null,null,null,null,14.25, 12, 16, 15.75, 15,null,null,null],
              data: ttr1,
              color: 'rgb(0, 177, 71)',
              /* stack: 'male' */
          }/*, {
              name: 'Jane',
              data: [2, 5, 6, 2, 1],
              stack: 'female'
          }, {
              name: 'Janet',
              data: [3, 0, 4, 4, 3],
              stack: 'female'
          }*/]
      });
  </script>

  <script type="text/javascript">

    // get data without graph
    if ($('input[name=graph1]:checked').length) {
        var hHTotal = '{{ ( isset($hHTotal) && !empty($hHTotal)) ? $hHTotal : 0 }}';
        var vDTotal = '{{ ( isset($vDTotal) && !empty($vDTotal)) ? $vDTotal : 0 }}';
        var pATotal = '{{ ( isset($pATotal) && !empty($pATotal)) ? $pATotal : 0 }}';
    }
    if ($('input[name=graph2]:checked').length) {
        var ApTotal = '{{ ( isset($ApTotal) && !empty($ApTotal)) ? $ApTotal : 0 }}';
        var AlTotal = '{{ ( isset($AlTotal) && !empty($AlTotal)) ? $AlTotal : 0 }}';
        var DPTotal = '{{ ( isset($DPTotal) && !empty($DPTotal)) ? $DPTotal : 0 }}';
        var AJTotal = '{{ ( isset($AJTotal) && !empty($AJTotal)) ? $AJTotal : 0 }}';
        var PNPTotal = '{{ ( isset($PNPTotal) && !empty($PNPTotal)) ? $PNPTotal : 0 }}';
        var MVFTotal = '{{ ( isset($MVFTotal) && !empty($MVFTotal)) ? $MVFTotal : 0 }}';
        var DRTotal = '{{ ( isset($DRTotal) && !empty($DRTotal)) ? $DRTotal : 0 }}';
        var REMTotal = '{{ ( isset($REMTotal) && !empty($REMTotal)) ? $REMTotal : 0 }}';
    }
    if ($('input[name=graph3]:checked').length) {
        var hHTotal = '{{ ( isset($hHTotal) && !empty($hHTotal)) ? $hHTotal : 0 }}';
        var vDTotal = '{{ ( isset($vDTotal) && !empty($vDTotal)) ? $vDTotal : 0 }}';
        var pATotal = '{{ ( isset($pATotal) && !empty($pATotal)) ? $pATotal : 0 }}';
    }
    if ($('input[name=graph4]:checked').length) {
        var PNPTotal = '{{ ( isset($PNPTotal) && !empty($PNPTotal)) ? $PNPTotal : 0 }}';
        var MVFTotal = '{{ ( isset($MVFTotal) && !empty($MVFTotal)) ? $MVFTotal : 0 }}';
        var PSCEMTotal = '{{ ( isset($PSCEMTotal) && !empty($PSCEMTotal)) ? $PSCEMTotal : 0 }}';
        var ALCEMTotal = '{{ ( isset($ALCEMTotal) && !empty($ALCEMTotal)) ? $ALCEMTotal : 0 }}';
        var MINTotal = '{{ ( isset($MINTotal) && !empty($MINTotal)) ? $MINTotal : 0 }}';
    }

    window.imgArr = [];  
    function svgString2Image(svgID, width, height, format, mode) {

      format = format ? format : 'png';

      /* 1. */
      // var svgString = new XMLSerializer().serializeToString(document.getElementById(svgID));

      /* 2. */
      var svgPreString = document.querySelector('#'+svgID+' > div > svg');
        var bBox = svgPreString.getBBox();
        width = bBox.width;
        height = bBox.height;
      var svgString = new XMLSerializer().serializeToString(svgPreString);

      /* --continue */
      var svgData = 'data:image/svg+xml;base64,' + btoa(escape(svgString));

      var canvas = document.createElement('canvas');
      var context = canvas.getContext('2d');
      canvas.width = width;
      canvas.height = height;

      var DOMURL = self.URL || self.webkitURL || self;
      var image = new Image();
      var svg = new Blob([svgString], {type: "image/svg+xml;charset=utf-8"});
      var url = DOMURL.createObjectURL(svg);

      image.onload = function () { 
          context.clearRect(0, 0, width, height);
          context.drawImage(image, 0, 0, width, height);
          var pngData = canvas.toDataURL('image/' + format);
          window.imgArr.push(pngData);      
          // callback(pngData);
          DOMURL.revokeObjectURL(pngData);
      };
      // image.src = svgData;
      image.src = url;
    }

    function loadPdf(graph) {
        
        $('.loading').show();

        // comprobar si los graficos de cada grupo se generaron
        var graphGenerated = '{{ ( isset($graphGenerated) && !empty($graphGenerated) ) ? $graphGenerated : '0' }}'
        if (graphGenerated == '0') {
          $('.loading').hide();
          alert('Debe generar los gráficos antes de exportarlos.');
          return false;
        }else{
          // verificar el formulario de consulta 
          if ($('input[name=graph1]:checked').length || $('input[name=graph2]:checked').length || $('input[name=graph3]:checked').length || $('input[name=graph4]:checked').length) {
            if ($("#anio").val()=='') {
              alert("Debe seleccionar el Año como mínimo.");
              return false;
            }
            if ($('input[name=graph1]:checked').length) {
              if ($("#mes").val()=='0') {
                alert("Debe seleccionar el Mes.");
                return false;
              }
            }
            if ($('input[name=graph2]:checked').length) {
              if ($("#mes").val()=='0') {
                alert("Debe seleccionar el Mes.");
                return false;
              }
            }
            if ($('input[name=graph3]:checked').length) {
              if ($("#mes").val()!='0') {
                alert("La selección de Mes no corresponde en la generación de gráficos anuales.");
                return false;
              }
            }
            if ($('input[name=graph4]:checked').length) {
              if ($("#mes").val()!='0') {
                alert("La selección de Mes no corresponde en la generación de gráficos anuales.");
                return false;
              }
            }
          }else{
            alert("Debe seleccionar un Gráfico Estadístico.")
          }
        }

        var ids = '{{ (isset($idChartArr) && !empty($idChartArr)) ? $idChartArr : '' }}';
        if (ids == '') {
          alert("Debe generar los graficos");
          return false;
        }
        var arr = ids.split('&quot;');
        arr = jQuery.grep(arr, function(value) {
                return value != ',';
              });
        arr = jQuery.grep(arr, function(value) {
                return value != '[';
              });
        arr = jQuery.grep(arr, function(value) {
                return value != ']';
              });

        debugger

        // imgArr crece indefinidamente por eso se eliminan los items que tenga definiendose nuevamente
        window.imgArr = [];  

        function recursive(array,index) {
          setTimeout(function () {
            index++;
            if (array.length > index) {
              console.log(index);
              svgString2Image(array[index],800,600,'png');
              recursive(array,index);
            }else{
              console.log(imgArr);
              ajaxLoadPDF('{{url('denuncia/estadistica/report')}}',imgArr,'{{ csrf_token() }}');
            }
          }, 1000);
        }

        recursive(arr, -1);

        switch(graph){
          case 1:
            // arr[4]
            /*debugger
            window.imgArr = [];
            setTimeout(function () {

              // svgString2Image(arr[0],800,600,'png');

              var svgPreString = document.querySelector('#'+arr[0]+' > div > svg');
                var bBox = svgPreString.getBBox();
              var svgString = new XMLSerializer().serializeToString(svgPreString);

              var svgData = 'data:image/svg+xml;base64,' + btoa(escape(svgString));

              var canvas = document.createElement('canvas');
              var context = canvas.getContext('2d');
              canvas.width = bBox.width;
              canvas.height = bBox.height;

              var DOMURL = self.URL || self.webkitURL || self;
              var image = new Image();
              var svg = new Blob([svgString], {type: "image/svg+xml;charset=utf-8"});
              var url = DOMURL.createObjectURL(svg);

              image.onload = function () { 
                  context.clearRect(0, 0, bBox.width, bBox.height);
                  context.drawImage(image, 0, 0, bBox.width, bBox.height);
                  var pngData = canvas.toDataURL('image/png');
                  window.imgArr.push(pngData);
                  DOMURL.revokeObjectURL(pngData);
              };
              // image.src = svgData;
              image.src = url;

              console.log('1');
            }, 1000);
            setTimeout(function () {
              // svgString2Image(arr[1],800,600,'png');

              var svgPreString = document.querySelector('#'+arr[1]+' > div > svg');
                var bBox = svgPreString.getBBox();
              var svgString = new XMLSerializer().serializeToString(svgPreString);

              var svgData = 'data:image/svg+xml;base64,' + btoa(escape(svgString));

              var canvas = document.createElement('canvas');
              var context = canvas.getContext('2d');
              canvas.width = bBox.width;
              canvas.height = bBox.height;

              var DOMURL = self.URL || self.webkitURL || self;
              var image = new Image();
              var svg = new Blob([svgString], {type: "image/svg+xml;charset=utf-8"});
              var url = DOMURL.createObjectURL(svg);

              image.onload = function () { 
                  context.clearRect(0, 0, bBox.width, bBox.height);
                  context.drawImage(image, 0, 0, bBox.width, bBox.height);
                  var pngData = canvas.toDataURL('image/png');
                  window.imgArr.push(pngData);
                  DOMURL.revokeObjectURL(pngData);
              };
              // image.src = svgData;
              image.src = url;

              console.log('2');
            }, 1000);
            setTimeout(function () {
              svgString2Image(arr[2],800,600,'png');
              console.log('3');
            }, 1000);
            setTimeout(function () {
              svgString2Image(arr[3],800,600,'png');
              console.log('4');
            }, 1000);*/
            break;
          case 2:
            break;
          case 3:
            break;
          case 4:
            break;
          case 0:
            alert("Seleccione un Gráfico Estadístico");
            break;
        }

    }

  </script>

  <script type="text/javascript">
    {{-- Ajustar los graficos --}}
    var chartCDN = '{{ ( isset($chartCDN->id) && !empty($chartCDN->id) ) ? $chartCDN->id : 0 }}';
    var chartVAR = '{{ ( isset($chartVAR->id) && !empty($chartVAR->id) ) ? $chartVAR->id : 0 }}';
    $(".sidebar-toggle").on('click', function(){
      if ((typeof chartCDN !== 'undefined' && chartCDN!= '0') && (typeof chartVAR !== 'undefined' && chartVAR != '0')) {
        setTimeout(function () {
          $('#'+chartCDN).highcharts().reflow();
          $('#'+chartVAR).highcharts().reflow();
        },200);
      }
    });
  </script>

@endsection
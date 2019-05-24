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

    .orange{
      background-color: #f39c12;
    }

    .pj{
      background-color: #951307;
    }

    .suma{
      background-color: #333;
    }

    #graficoAnualDependencia svg .highcharts-axis-labels text,
    #graficoAnualMedida svg .highcharts-axis-labels text {
      font-weight: bold;
      color: #000000 !important;
      fill: #000000 !important;
    }

    .circle2 {
      margin: 0 auto 0 auto;
      font-size: 35px;
      font-weight: bold;
      width: 175px;
      height: 175px;
      line-height: 175px;
      vertical-align: middle;
      border-radius: 170px;
      box-shadow:4px 0 10px black;
    }

    .circle {
      /*margin: 0 auto 0 auto;
      font-size: 40px;
      font-weight: bold;
      width: 70px;
      height: 70px;
      line-height: 70px;
      vertical-align: middle;
      border-radius: 170px;
      box-shadow:4px 0 10px black;*/
      margin: 0 auto 0 auto;
      font-size: 40px;
      font-weight: bold;
      width: 70px;
      height: 70px;
      line-height: 70px;
      vertical-align: middle;
      border-radius: 170px;
      box-shadow: 4px 0 10px black;
    }

    .circle_1 {
      width: 100px !important;
      height: 100px !important;
      font-size: 25px;
      line-height: 100px;
    }

    .pj {
      background-color: #951307;
    }

    .orange {
      background-color: #f39c12;
    }

    .suma {
      background-color: #333;
    }

    .adjust {
      font-size: 25px !important;
      width: 70px !important;
      height: 70px !important;
      line-height: 70px !important;
    }

    .signo {
      font-size: 25px;
      /*width: 70px;*/
      height: 100px;
      line-height: 130px;
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

    table.table-cell>thead>tr>th.v-align{
      vertical-align : middle;
    }

    table.table-cell>thead>tr>th {
      background-color: #255997;
      border: 1px solid #255997;
      padding: 3px;
    }
    table.table-cell>tbody>tr>td {
      border-bottom: 0px solid #255997;
    }

    .divide{
      border-bottom: solid 1px #000000;
      background-color: #337ab7f0;
      color: #ffffff;
      padding: 4px;
    }

    .row>label{
      font-weight: bold !important;
      font-size: 11px;
    }

    label>strong{
      background-color: #f39c12;
      color: white;
      border-radius: 4px;
      padding-right: 5px;
      padding-left: 5px;
    }

    .strong{
      border-top: 1px solid #ff8f00f7;
    }

    table.table-cell>tbody>tr:nth-of-type(odd) {
      background-color: #f5f5f500;
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
                <div class="col-md-12">
                  <div class="form-group divide">
                    <strong>Fase I</strong>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6" >
                      <div class="form-group">
                        <div class="row">
                          {{ Form::label('anio', 'Año:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            {{ Form::select('anio',$anios, ( (isset($request['anio']) && !empty($request['anio'])) ? $request['anio'] : '' ), array('class'=>'form-control input-sm', 'placeholder'=>'Seleccione Año','style'=>'width: 100%')) }}
                            <span id="error-anio" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="row">
                          <label for="showing" class="col-sm-4 control-label" style="line-height:30px">Formalización Denuncia : </label>
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
                </div>

                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6" >
                      <div class="form-group">
                        <div class="row">
                          <label for="faudiencia" class="col-sm-4 control-label" style="line-height:30px">Audiencia Realizada: </label>
                          <div class="col-sm-8">
                            <select name="faudiencia" class="form-control input-sm" id="faudiencia">
                               <option value="0">Elegir Mes</option>
                               <option value="1" {{ ( (isset($request['faudiencia']) && !empty($request['faudiencia']) && $request['faudiencia'] == '1') ? 'selected="selected"' : '' ) }}>Enero</option>
                               <option value="2" {{ ( (isset($request['faudiencia']) && !empty($request['faudiencia']) && $request['faudiencia'] == '2') ? 'selected="selected"' : '' ) }}>Febrero</option>
                               <option value="3" {{ ( (isset($request['faudiencia']) && !empty($request['faudiencia']) && $request['faudiencia'] == '3') ? 'selected="selected"' : '' ) }}>Marzo</option>
                               <option value="4" {{ ( (isset($request['faudiencia']) && !empty($request['faudiencia']) && $request['faudiencia'] == '4') ? 'selected="selected"' : '' ) }}>Abril</option>
                               <option value="5" {{ ( (isset($request['faudiencia']) && !empty($request['faudiencia']) && $request['faudiencia'] == '5') ? 'selected="selected"' : '' ) }}>Mayo</option>
                               <option value="6" {{ ( (isset($request['faudiencia']) && !empty($request['faudiencia']) && $request['faudiencia'] == '6') ? 'selected="selected"' : '' ) }}>Junio</option>
                               <option value="7" {{ ( (isset($request['faudiencia']) && !empty($request['faudiencia']) && $request['faudiencia'] == '7') ? 'selected="selected"' : '' ) }}>Julio</option>
                               <option value="8" {{ ( (isset($request['faudiencia']) && !empty($request['faudiencia']) && $request['faudiencia'] == '8') ? 'selected="selected"' : '' ) }}>Agosto</option>
                               <option value="9" {{ ( (isset($request['faudiencia']) && !empty($request['faudiencia']) && $request['faudiencia'] == '9') ? 'selected="selected"' : '' ) }}>Septiembre</option>
                               <option value="10" {{ ( (isset($request['faudiencia']) && !empty($request['faudiencia']) && $request['faudiencia'] == '10') ? 'selected="selected"' : '' ) }}>Octubre</option>
                               <option value="11" {{ ( (isset($request['faudiencia']) && !empty($request['faudiencia']) && $request['faudiencia'] == '11') ? 'selected="selected"' : '' ) }}>Noviembre</option>
                               <option value="12" {{ ( (isset($request['faudiencia']) && !empty($request['faudiencia']) && $request['faudiencia'] == '12') ? 'selected="selected"' : '' ) }}>Diciembre</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6" >
                      <div class="form-group">
                        <div class="row">
                          <label for="fremision" class="col-sm-4 control-label" style="line-height:30px">Remisión: </label>
                          <div class="col-sm-8">
                            <select name="fremision" class="form-control input-sm" id="fremision">
                               <option value="0">Elegir Mes</option>
                               <option value="1" {{ ( (isset($request['fremision']) && !empty($request['fremision']) && $request['fremision'] == '1') ? 'selected="selected"' : '' ) }}>Enero</option>
                               <option value="2" {{ ( (isset($request['fremision']) && !empty($request['fremision']) && $request['fremision'] == '2') ? 'selected="selected"' : '' ) }}>Febrero</option>
                               <option value="3" {{ ( (isset($request['fremision']) && !empty($request['fremision']) && $request['fremision'] == '3') ? 'selected="selected"' : '' ) }}>Marzo</option>
                               <option value="4" {{ ( (isset($request['fremision']) && !empty($request['fremision']) && $request['fremision'] == '4') ? 'selected="selected"' : '' ) }}>Abril</option>
                               <option value="5" {{ ( (isset($request['fremision']) && !empty($request['fremision']) && $request['fremision'] == '5') ? 'selected="selected"' : '' ) }}>Mayo</option>
                               <option value="6" {{ ( (isset($request['fremision']) && !empty($request['fremision']) && $request['fremision'] == '6') ? 'selected="selected"' : '' ) }}>Junio</option>
                               <option value="7" {{ ( (isset($request['fremision']) && !empty($request['fremision']) && $request['fremision'] == '7') ? 'selected="selected"' : '' ) }}>Julio</option>
                               <option value="8" {{ ( (isset($request['fremision']) && !empty($request['fremision']) && $request['fremision'] == '8') ? 'selected="selected"' : '' ) }}>Agosto</option>
                               <option value="9" {{ ( (isset($request['fremision']) && !empty($request['fremision']) && $request['fremision'] == '9') ? 'selected="selected"' : '' ) }}>Septiembre</option>
                               <option value="10" {{ ( (isset($request['fremision']) && !empty($request['fremision']) && $request['fremision'] == '10') ? 'selected="selected"' : '' ) }}>Octubre</option>
                               <option value="11" {{ ( (isset($request['fremision']) && !empty($request['fremision']) && $request['fremision'] == '11') ? 'selected="selected"' : '' ) }}>Noviembre</option>
                               <option value="12" {{ ( (isset($request['fremision']) && !empty($request['fremision']) && $request['fremision'] == '12') ? 'selected="selected"' : '' ) }}>Diciembre</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6" >
                      <div class="form-group">
                        <div class="row">
                          {{ Form::label('tblcomisaria_id', 'Institución (Comisarías):', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            {{ Form::select('tblcomisaria_id', $comisarias, ( (isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id'])) ? $request['tblcomisaria_id'] : null ), array('class'=>'form-control input-sm'.($errors->has('tblcomisaria_id')?" is-invalid":""), 'placeholder'=>'Seleccione una Institución', 'style'=>'width: 100%')) }}
                            <span id="error-tblcomisaria_id" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6" >
                      <div class="form-group">
                        <div class="row">
                          {{ Form::label('tblinstancia_id', 'Juzgado:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            {{ Form::select('tblinstancia_id', $instancias, ( (isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id'])) ? $request['tblinstancia_id'] : null ), array('class'=>'form-control input-sm'.($errors->has('tblinstancia_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Juzgado', 'style'=>'width: 100%')) }}
                            <span id="error-tblinstancia_id" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="faseii">
                  <div class="col-md-12">
                    <div class="form-group divide">
                      <strong>Fase II</strong>
                    </div>
                  </div>
                  <div class="col-md-6" >
                    <div class="form-group">
                      <div class="row">
                        <label class="col-sm-4 control-label" style="line-height:30px">Remitodo a:</label>
                        <div class="col-md-8">
                          <select class="form-control input-sm" name="remitido" id="remitido">
                            <option value="">Elegir</option>
                            <option {{ ( (isset($request['remitido']) && !empty($request['remitido']) && $request['remitido'] == 'Ministerio Público') ? 'selected="selected"' : '' ) }} value="Ministerio Público">Ministerio Público</option>
                            <option {{ ( (isset($request['remitido']) && !empty($request['remitido']) && $request['remitido'] == 'Juzgado de Paz Letrado') ? 'selected="selected"' : '' ) }} value="Juzgado de Paz Letrado">Juzgado de Paz Letrado</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="row">
                        <label for="fremisiond" class="col-sm-4 control-label" style="line-height:30px">Mes: </label>
                        <div class="col-sm-8">
                          <select name="fremisiond" class="form-control input-sm" id="fremisiond">
                             <option value="0">Elegir Mes</option>
                             <option value="1" {{ ( (isset($request['fremisiond']) && !empty($request['fremisiond']) && $request['fremisiond'] == '1') ? 'selected="selected"' : '' ) }}>Enero</option>
                             <option value="2" {{ ( (isset($request['fremisiond']) && !empty($request['fremisiond']) && $request['fremisiond'] == '2') ? 'selected="selected"' : '' ) }}>Febrero</option>
                             <option value="3" {{ ( (isset($request['fremisiond']) && !empty($request['fremisiond']) && $request['fremisiond'] == '3') ? 'selected="selected"' : '' ) }}>Marzo</option>
                             <option value="4" {{ ( (isset($request['fremisiond']) && !empty($request['fremisiond']) && $request['fremisiond'] == '4') ? 'selected="selected"' : '' ) }}>Abril</option>
                             <option value="5" {{ ( (isset($request['fremisiond']) && !empty($request['fremisiond']) && $request['fremisiond'] == '5') ? 'selected="selected"' : '' ) }}>Mayo</option>
                             <option value="6" {{ ( (isset($request['fremisiond']) && !empty($request['fremisiond']) && $request['fremisiond'] == '6') ? 'selected="selected"' : '' ) }}>Junio</option>
                             <option value="7" {{ ( (isset($request['fremisiond']) && !empty($request['fremisiond']) && $request['fremisiond'] == '7') ? 'selected="selected"' : '' ) }}>Julio</option>
                             <option value="8" {{ ( (isset($request['fremisiond']) && !empty($request['fremisiond']) && $request['fremisiond'] == '8') ? 'selected="selected"' : '' ) }}>Agosto</option>
                             <option value="9" {{ ( (isset($request['fremisiond']) && !empty($request['fremisiond']) && $request['fremisiond'] == '9') ? 'selected="selected"' : '' ) }}>Septiembre</option>
                             <option value="10" {{ ( (isset($request['fremisiond']) && !empty($request['fremisiond']) && $request['fremisiond'] == '10') ? 'selected="selected"' : '' ) }}>Octubre</option>
                             <option value="11" {{ ( (isset($request['fremisiond']) && !empty($request['fremisiond']) && $request['fremisiond'] == '11') ? 'selected="selected"' : '' ) }}>Noviembre</option>
                             <option value="12" {{ ( (isset($request['fremisiond']) && !empty($request['fremisiond']) && $request['fremisiond'] == '12') ? 'selected="selected"' : '' ) }}>Diciembre</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group" id="show-dependenciad">
                      <div class="row">
                        {{ Form::label('dependenciad', 'J. Paz Letrado:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                        <div class="col-sm-8">
                          {{ Form::select('dependenciad', $instanciasPL, ( (isset($request['dependenciad']) && !empty($request['dependenciad'])) ? $request['dependenciad'] : null ), array('class'=>'form-control input-sm'.($errors->has('dependenciad')?" is-invalid":""), 'placeholder'=>'Seleccione un J. Paz Letrado', 'style'=>'width: 100%')) }}
                        </div>
                      </div>
                    </div>
                    <div class="form-group" id="show-dependenciad2">
                      <div class="row">
                        {{ Form::label('dependenciad', 'Ministerio Público:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                        <div class="col-sm-8">
                          {{ Form::select('dependenciad', $instanciasMIN, ( (isset($request['dependenciad']) && !empty($request['dependenciad'])) ? $request['dependenciad'] : null ), array('class'=>'form-control input-sm'.($errors->has('dependenciad')?" is-invalid":""), 'id'=>'dependenciad2','placeholder'=>'Seleccione un Ministerio', 'style'=>'width: 100%')) }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="fasseiii">
                  <div class="col-md-12">
                    <div class="form-group divide">
                      <strong>Fase III</strong>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="row">
                        <label for="fjip" class="col-sm-4 control-label" style="line-height:30px">
                          <strong class="pull-left">Etapa1: </strong>
                          <span class="pull-right">Mes: </span>
                        </label>
                        <div class="col-sm-8">
                          <select name="fjip" class="form-control input-sm" id="fjip">
                             <option value="0">Elegir Mes</option>
                             <option value="1" {{ ( (isset($request['fjip']) && !empty($request['fjip']) && $request['fjip'] == '1') ? 'selected="selected"' : '' ) }}>Enero</option>
                             <option value="2" {{ ( (isset($request['fjip']) && !empty($request['fjip']) && $request['fjip'] == '2') ? 'selected="selected"' : '' ) }}>Febrero</option>
                             <option value="3" {{ ( (isset($request['fjip']) && !empty($request['fjip']) && $request['fjip'] == '3') ? 'selected="selected"' : '' ) }}>Marzo</option>
                             <option value="4" {{ ( (isset($request['fjip']) && !empty($request['fjip']) && $request['fjip'] == '4') ? 'selected="selected"' : '' ) }}>Abril</option>
                             <option value="5" {{ ( (isset($request['fjip']) && !empty($request['fjip']) && $request['fjip'] == '5') ? 'selected="selected"' : '' ) }}>Mayo</option>
                             <option value="6" {{ ( (isset($request['fjip']) && !empty($request['fjip']) && $request['fjip'] == '6') ? 'selected="selected"' : '' ) }}>Junio</option>
                             <option value="7" {{ ( (isset($request['fjip']) && !empty($request['fjip']) && $request['fjip'] == '7') ? 'selected="selected"' : '' ) }}>Julio</option>
                             <option value="8" {{ ( (isset($request['fjip']) && !empty($request['fjip']) && $request['fjip'] == '8') ? 'selected="selected"' : '' ) }}>Agosto</option>
                             <option value="9" {{ ( (isset($request['fjip']) && !empty($request['fjip']) && $request['fjip'] == '9') ? 'selected="selected"' : '' ) }}>Septiembre</option>
                             <option value="10" {{ ( (isset($request['fjip']) && !empty($request['fjip']) && $request['fjip'] == '10') ? 'selected="selected"' : '' ) }}>Octubre</option>
                             <option value="11" {{ ( (isset($request['fjip']) && !empty($request['fjip']) && $request['fjip'] == '11') ? 'selected="selected"' : '' ) }}>Noviembre</option>
                             <option value="12" {{ ( (isset($request['fjip']) && !empty($request['fjip']) && $request['fjip'] == '12') ? 'selected="selected"' : '' ) }}>Diciembre</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <label class="col-sm-4 control-label" style="line-height:30px" for="jip">
                          <span class="pull-right" title="Juzgado de Investigación Preparatoria">J. I. Preparatoria: </span>
                        </label>
                        <div class="col-sm-8">
                          {{ Form::select('jip', $instanciasJIP, ( (isset($request['jip']) && !empty($request['jip'])) ? $request['jip'] : null ), array('class'=>'form-control input-sm'.($errors->has('jip')?" is-invalid":""),'id'=>'jip' ,'placeholder'=>'Seleccione un J. Investigación Preparatoria', 'style'=>'width: 100%')) }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="row">
                        <label for="fremisionj" class="col-sm-4 control-label" style="line-height:30px">
                          <strong class="pull-left">Etapa2: </strong>
                          <span class="pull-right">Mes: </span>
                        </label>
                        <div class="col-sm-8">
                          <select name="fremisionj" class="form-control input-sm" id="fremisionj">
                             <option value="0">Elegir Mes</option>
                             <option value="1" {{ ( (isset($request['fremisionj']) && !empty($request['fremisionj']) && $request['fremisionj'] == '1') ? 'selected="selected"' : '' ) }}>Enero</option>
                             <option value="2" {{ ( (isset($request['fremisionj']) && !empty($request['fremisionj']) && $request['fremisionj'] == '2') ? 'selected="selected"' : '' ) }}>Febrero</option>
                             <option value="3" {{ ( (isset($request['fremisionj']) && !empty($request['fremisionj']) && $request['fremisionj'] == '3') ? 'selected="selected"' : '' ) }}>Marzo</option>
                             <option value="4" {{ ( (isset($request['fremisionj']) && !empty($request['fremisionj']) && $request['fremisionj'] == '4') ? 'selected="selected"' : '' ) }}>Abril</option>
                             <option value="5" {{ ( (isset($request['fremisionj']) && !empty($request['fremisionj']) && $request['fremisionj'] == '5') ? 'selected="selected"' : '' ) }}>Mayo</option>
                             <option value="6" {{ ( (isset($request['fremisionj']) && !empty($request['fremisionj']) && $request['fremisionj'] == '6') ? 'selected="selected"' : '' ) }}>Junio</option>
                             <option value="7" {{ ( (isset($request['fremisionj']) && !empty($request['fremisionj']) && $request['fremisionj'] == '7') ? 'selected="selected"' : '' ) }}>Julio</option>
                             <option value="8" {{ ( (isset($request['fremisionj']) && !empty($request['fremisionj']) && $request['fremisionj'] == '8') ? 'selected="selected"' : '' ) }}>Agosto</option>
                             <option value="9" {{ ( (isset($request['fremisionj']) && !empty($request['fremisionj']) && $request['fremisionj'] == '9') ? 'selected="selected"' : '' ) }}>Septiembre</option>
                             <option value="10" {{ ( (isset($request['fremisionj']) && !empty($request['fremisionj']) && $request['fremisionj'] == '10') ? 'selected="selected"' : '' ) }}>Octubre</option>
                             <option value="11" {{ ( (isset($request['fremisionj']) && !empty($request['fremisionj']) && $request['fremisionj'] == '11') ? 'selected="selected"' : '' ) }}>Noviembre</option>
                             <option value="12" {{ ( (isset($request['fremisionj']) && !empty($request['fremisionj']) && $request['fremisionj'] == '12') ? 'selected="selected"' : '' ) }}>Diciembre</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <label class="col-sm-4 control-label" style="line-height:30px" for="juzgamiento">
                          <span class="pull-right">Juzgamiento: </span>
                        </label>
                        <div class="col-sm-8">
                          {{ Form::select('juzgamiento', $instanciasJP, ( (isset($request['juzgamiento']) && !empty($request['juzgamiento'])) ? $request['juzgamiento'] : null ), array('class'=>'form-control input-sm'.($errors->has('juzgamiento')?" is-invalid":""),'id'=>'juzgamiento' ,'placeholder'=>'Seleccione Juzgamiento', 'style'=>'width: 100%')) }}
                        </div>
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
                        </div> 1. Consolidado mensual de atención de víctimas y agresores en las denuncias de Violencia Ley Nº 30364
                      </label>
                    </div>
                    <div class="checkbox icheck">
                      <label class="">
                        <div class="icheckbox_square-blue" style="position: relative;">
                          {!! Form::checkbox('graph2', null, null, (isset($request['graph2']) && !empty($request['graph2'])) ? ['class'=>'chkCharts', 'checked'=>'checked'] : ['class'=>'chkCharts']) !!}
                        </div> 2. Consolidado mensual de atención y duración del trámite de las denuncias de Violencia Ley Nº 30364
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
            {{-- Container Graph --}}
            <div id="container" style="max-width: 1312px; margin: 0 auto;">
              @if (isset($graphGenerated) && !empty($graphGenerated))
                @if ($graphGenerated == '1' || $graphGenerated == '3')
                  <h3 class="tape red">VICTIMAS</h3>
                  <div class="row">
                    <div class="col-sm-9">
                      <div class="row">
                        <div class="col-sm-6">
                          @if (isset($chartCV) && !empty($chartCV))
                            <h4 class="center" style="z-index: 1;position: absolute;top: 0px;width: 94%;">
                              <strong>Características de las Víctimas</strong>
                            </h4>
                            <div style="margin-top: 50px;"></div>
                            {!! $chartCV->container() !!}
                            {!! $chartCV->script() !!}
                          @endif
                        </div>
                        <div class="col-sm-6">
                          @if (isset($chartPV) && !empty($chartPV))
                            <h4 class="center" style="z-index: 1;position: absolute;top: 0px;width: 94%;">
                              <strong>Distribución de edades de las Víctimas</strong>
                            </h4>
                            <div style="margin-top: 50px;"></div>
                            {!! $chartPV->container() !!}
                            {!! $chartPV->script() !!}
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="row">
                        @if (isset($vDTotal))
                          <h4 class="center" style="margin-bottom: 16px;">
                            <strong>Víctimas denunciantes</strong>
                          </h4>
                          <div class="circle circle_1 center red color_bl">{{ $vDTotal }}</div>
                        @endif
                      </div> <br><br>
                      <div class="row">
                        @if (isset($hHTotal))
                          <h4 class="center" style="margin-bottom: 16px;">
                            <strong>Hijos de las víctimas</strong>
                          </h4>
                          <div class="circle circle_1 center red color_bl">{{ $hHTotal }}</div>
                        @endif
                      </div>
                    </div>
                  </div>

                  <h3 class="tape">AGRESORES</h3>
                  <div class="row">
                    <div class="col-sm-12">
                      @if (isset($chartPPA) && !empty($chartPPA))
                        <h3 class="center" style="z-index: 1;position: absolute;top: 0px;width: 94%;">Parentesco de los presuntos agresores</h3>
                        <div style="margin-top: 40px;"></div>
                        {!! $chartPPA->container() !!}
                        {!! $chartPPA->script() !!}
                      @endif
                    </div>
                    <div class="col-sm-12" style="margin-top:0px">
                      <div class="row">
                        <div class="col-sm-6">
                          @if (isset($chartSA) && !empty($chartSA))
                            <h3 class="center" style="z-index: 1;position: absolute;width: 100%;">Sexo de los agresores</h3>
                            <div style="margin-top: 30px;"></div>
                            <div>
                              {!! $chartSA->container() !!}
                              {!! $chartSA->script() !!}
                            </div>
                          @endif
                        </div>
                        <div class="col-sm-6">
                          @if (isset($pATotal))
                            <h3 class="center" style="margin-bottom: 16px;">Presuntos agresores</h3>
                            <div class="circle2 center black color_bl">{{ $pATotal }}</div>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                @endif
                @if ($graphGenerated == '2')

                  <div id="printable">
                    <h3 class="tape" style="margin-bottom:0">Tiempo de Tramite</h3>
                    <div class="table-responsive">
                      <table class="table table-cell">
                        <thead>
                          <tr>
                            <th colspan="6" rowspan="2" class="header v-align">FASE I</th>
                            <th rowspan="2" class="header v-align">FASE II</th>
                            <th colspan="2" class="header">FASE III</th>
                            <th rowspan="2" class="header v-align">Total</th>
                          </tr>
                          <tr>
                            <th class="header">Etapa 1</th>
                            <th class="header">Etapa 2</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              @if (isset($PNPTotal))
                                <h6 class="center">
                                  <strong>PNP</strong>
                                </h6>
                                <div class="circle adjust center green color_bl">{{ round($PNPTotal,1) }}</div>
                              @endif
                            </td>
                            <td>
                              <div class="signo center"><i class="fa fa-plus"></i></div>
                            </td>
                            <td>
                              @if (isset($MVFTotal))
                                <h6 class="center">
                                  <strong>Módulo VF</strong>
                                </h6>
                                <div class="circle adjust center pink color_bl">{{ round($MVFTotal,1) }}</div>
                              @endif
                            </td>
                            <td>
                              <div class="signo center"><i class="fa fa-arrow-right"></i></div>
                            </td>
                            <td>
                              @if (isset($DRTotal))
                                <h6 class="center">
                                  <strong class="strong">Duración</strong>
                                </h6>
                                <div class="circle adjust center blue color_bl">{{ round($PNPTotal,1)+round($MVFTotal,1) }}</div>
                              @endif
                            </td>
                            <td>
                              @if (isset($REMTotal))
                                <h6 class="center">
                                  <strong class="strong">Remisión</strong>
                                </h6>
                                <div class="circle adjust center pj color_bl">{{ round($REMTotal,1) }}</div>
                              @endif
                            </td>
                            <td>
                              @if (isset($FASEIItotal))
                                <h6 class="center">
                                  <strong class="strong">M. Público</strong>
                                </h6>
                                <div class="circle adjust center orange color_bl">{{ round($FASEIItotal,1) }}</div>
                              @endif
                            </td>
                            <td>
                              @if (isset($FASE31total))
                                <h6 class="center">
                                  <strong class="strong">JIP</strong>
                                </h6>
                                <div class="circle adjust center pj color_bl">{{ round($FASE31total,1) }}</div>
                              @endif
                            </td>
                            <td>
                              @if (isset($FASE32total))
                                <h6 class="center">
                                  <strong class="strong">Juzgamiento</strong>
                                </h6>
                                <div class="circle adjust center pj color_bl">{{ round($FASE32total,1) }}</div>
                              @endif
                            </td>
                            <td>
                              <h6 class="center">
                                  <strong>Suma</strong>
                              </h6>
                              <div class="circle adjust center suma color_bl">{{ round($PNPTotal,1)+round($MVFTotal,1)+round($REMTotal,1)+round($FASEIItotal,1)+round($FASE31total,1)+round($FASE32total,1) }}</div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <h3 class="tape" style="margin-bottom:0">Carga laboral</h3>
                    <div class="table-responsive">
                      <table class="table table-cell">
                        <thead>
                          <tr>
                            <th colspan="2" class="header v-align">CEM</th>
                            <th colspan="2" class="header v-align">FASE I</th>
                            <th rowspan="2" class="header v-align">FASE II</th>
                            <th colspan="2" class="header">FASE III</th>
                          </tr>
                          <tr>
                            <th class="header">Atención Psicológica</th>
                            <th class="header">Atención legal</th>
                            <th class="header">Denuncia Policial</th>
                            <th class="header">M. Familia</th>
                            <th class="header">Etapa 1</th>
                            <th class="header">Etapa 2</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              @if (isset($ApTotal))
                                <div class="circle adjust center red color_bl">{{ $ApTotal }}</div>
                              @endif
                            </td>
                            <td>
                              @if (isset($AlTotal))
                                <div class="circle adjust center red color_bl">{{  $AlTotal }}</div>
                              @endif
                            </td>
                            <td>
                              @if (isset($DPTotal))
                                <div class="circle adjust center green color_bl">{{  $DPTotal }}</div>
                              @endif
                            </td>
                            <td>
                              @if (isset($AJTotal))
                                <div class="circle adjust center pink color_bl">{{  $AJTotal }}</div>
                              @endif
                            </td>
                            <td>
                              @if (isset($F2Total))
                                <div class="circle adjust center orange color_bl">{{ $F2Total }}</div>
                              @endif
                            </td>
                            <td>
                              @if (isset($F31Total))
                                <div class="circle adjust center pj color_bl">{{ $F31Total }}</div>
                              @endif
                            </td>
                            <td>
                              @if (isset($F32Total))
                                <div class="circle adjust center pj color_bl">{{ $F32Total }}</div>
                              @endif
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <br><br>
                  <div class="panel panel-info">
                    <div class="panel-heading" align="center">
                      <span style="font-size: 16px">
                        <strong>Tipología de Procesos</strong>
                      </span>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-4" style="border-right: 1px solid #ccc">
                          @if (isset($chartV) && !empty($chartV))

                            <h4 class="center" style="z-index: 1;position: absolute;top: 0px;width: 100%;">
                              <strong>Valoración Denuncia</strong>
                            </h4>
                            <div style="margin-top: 10px;"></div>
                            {!! $chartV->container() !!}
                            {!! $chartV->script() !!}
                          @endif
                        </div>

                        <div class="col-sm-8">
                          @if (isset($chartMP) && !empty($chartMP))
                            <div id="graficoMensualMedida" style="min-width: 100%; max-width: 100%; height: auto; margin: 0 auto;">
                            </div>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>

                @endif
                @if ($graphGenerated == '4')
                  <div class="row">
                    <div class="col-sm-6">
                      @if (isset($chartCID) && !empty($chartCID))
                        <div class="panel panel-info">
                          <div class="panel-heading">
                            <span style="font-size: 14px">
                              <strong>Ingreso de denuncias Ley Nº 30364</strong>
                            </span>
                          </div>
                          <div class="panel-body">
                            {!! $chartCID->container() !!}
                            {!! $chartCID->script() !!}
                          </div>
                        </div>
                      @endif
                    </div>
                    <div class="col-sm-6">
                      @if (isset($chartTTC) && !empty($chartTTC))
                        <div class="panel panel-info">
                          <div class="panel-heading">
                            <span style="font-size: 14px">
                              <strong>Tiempos de trámite de denuncias Ley Nº 30364</strong>
                            </span>
                          </div>
                          <div class="panel-body">
                            {!! $chartTTC->container() !!}
                            {!! $chartTTC->script() !!}
                          </div>
                        </div>
                      @endif
                    </div>
                  </div>

                  <div class="panel panel-info">
                    <div class="panel-heading" align="center">
                      <span style="font-size: 16px">
                        <strong>Consolidado de tiempos de Tramite</strong>
                      </span>
                    </div>
                    <div class="panel-body">
                      <table class="table table-cell">
                        <thead>
                          <tr>
                            <th colspan="6" rowspan="2" class="header v-align">FASE I</th>
                            <th rowspan="2" class="header v-align">FASE II</th>
                            <th colspan="2" class="header">FASE III</th>
                            <th rowspan="2" class="header v-align">Total</th>
                          </tr>
                          <tr>
                            <th class="header">Etapa 1</th>
                            <th class="header">Etapa 2</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              @if (isset($PNPTotalAnual))
                                <h6 class="center">
                                  <strong>PNP</strong>
                                </h6>
                                <div class="circle adjust center green color_bl">{{ round($PNPTotalAnual,1) }}</div>
                              @endif
                            </td>
                            <td>
                              <div class="signo center"><i class="fa fa-plus"></i></div>
                            </td>
                            <td>
                              @if (isset($MVFTotalAnual))
                                <h6 class="center">
                                  <strong>Módulo VF</strong>
                                </h6>
                                <div class="circle adjust center pink color_bl">{{ round($MVFTotalAnual,1) }}</div>
                              @endif
                            </td>
                            <td>
                              <div class="signo center"><i class="fa fa-arrow-right"></i></div>
                            </td>
                            <td>
                              @if (isset($DRTotal))
                                <h6 class="center">
                                  <strong class="strong">Duración</strong>
                                </h6>
                                <div class="circle adjust center blue color_bl">{{ round($PNPTotal,1)+round($MVFTotal,1) }}</div>
                              @endif
                            </td>
                            <td>
                              @if (isset($REMTotal))
                                <h6 class="center">
                                  <strong class="strong">Remisión</strong>
                                </h6>
                                <div class="circle adjust center pj color_bl">{{ round($REMTotal,1) }}</div>
                              @endif
                            </td>
                            <td>
                              @if (isset($FASEIItotal))
                                <h6 class="center">
                                  <strong class="strong">M. Público</strong>
                                </h6>
                                <div class="circle adjust center orange color_bl">{{ round($FASEIItotal,1) }}</div>
                              @endif
                            </td>
                            <td>
                              @if (isset($FASE31total))
                                <h6 class="center">
                                  <strong class="strong">JIP</strong>
                                </h6>
                                <div class="circle adjust center pj color_bl">{{ round($FASE31total,1) }}</div>
                              @endif
                            </td>
                            <td>
                              @if (isset($FASE32total))
                                <h6 class="center">
                                  <strong class="strong">Juzgamiento</strong>
                                </h6>
                                <div class="circle adjust center pj color_bl">{{ round($FASE32total,1) }}</div>
                              @endif
                            </td>
                            <td>
                              <h6 class="center">
                                  <strong>Suma</strong>
                              </h6>
                              <div class="circle adjust center suma color_bl">{{ round($PNPTotal,1)+round($MVFTotal,1)+round($REMTotal,1)+round($FASEIItotal,1)+round($FASE31total,1)+round($FASE32total,1) }}</div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="panel panel-info">
                    <div class="panel-heading" align="center">
                      <span style="font-size: 16px">
                        <strong>Consolidado de producción - Ley Nº 30364</strong>
                      </span>
                    </div>
                    <div class="panel-body">
                      <div class="table-responsive">
                        <table class="table table-cell">
                          <thead>
                            <tr>
                              <th colspan="2" class="header v-align">CEM</th>
                              <th colspan="2" class="header v-align">FASE I</th>
                              <th rowspan="2" class="header v-align">FASE II</th>
                              <th colspan="2" class="header">FASE III</th>
                            </tr>
                            <tr>
                              <th class="header">Atención Psicológica</th>
                              <th class="header">Atención legal</th>
                              <th class="header">Denuncia Policial</th>
                              <th class="header">M. Familia</th>
                              <th class="header">Etapa 1</th>
                              <th class="header">Etapa 2</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                @if (isset($ApTotal))
                                  <div class="circle adjust center red color_bl">{{ $ApTotal }}</div>
                                @endif
                              </td>
                              <td>
                                @if (isset($AlTotal))
                                  <div class="circle adjust center red color_bl">{{  $AlTotal }}</div>
                                @endif
                              </td>
                              <td>
                                @if (isset($DPTotal))
                                  <div class="circle adjust center green color_bl">{{  $DPTotal }}</div>
                                @endif
                              </td>
                              <td>
                                @if (isset($AJTotal))
                                  <div class="circle adjust center pink color_bl">{{  $AJTotal }}</div>
                                @endif
                              </td>
                              <td>
                                @if (isset($F2Total))
                                  <div class="circle adjust center orange color_bl">{{ $F2Total }}</div>
                                @endif
                              </td>
                              <td>
                                @if (isset($F31Total))
                                  <div class="circle adjust center pj color_bl">{{ $F31Total }}</div>
                                @endif
                              </td>
                              <td>
                                @if (isset($F32Total))
                                  <div class="circle adjust center pj color_bl">{{ $F32Total }}</div>
                                @endif
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-info">
                    <div class="panel-heading" align="center">
                      <span style="font-size: 16px">
                        <strong>Tipología de Procesos</strong>
                      </span>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-4" style="border-right: 1px solid #ccc">
                          @if (isset($chartV) && !empty($chartV))

                            <h4 class="center" style="z-index: 1;position: absolute;top: 0px;width: 100%;">
                              <strong>Valoración Denuncia</strong>
                            </h4>
                            <div style="margin-top: 10px;"></div>
                            {!! $chartV->container() !!}
                            {!! $chartV->script() !!}
                          @endif
                        </div>

                        <div class="col-sm-8">
                          @if (isset($chartMP) && !empty($chartMP))
                            <div id="graficoAnualMedida" style="min-width: 100%; max-width: 100%; height: auto; margin: 0 auto;">
                            </div>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>

                  @if (isset($chartDCD) && !empty($chartDCD))
                    <div class="panel panel-info">
                      <div class="panel-heading" align="center">
                        <span style="font-size: 16px">
                          <strong>Distribución de Carga por Depencia Anual</strong>
                        </span>
                      </div>
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-sm-12">
                            <div id="graficoAnualDependencia" style="min-width: 100%; max-width: 100%; height: auto; margin: 0 auto;">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif

                  <div class="panel panel-info">
                    <div class="panel-heading" align="center">
                      <span style="font-size: 16px">
                        <strong>Mapa de las Instituciones e Comisarías</strong>
                      </span>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-12">
                          <div id="map" style="min-width: 100%; max-width: 100%; height: 450px; margin: 0 auto;">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endif
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
      @if (isset($graphGenerated) && !empty($graphGenerated))
        @if ($graphGenerated == '2')
          @if (isset($chartMP) && !empty($chartMP))
            makeChartAnual({!! json_encode($chartMP) !!},'graficoMensualMedida');
          @endif
        @endif
        @if ($graphGenerated == '4')
          @if (isset($chartMP) && !empty($chartMP))
            makeChartAnual({!! json_encode($chartMP) !!},'graficoAnualMedida');
          @endif

          @if (isset($chartDCD) && !empty($chartDCD))
            makeChartAnual({!! json_encode($chartDCD) !!},'graficoAnualDependencia');
          @endif

          @if (isset($ubicaciones) && !empty($ubicaciones))
            function initMap() {
              var jsonMAP={!! json_encode($ubicaciones) !!}

              // Posición
              @if (!empty(auth()->user()->lat) && !empty(auth()->user()->lng))
                var option = {lat: {{ auth()->user()->lat }}, lng: {{ auth()->user()->lng }} };
              @else
                var option = {lat: -18.0092832, lng: -70.2438729};
              @endif
              var map = new google.maps.Map(document.getElementById('map'), {zoom: 13, center: option});

              var infoWindow = new google.maps.InfoWindow;

              var colorCircle = ['#215967','#403151','#002060','#F20000','#494529','#E26B0A','#700000','#007033','#3379CD','#7030A0','#963634','#92D050','#494529','#CC9900','#009999'];
              var counter = 0;


              $.each(jsonMAP, function(key, data) {
                  console.log(data.latitud);

                  if (data.latitud && data.longitud) {
                    var mylatlng = new google.maps.LatLng(parseFloat(data.latitud), parseFloat(data.longitud));

                    // Creating a marker and putting it on the map
                    var marker = new google.maps.Marker({
                        position: mylatlng,
                        clickable:true,
                        map:map,
                        animation:google.maps.Animation.DROP,
                    });

                    var icon=data.color ? '/assests/img/icons/'+data.color+'-marker2.png' : '/assests/img/icons/red-marker2.png';
                    marker.setIcon(icon);

                    var infowincontent = document.createElement('div');

                    var strong = document.createElement('strong');
                    strong.textContent = "Nombre: ";
                    infowincontent.appendChild(strong);
                    var text = document.createElement('text');
                    text.textContent = data.nombre;
                    infowincontent.appendChild(text);

                    infowincontent.appendChild(document.createElement('br'));

                    var strong = document.createElement('strong');
                    strong.textContent = "Sigla: ";
                    infowincontent.appendChild(strong);
                    var text = document.createElement('text');
                    text.textContent = data.sigla;
                    infowincontent.appendChild(text);

                    marker.setMap(map);
                    marker.addListener('click', function() {
                        infoWindow.setContent(infowincontent);
                        infoWindow.open(map, marker);
                    });

                    counter++;
                  }

              });
            }
          @endif
        @endif
      @endif

      function makeChartAnual(json,graficoID) {
          if (typeof json.anio !== 'undefined') {
              var objectJSON = json;
              var maxHeight = Math.max.apply(Math,objectJSON.maxHeight);
              graficoAnual = new Highcharts.Chart({
                  chart: {
                      renderTo: graficoID,
                      type: 'column'
                  },
                  title: {
                      text: graficoID == 'graficoAnualMedida' ? ('<strong>Carga Medidas de Protección por Año ' + objectJSON.anio+'</strong>') : (graficoID == 'graficoMensualMedida' ? '<strong>Carga Medidas de Protección Mensual ' : '')
                  },
                  xAxis: {
                      type: 'category'
                  },
                  credits: {
                      enabled: false
                  },
                  yAxis: {
                      min: 0,
                      max: maxHeight*1.3,
                      title: {
                          text: graficoID == 'graficoAnualMedida' ? 'Eje (Y) - Medidas de Protección' : ''
                      },
                      visible: false

                  },
                  legend: {
                      enabled: false
                  },
                  scrollbar: {
                      enabled: false
                  },
                  plotOptions: {
                      series: {
                          borderWidth: 0,
                          dataLabels: {
                              enabled: true,
                              format: '{point.y}'
                          }
                      }
                  },

                  tooltip: {
                      headerFormat: '<span style="font-size:11px;font-weight:bold;">{series.name}</span><br>',
                      pointFormat: '<span style="color:{point.color}">{point.nombre}</span>: <b>{point.y}</b><br/>'
                  },

                  "series": [
                      {
                          "name": graficoID== 'graficoAnualMedida' ?  "Medida de Protección" : "Comisaría o Institución",
                          "colorByPoint": true,
                          "data": objectJSON.json,
                      },
                  ],
              });
          }else{
              alert('undefined');
          }
      }

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
  @if (isset($graphGenerated) && !empty($graphGenerated))
    @if ($graphGenerated == '4')
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqWkugYzfAI4tg9Hy0QkM2xhx6HfNxMkQ&callback=initMap"></script>
    @endif
  @endif

  <script type="text/javascript">

    $('#tblcomisaria_id').select2();
    $('#tblinstancia_id').select2();
    $('#dependenciad').select2();
    $('#dependenciad2').select2();
    $('#jip').select2();
    $('#juzgamiento').select2();
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

    $('input[type="checkbox"]').on('ifChecked', function (e) {
      if (this.name=='graph2' || this.name=='graph4') {
        $("#faseii").show();
        $("#fasseiii").show()
      }
      else{
        $("#fasseiii").hide()
        $("#faseii").hide();
        $("#remitido").val('').trigger('change');
      }
    });

    $("#remitido").on('change',function () {
      if ($(this).val() == 'Ministerio Público' || $(this).val() == 'Juzgado de Paz Letrado') {
        if ($(this).val() == 'Ministerio Público' ) {
          $("#show-dependenciad").hide();
          $("#show-dependenciad2").show();
          $("#dependenciad").val('').select2().trigger('change');
        }
        if ($(this).val() == 'Juzgado de Paz Letrado' ) {
          $("#show-dependenciad").show();
          $("#show-dependenciad2").hide();
          $("#dependenciad2").val('').select2().trigger('change');
        }
      }else{
        $("#dependenciad").val('').select2().trigger('change');
        $("#dependenciad2").val('').select2().trigger('change');
        $("#show-dependenciad").hide();
        $("#show-dependenciad2").hide();
      }
    });

    $("#mes").change(function(event) {
      if ($(this).val()) {
        $("#fremisiond").val($(this).val());
        $("#faudiencia").val($(this).val());
        $("#fremision").val($(this).val());
        $("#fjip").val($(this).val());
        $("#fremisionj").val($(this).val());
      }
      else{
        $("#faudiencia").val('');
        $("#fremisiond").val('');
        $("#fremision").val('');
        $("#fjip").val('');
        $("#fremisionj").val('');
      }
    });

    $(document).ready(function() {
      @if (isset($request['remitido']) && !empty($request['remitido']))
        @if ($request['remitido'] == 'Ministerio Público')
          $("#show-dependenciad").hide();
          $("#show-dependenciad2").show();
        @else
          $("#show-dependenciad").show();
          $("#show-dependenciad2").hide();
        @endif
      @else
        $("#show-dependenciad").hide();
        $("#show-dependenciad2").hide();
      @endif

      @if ((isset($request['graph2']) && $request['graph2']=='on') || (isset($request['graph4']) && $request['graph4']=='on'))
        $("#faseii").show();
        $("#fasseiii").show()
      @else
        $("#faseii").hide();
        $("#fasseiii").hide();
      @endif

      // graficos
      var chartCV = '{{ ( isset($chartCV->id) && !empty($chartCV->id) ) ? $chartCV->id : 0 }}';
      var chartPV = '{{ ( isset($chartPV->id) && !empty($chartPV->id) ) ? $chartPV->id : 0 }}';

      $("#"+chartCV).css('height','inherit');
      $("#"+chartPV).css('height','inherit');

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
            alert("Debe seleccionar la Formalización de la Denuncia para Fase I.");
            return false;
          }
          event.currentTarget.submit();
        }
        if ($('input[name=graph2]:checked').length) {
          if ($("#mes").val()=='0') {
            alert("Debe seleccionar la Formalización de la Denuncia para Fase I.");
            return false;
          }
          event.currentTarget.submit();
        }
        if ($('input[name=graph3]:checked').length) {
          if ($("#mes").val()!='0') {
            alert("La selección de Formalización de la Denuncia no corresponde en la generación de gráficos anuales.");
            return false;
          }
          event.currentTarget.submit();
        }
        if ($('input[name=graph4]:checked').length) {
          if ($("#mes").val()!='0') {
            alert("La selección de Formalización de la Denuncia no corresponde en la generación de gráficos anuales.");
            return false;
          }
          if ($("#faudiencia").val()!='0') {
            alert("La selección del mes de la Audiencia no corresponde en la generación de gráficos anuales.");
            return false;
          }
          if ($("#fremisiond").val()!='0') {
            alert("La selección del Mes para Fase II no corresponde en la generación de gráficos anuale.");
            return false;
          }
          if ($("#fjip").val()!='0') {
            alert("La selección del Mes para Fase III Etapa 1 no corresponde en la generación de gráficos anuale.");
            return false;
          }
          if ($("#fremisionj").val()!='0') {
            alert("La selección del Mes para Fase III Etapa2 no corresponde en la generación de gráficos anuale.");
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

        // ultimas modificaciones - henry
        var FASEIItotal = '{{ ( isset($FASEIItotal) && !empty($FASEIItotal)) ? $FASEIItotal : 0 }}';
        var FASE31total = '{{ ( isset($FASE31total) && !empty($FASE31total)) ? $FASE31total : 0 }}';
        var FASE32total = '{{ ( isset($FASE32total) && !empty($FASE32total)) ? $FASE32total : 0 }}';
        
        var F2Total = '{{ ( isset($F2Total) && !empty($F2Total)) ? $F2Total : 0 }}';
        var F31Total = '{{ ( isset($F31Total) && !empty($F31Total)) ? $F31Total : 0 }}';
        var F32Total = '{{ ( isset($F32Total) && !empty($F32Total)) ? $F32Total : 0 }}';

    }
    if ($('input[name=graph3]:checked').length) {
        var hHTotal = '{{ ( isset($hHTotal) && !empty($hHTotal)) ? $hHTotal : 0 }}';
        var vDTotal = '{{ ( isset($vDTotal) && !empty($vDTotal)) ? $vDTotal : 0 }}';
        var pATotal = '{{ ( isset($pATotal) && !empty($pATotal)) ? $pATotal : 0 }}';
    }
    if ($('input[name=graph4]:checked').length) {
        var PNPTotal = '{{ ( isset($PNPTotalAnual) && !empty($PNPTotalAnual)) ? $PNPTotalAnual : 0 }}';
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
          // context.clearRect(0, 0, width, height);
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
    /*$(".sidebar-toggle").on('click', function(){
      if ((typeof chartCDN !== 'undefined' && chartCDN!= '0') && (typeof chartVAR !== 'undefined' && chartVAR != '0')) {
        setTimeout(function () {
          $('#'+chartCDN).highcharts().reflow();
          $('#'+chartVAR).highcharts().reflow();
        },200);
      }
    });*/
  </script>

@endsection

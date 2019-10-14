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
          <a href="{{ url('denuncia') }}" class="btn btn-outline-primary btn-xs pull-right" type="submit"><i class="fa fa-arrow-circle-left"></i> Registros</a>
        </div>
        <div class="box_plus-body">

          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              @can('acceso.victima')
                <li class="active"><a class="menu_tab" href="#tab_1" data-toggle="tab"><i class="fa fa-user"></i> <span>VICTIMAS</span></a></li>
              @endcan
              @can('acceso.agresores')
                <li><a class="menu_tab" href="#tab_2" data-toggle="tab"><img style="height: 25px;" src="{{ asset('/assests/img/icons/human-skull-o.png') }}"> AGRESORES</a></li>
              @endcan
              @can('acceso.scaner')
                @if (auth()->user()->id!=1)
                  <li class="{{ (isset($denuncia) && !empty($denuncia['id'])) ? '' : 'disabled' }}">
                    <a class="menu_tab" title="Escanear registro policial" href="#tab_9" data-toggle="{{ (isset($denuncia) && !empty($denuncia['id'])) ? 'tab' : '' }}">
                      <i class="glyphicon glyphicon-print"></i>
                      <span>ESCANEAR</span>
                    </a>
                  </li>
                @endif
              @endcan
              @can('acceso.cem')
                <li class="{{ (isset($denuncia) && !empty($denuncia['id'])) ? '' : 'disabled' }}"><a class="menu_tab" href="#tab_3" data-toggle="{{ (isset($denuncia) && !empty($denuncia['id'])) ? 'tab' : '' }}"><img style="height: 25px;" title="Centro Emergencia Mujer" src="{{ asset('/assests/img/icons/cem.png') }}">{{-- <i class="fa fa-institution"></i> --}} <span>CEM</span></a></li>
              @endcan
              @can('acceso.denuncia')
                <li class="{{ (isset($denuncia) && !empty($denuncia['id'])) ? '' : 'disabled' }}"><a class="menu_tab" href="#tab_4" data-toggle="{{ (isset($denuncia) && !empty($denuncia['id'])) ? 'tab' : '' }}"><i class="fa fa-user-secret"></i> <span>DENUNCIA</span></a></li>
              @endcan
              @can('acceso.familia')
                <li class="{{ (isset($denuncia) && !empty($denuncia['id'])) ? '' : 'disabled' }}"><a class="menu_tab" href="#tab_5" data-toggle="{{ (isset($denuncia) && !empty($denuncia['id'])) ? 'tab' : '' }}"><img style="height: 25px;" title="Poder Judicial" src="{{ asset('/assests/img/icons/pj.png') }}">{{-- <i class="fa fa-institution"></i> --}} <span title="Modulo Familia">M. FAMILIA</span></a></li>
              @endcan
              @can('acceso.remision')
                <li class="{{ (isset($denuncia) && !empty($denuncia['id'])) ? '' : 'disabled' }}"><a class="menu_tab" href="#tab_6" data-toggle="{{ (isset($denuncia) && !empty($denuncia['id'])) ? 'tab' : '' }}"><img style="height: 25px;" title="Poder Judicial" src="{{ asset('/assests/img/icons/pj.png') }}">{{-- <i class="fa fa-institution"></i> --}} <span title="FASE I">REMISIÓN</span></a></li>
              @endcan
              @can('acceso.faseii')
                <li class="{{ (isset($denuncia) && !empty($denuncia['id']) && ($denuncia->remitido=='Ministerio Público' || $denuncia->remitido=='Juzgado de Paz Letrado')) ? '' : 'disabled' }}"><a class="menu_tab" href="#tab_7" data-toggle="{{ (isset($denuncia) && !empty($denuncia['id']) && ($denuncia->remitido=='Ministerio Público' || $denuncia->remitido=='Juzgado de Paz Letrado')) ? 'tab' : '' }}"><img style="height: 25px;" title="Ministerio Público" src="{{ asset('/assests/img/icons/mp.png') }}">{{-- <i class="fa fa-institution"></i> --}} <span title="FASE II-MP">FASE II</span></a></li>
              @endcan
              @can('acceso.faseiii')
                <li class="{{ (isset($denuncia) && !empty($denuncia['id']) && ($denuncia->remitido=='Ministerio Público' || $denuncia->remitido=='Juzgado de Paz Letrado')) ? '' : 'disabled' }}"><a class="menu_tab" href="#tab_8" data-toggle="{{ (isset($denuncia) && !empty($denuncia['id']) && ($denuncia->remitido=='Ministerio Público' || $denuncia->remitido=='Juzgado de Paz Letrado')) ? 'tab' : '' }}"><img style="height: 25px;" title="Poder Judicial" src="{{ asset('/assests/img/icons/pj.png') }}">{{-- <i class="fa fa-institution"></i> --}} <span title="FASE III-NCPP">FASE III</span></a></li>
              @endcan
            </ul>
            <div class="tab-content">
              @can('acceso.victima')
                <div class="tab-pane active" id="tab_1">
                  <div class="row">
                    <div class="col-sm-12">
                      @if(isset($denuncia) && !empty($denuncia['id']))
                        {!! Form::model($denuncia, [ 'route' => ['denuncia.update', $denuncia->id], 'method' => 'PUT', 'id'=>'form_victima' ]) !!}
                      @else
                        {!! Form::open([ 'route' => 'denuncia.store', 'id'=>'form_victima' ]) !!}
                      @endif
                        <input type="hidden" name="action" value="victima">
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
                              <button class="btn btn-outline-success btn-sm" type="submit"><i class="fa fa-plus"></i> Agregar víctima a la denuncia</button>
                            </div>
                          </div>
                        </div>
                      {!! Form::close() !!}

                      <table id="tblvictima" class=" table table-primary table-den">
                        <thead>
                          <tr>
                            <th class="exg_num">N&ordm;</th>
                            <th>DNI</th>
                            <th>Apellidos y Nombres</th>
                            <th>Edad</th>   
                            <th>Hijos</th>
                            <th>Departamento</th>
                            <th class="center">Acciones</th>
                          </tr>
                        </thead>
                        <tbody class="tablavictima">
                          @if (isset($denuncia) && !empty($denuncia) && $denuncia->victimas()->count()>0)
                            <?php $counter=1; ?>
                            @foreach ($denuncia->victimas as $victima)
                              <tr>
                                <td><span>{{ $counter++ }}</span></td>
                                <td><span>{{ $victima->nro_doc }}</span></td>
                                <td><span>{{ $victima->apellido.", ".$victima->nombre }}</span></td>
                                <td><span>{{ $victima->edad }}</span></td>
                                <td><span>{{ $victima->hijos }}</span></td>
                                <td><span>{{ $victima->tbldepartamento->nombre }}</span></td>
                                <td>
                                  {!! Form::model($denuncia, [ 'route' => ['denuncia.destroy', $denuncia->id], 'method' => 'DELETE' ]) !!}
                                    <input type="hidden" name="action" value="victima">
                                    <input type="hidden" name="victima_id" value="{{ $victima->id }}">
                                    <button type="submit" class="btn btn-outline-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></button>
                                  {!! Form::close() !!}
                                </td>
                              </tr>
                            @endforeach
                          @else
                            <tr><td colspan="7" class="noitems">No hay victimas en la denuncia</td></tr>
                          @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              @endcan

              @can('acceso.agresores')
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                  <div class="row">
                    <div class="col-sm-12">
                      @if(isset($denuncia) && !empty($denuncia['id']))
                        {!! Form::model($denuncia, [ 'route' => ['denuncia.update', $denuncia->id], 'method' => 'PUT', 'id'=>'form_agresor' ]) !!}
                      @else
                        {!! Form::open([ 'route' => 'denuncia.store', 'id'=>'form_agresor' ]) !!}
                      @endif
                        <input type="hidden" name="action" value="agresor">
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
                              <button class="btn btn-outline-success btn-sm" type="submit"><i class="fa fa-plus"></i> Agregar agresor a la denuncia</button>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('tblparentesco_id', 'Parentesco:', ['class' => 'col-sm-2 control-label', 'style' => 'line-height:30px; text-align:left; width: 125px;']) }}
                            <div class="col-sm-6">
                              {{ Form::select('tblparentesco_id', $parentescos, null, array('class'=>'form-control input-sm'.($errors->has('tblparentesco_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Parentesco', 'style'=>'width: 100%')) }}
                              <span id="error-tblparentesco_id" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                      {!! Form::close() !!}

                      <table id="tblagresor" class=" table table-primary table-den">
                        <thead>
                          <tr>
                            <th class="exg_num">N&ordm;</th>
                            <th>DNI</th>
                            <th>Apellidos y Nombres</th>
                            <th>Parentesco</th>
                            <th>Departamento</th>
                            <th class="center">Acciones</th>
                          </tr>
                        </thead>
                        <tbody class="tablaagresor">
                          @if (isset($denuncia) && !empty($denuncia) && $denuncia->agresores()->count()>0)
                            <?php $counter=1; ?>
                            @foreach ($denuncia->agresores as $agresor)
                              <tr>
                                <td><span>{{ $counter++ }}</span></td>
                                <td><span>{{ $agresor->nro_doc }}</span></td>
                                <td><span>{{ $agresor->apellido.", ".$agresor->nombre }}</span></td>
                                <td><span>{{ $agresor->denunciaagresores()->where('denuncia_id',$denuncia->id)->first()->tblparentesco->nombre }}</span></td>
                                <td><span>{{ $agresor->tbldepartamento->nombre }}</span></td>
                                <td>
                                  {!! Form::model($denuncia, [ 'route' => ['denuncia.destroy', $denuncia->id], 'method' => 'DELETE' ]) !!}
                                    <input type="hidden" name="action" value="agresor">
                                    <input type="hidden" name="agresor_id" value="{{ $agresor->id }}">
                                    <button type="submit" class="btn btn-outline-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></button>
                                  {!! Form::close() !!}
                                </td>
                              </tr>
                            @endforeach
                          @else
                            <tr><td colspan="7" class="noitems">No hay agresores en la denuncia</td></tr>
                          @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              @endcan

              @can('acceso.scaner')
                @if (auth()->user()->id!=1)
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_9">
                    <div class="row">
                      <div class="col-sm-12">
                        @if(isset($denuncia) && !empty($denuncia['id']))
                          {!! Form::model($denuncia, [ 'route' => ['denuncia.update', $denuncia->id], 'method' => 'PUT', 'id'=>'form_scaner' ]) !!}
                        @else
                          {!! Form::open([ 'route' => 'denuncia.store', 'id'=>'form_scaner' ]) !!}
                        @endif
                          <div class="row">
                            <div class="col-sm-7">
                              <input type="hidden" name="action" value="scaner">
                              <div class="form-group">
                                {{ Form::label('registro_file', 'Archivo de Registro Policial:', ['class' => 'lbldens control-label']) }}
                                <div class="file-loading">
                                  <input id="registro_file" name="registro_file" type="file">
                                </div>
                                @if (isset($denuncia->registro_file) && !empty($denuncia->registro_file))
                                  <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> <a href="{{ url($denuncia->registro_file) }}" target="_blank">{{ explode("denuncia/",$denuncia->registro_file)[1] }}</a></span><br>
                                @endif
                                <span id="error-registro_file" class="invalid-feedback"></span>
                              </div>
                              {{-- <div class="form-group">
                                {{ Form::label('fdenuncia', 'Fecha de Denuncia:', ['class' => 'lbldens control-label', 'style' => 'line-height:30px']) }}
                                <div class="input-group date">
                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  {{ Form::text('fdenuncia', null, ['class' => 'form-control input-sm datepicker'.($errors->has('fdenuncia')?" is-invalid":""), 'id' => 'fdenuncia', 'autocomplete' => 'off', 'data-date-end-date'=>"0d"]) }}
                                </div>
                                <span id="error-fdenuncia" class="invalid-feedback"></span>
                              </div> --}}
                            </div>
                            <div class="col-sm-5">
                              <label><em><i>Informe Policial</i> (Obligatorio)</em></label><br>
                              <label><em><i>Manifestacion de Partes</i></em></label><br>
                              <label><em><i>Ficha de Valoracion de Riesgo</i></em></label><br>
                              <label><em><i>Protocolo de Pericia Psicológica</i> (Opcional)</em></label><br>
                              <label><em><i>Certificado Medico Legal</i> (Opcional)</em></label><br>
                              <label><em><i>Croquis de las direcciones de las Partes</i></em></label><br>
                            </div>
                          </div>
                          {{-- <div class="form-group">
                            <div class="row">
                              {{ Form::label('registro_file2', 'Archivo de Registro:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                              <div class="col-sm-8">
                                <div class="file-loading">
                                  <input id="registro_file2" name="registro_file2" type="file" accept=".pdf">
                                </div>
                                @if (isset($denuncia->registro_file) && !empty($denuncia->registro_file))
                                  <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> {{ explode("denuncia/",$denuncia->registro_file)[1] }}</span><br>
                                @endif
                                <span id="error-registro_file2" class="invalid-feedback"></span>
                                <div id="pdf-registro_file2">
                                  @if (isset($denuncia->registro_file) && !empty($denuncia->registro_file))
                                    <iframe src="{{ url($denuncia->registro_file) }}" width="100%" style="height: 450px;" frameborder="0"></iframe>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div> --}}

                          <div class="col-sm-4 col-sm-offset-4">
                            <button class="btn btn-outline-primary btn-sm" type="submit"><i class="fa fa-save"></i> Actualizar</button>
                          </div>
                        {!! Form::close() !!}
                      </div>
                    </div>
                  </div>
                @endif
              @endcan

              @can('acceso.cem')
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                  <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                      @if(isset($denuncia) && !empty($denuncia['id']))
                        {!! Form::model($denuncia, [ 'route' => ['denuncia.update', $denuncia->id], 'method' => 'PUT', 'id'=>'form_cem' ]) !!}
                      @else
                        {!! Form::open([ 'route' => 'denuncia.store', 'id'=>'form_cem' ]) !!}
                      @endif
                        <input type="hidden" name="action" value="cem">
                        <div class="form-group has-feedback {{ $errors->has('cem')? 'has-error':'' }}">
                          <div class="row">
                            {{-- {{ Form::label('cem', 'CEM:', ['class' => 'col-sm-4 control-label', 'style' => 'padding-top: 10px;']) }} --}}
                            <div class="col-sm-8">
                              <div class="row">
                                {{-- <div class="col-md-offset-2 col-sm-8"> --}}
                                <div class="col-sm-12">
                                  <br>
                                  {{ Form::label('exp', 'Informe CEM', ['class' => 'lbldenh control-label']) }}
                                  <div class="form-group">
                                    {{ Form::label('cem_file', 'Archivo de Informe:', ['class' => 'lbldens control-label']) }}
                                    <div class="file-loading">
                                      <input id="cem_file" name="cem_file" type="file" accept=".pdf">
                                    </div>
                                    @if (isset($denuncia->cem_file) && !empty($denuncia->cem_file))
                                      <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> <a href="{{ url($denuncia->cem_file) }}" target="_blank">{{ explode("denuncia/",$denuncia->cem_file)[1] }}</a></span><br>
                                    @endif
                                    <span id="error-cem_file" class="invalid-feedback"></span>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                {{-- <div class="col-md-offset-2 col-sm-8"> --}}
                                <div class="col-sm-12">
                                  <br>
                                  {{ Form::label('exp', 'Informe de Medicina Legal', ['class' => 'lbldenh control-label']) }}
                                  <div class="form-group">
                                    {{ Form::label('medicina_file', 'Archivo de Informe:', ['class' => 'lbldens control-label']) }}
                                    <div class="file-loading">
                                      <input id="medicina_file" name="medicina_file" type="file" accept=".pdf">
                                    </div>
                                    @if (isset($denuncia->medicina_file) && !empty($denuncia->medicina_file))
                                      <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> <a href="{{ url($denuncia->medicina_file) }}" target="_blank">{{ explode("denuncia/",$denuncia->medicina_file)[1] }}</a></span><br>
                                    @endif
                                    <span id="error-medicina_file" class="invalid-feedback"></span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-4"><br><br>
                              <div class="checkbox icheck">
                                <label class="">
                                  <div class="icheckbox_square-blue" style="position: relative;">
                                    @if(isset($denuncia) && !empty($denuncia['id']))
                                      {!! Form::checkbox('asistencialegal', $denuncia->asistencialegal, null,['class' => 'icheckjs']) !!}
                                    @else
                                      {!! Form::checkbox('asistencialegal', null, null,['class' => 'icheckjs']) !!}
                                    @endif
                                  </div> Informe de Asistencia Legal
                                </label>
                              </div>
                              <div class="checkbox icheck">
                                <label class="">
                                  <div class="icheckbox_square-blue" style="position: relative;">
                                    @if(isset($denuncia) && !empty($denuncia['id']))
                                      {!! Form::checkbox('psicologia', $denuncia->psicologia, null,['class' => 'icheckjs']) !!}
                                    @else
                                      {!! Form::checkbox('psicologia', null, null,['class' => 'icheckjs']) !!}
                                    @endif
                                  </div> Informe de Asistencia Psicológica
                                </label>
                              </div>
                              <div class="checkbox icheck">
                                <label class="">
                                  <div class="icheckbox_square-blue" style="position: relative;">
                                    @if(isset($denuncia) && !empty($denuncia['id']))
                                      {!! Form::checkbox('social', $denuncia->social, null,['class' => 'icheckjs']) !!}
                                    @else
                                      {!! Form::checkbox('social', null, null,['class' => 'icheckjs']) !!}
                                    @endif
                                  </div> Informe de Asistencia Social
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- <div class="asistencialegal" {{ (isset($denuncia->asistencialegal) && !empty($denuncia->asistencialegal) && $denuncia->asistencialegal == '1') ? "style=display:initial" : "style=display:none" }}>
                          <div class="row">
                            <div class="col-md-offset-2 col-sm-8">
                              <br>
                              {{ Form::label('exp', 'Informe de Asistencia Legal', ['class' => 'lbldenh control-label']) }}
                              <div class="form-group has-feedback {{ $errors->has('informeal')? 'has-error':'' }}">
                                {{ Form::label('informeal', 'Informe:', ['class' => 'lbldens control-label']) }}
                                {{ Form::text('informeal', null, ['class' => 'form-control input-sm'.($errors->has('informeal')?" is-invalid":""), "autofocus", 'id' => 'informeal', 'autocomplete' => 'off']) }}
                                <span id="error-informeal" class="invalid-feedback"></span>
                              </div>
                              <div class="form-group">
                                {{ Form::label('finformeal', 'Fecha de Informe:', ['class' => 'lbldens control-label']) }}
                                <div class="input-group date">
                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  {{ Form::text('finformeal', null, ['class' => 'form-control input-sm datepicker'.($errors->has('finformeal')?" is-invalid":""), "autofocus", 'id' => 'finformeal', 'autocomplete' => 'off', 'data-date-end-date'=>"0d"]) }}
                                </div>
                                <span id="error-finformeal" class="invalid-feedback"></span>
                              </div>
                              <div class="form-group">
                                {{ Form::label('informeal_file', 'Archivo de Informe:', ['class' => 'lbldens control-label']) }}
                                <div class="file-loading">
                                  <input id="informeal_file" name="informeal_file" type="file">
                                </div>
                                @if (isset($denuncia->informeal_file) && !empty($denuncia->informeal_file))
                                  <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> <a href="{{ url($denuncia->informeal_file) }}" target="_blank">{{ explode("informe/informeal/",$denuncia->informeal_file)[1] }}</a></span><br>
                                @endif
                                <span id="error-informeal_file" class="invalid-feedback"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="psicologia" {{ (isset($denuncia->psicologia) && !empty($denuncia->psicologia) && $denuncia->psicologia == '1') ? "style=display:initial" : "style=display:none" }}>
                          <div class="row">
                            <div class="col-md-offset-2 col-sm-8">
                              <br>
                              {{ Form::label('exp', 'Informe de Asistencia Psicológica', ['class' => 'lbldenh control-label']) }}
                              <div class="form-group has-feedback {{ $errors->has('informeps')? 'has-error':'' }}">
                                {{ Form::label('informeps', 'Informe:', ['class' => 'lbldens control-label']) }}
                                {{ Form::text('informeps', null, ['class' => 'form-control input-sm'.($errors->has('informeps')?" is-invalid":""), "autofocus", 'id' => 'informeps', 'autocomplete' => 'off']) }}
                                <span id="error-informeps" class="invalid-feedback"></span>
                              </div>
                              <div class="form-group">
                                {{ Form::label('finformeps', 'Fecha de Informe:', ['class' => 'lbldens control-label']) }}
                                <div class="input-group date">
                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  {{ Form::text('finformeps', null, ['class' => 'form-control input-sm datepicker'.($errors->has('finformeps')?" is-invalid":""), "autofocus", 'id' => 'finformeps', 'autocomplete' => 'off', 'data-date-end-date'=>"0d"]) }}
                                </div>
                                <span id="error-finformeps" class="invalid-feedback"></span>
                              </div>
                              <div class="form-group">
                                {{ Form::label('informeps_file', 'Archivo de Informe:', ['class' => 'lbldens control-label']) }}
                                <div class="file-loading">
                                  <input id="informeps_file" name="informeps_file" type="file">
                                </div>
                                @if (isset($denuncia->informeps_file) && !empty($denuncia->informeps_file))
                                  <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> <a href="{{ url($denuncia->informeps_file) }}" target="_blank">{{ explode("informe/informeps/",$denuncia->informeps_file)[1] }}</a></span><br>
                                @endif
                                <span id="error-informeps_file" class="invalid-feedback"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="social" {{ (isset($denuncia->social) && !empty($denuncia->social) && $denuncia->social == '1') ? "style=display:initial" : "style=display:none" }}>
                          <div class="row">
                            <div class="col-md-offset-2 col-sm-8">
                              <br> 
                              {{ Form::label('exp', 'Informe de Asistencia Social', ['class' => 'lbldenh control-label']) }}
                              <div class="form-group has-feedback {{ $errors->has('informes')? 'has-error':'' }}">
                                {{ Form::label('informes', 'Informe:', ['class' => 'lbldens control-label']) }}
                                {{ Form::text('informes', null, ['class' => 'form-control input-sm'.($errors->has('informes')?" is-invalid":""), "autofocus", 'id' => 'informes', 'autocomplete' => 'off']) }}
                                <span id="error-informes" class="invalid-feedback"></span>
                              </div>
                              <div class="form-group">
                                {{ Form::label('finformes', 'Fecha de Informe:', ['class' => 'lbldens control-label']) }}
                                <div class="input-group date">
                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  {{ Form::text('finformes', null, ['class' => 'form-control input-sm datepicker'.($errors->has('finformes')?" is-invalid":""), "autofocus", 'id' => 'finformes', 'autocomplete' => 'off', 'data-date-end-date'=>"0d"]) }}
                                </div>
                                <span id="error-finformes" class="invalid-feedback"></span>
                              </div>
                              <div class="form-group">
                                {{ Form::label('informes_file', 'Archivo de Informe:', ['class' => 'lbldens control-label']) }}
                                <div class="file-loading">
                                  <input id="informes_file" name="informes_file" type="file">
                                </div>
                                @if (isset($denuncia->informes_file) && !empty($denuncia->informes_file))
                                  <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> <a href="{{ url($denuncia->informes_file) }}" target="_blank">{{ explode("informe/informes/",$denuncia->informes_file)[1] }}</a></span><br>
                                @endif
                                <span id="error-informes_file" class="invalid-feedback"></span>
                              </div>
                            </div>
                          </div>
                        </div> --}}
                        <div class="col-sm-4 col-sm-offset-4">
                          <button class="btn btn-outline-primary btn-sm" type="submit"><i class="fa fa-save"></i> Actualizar</button>
                        </div> 
                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
              @endcan

              @can('acceso.denuncia')
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_4">
                  <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                      @if(isset($denuncia) && !empty($denuncia['id']))
                        {!! Form::model($denuncia, [ 'route' => ['denuncia.update', $denuncia->id], 'method' => 'PUT', 'id'=>'form_denuncia' ]) !!}
                      @else
                        {!! Form::open([ 'route' => 'denuncia.store', 'id'=>'form_denuncia' ]) !!}
                      @endif
                        <input type="hidden" name="action" value="denuncia">

                        <div class="row">
                          <div class="col-md-offset-2 col-sm-8">
                            
                            {{ Form::label('exp', 'Información de la Denuncia', ['class' => 'lbldenh control-label']) }}  

                            <div class="form-group has-feedback {{ $errors->has('oficio')? 'has-error':'' }}">
                              {{ Form::label('oficio', 'Oficio:', ['class' => 'lbldens control-label']) }}
                              {{ Form::text('oficio', null, ['class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""), "autofocus", 'id' => 'oficio', 'autocomplete' => 'off']) }}
                              <span id="error-oficio" class="invalid-feedback"></span>
                            </div>
                            <div class="form-group">
                              {{ Form::label('fdenuncia', 'Fecha de Denuncia:', ['class' => 'lbldens control-label']) }}
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('fdenuncia', null, ['class' => 'form-control input-sm datepicker'.($errors->has('fdenuncia')?" is-invalid":""), "autofocus", 'id' => 'fdenuncia', 'autocomplete' => 'off', 'data-date-end-date'=>"0d"]) }}
                              </div>
                              <span id="error-fdenuncia" class="invalid-feedback"></span>
                            </div>
                            <div class="form-group">
                              {{ Form::label('tblcomisaria_id', 'Institución:', ['class' => 'lbldens control-label']) }}
                              <div class="row">
                                @can('acceso.denuncia.comisaria')
                                  <div class="col-md-3">
                                    <div class="checkbox icheck" style="margin-top: 5px">
                                      <label class="">
                                        <div class="icheckbox_square-blue" style="position: relative;">
                                          @if(isset($denuncia) && !empty($denuncia['id']))
                                            {!! Form::checkbox('_institucion', $denuncia->institucion, null, (isset($denuncia->institucion) && !empty($denuncia->institucion) && $denuncia->institucion == '1') ? ['class'=>'icheckjs chkICheck', 'checked'=>'checked'] : ['class'=>'icheckjs chkICheck']) !!}
                                          @else
                                            {!! Form::checkbox('_institucion', null, null, (isset($denuncia->institucion) && !empty($denuncia->institucion) && $denuncia->institucion == '1') ? ['class'=>'icheckjs chkICheck', 'checked'=>'checked'] : ['class'=>'icheckjs chkICheck']) !!}
                                          @endif
                                        </div> Comisaria
                                      </label>
                                    </div>
                                  </div>
                                @endcan
                                @can('acceso.denuncia.modulo')
                                  <div class="col-md-2">
                                    <div class="checkbox icheck" style="margin-top: 5px">
                                      <label class="">
                                        <div class="icheckbox_square-blue" style="position: relative;">
                                          @if(isset($denuncia) && !empty($denuncia['id']))
                                            {!! Form::checkbox('_modulo', $denuncia->institucion, null, (isset($denuncia->institucion) && !empty($denuncia->institucion) && $denuncia->institucion == '2') ? ['class'=>'icheckjs chkICheck', 'checked'=>'checked'] : ['class'=>'icheckjs chkICheck']) !!}
                                          @else
                                            {!! Form::checkbox('_modulo', null, null, (isset($denuncia->institucion) && !empty($denuncia->institucion) && $denuncia->institucion == '2') ? ['class'=>'chkICheck', 'icheckjs checked'=>'checked'] : ['class'=>'icheckjs chkICheck']) !!}
                                          @endif
                                        </div> Modulo
                                      </label>
                                    </div>
                                  </div>
                                @endcan
                                @can('acceso.denuncia.fiscalia')
                                  <div class="col-md-3">
                                    <div class="checkbox icheck" style="margin-top: 5px">
                                      <label class="">
                                        <div class="icheckbox_square-blue" style="position: relative;">
                                          @if(isset($denuncia) && !empty($denuncia['id']))
                                            {!! Form::checkbox('_fiscalia', $denuncia->institucion, null, (isset($denuncia->institucion) && !empty($denuncia->institucion) && $denuncia->institucion == '3') ? ['class'=>'icheckjs chkICheck', 'checked'=>'checked'] : ['class'=>'icheckjs chkICheck']) !!}
                                          @else
                                            {!! Form::checkbox('_fiscalia', null, null, (isset($denuncia->institucion) && !empty($denuncia->institucion) && $denuncia->institucion == '3') ? ['class'=>'icheckjs chkICheck', 'checked'=>'checked'] : ['class'=>'icheckjs chkICheck']) !!}
                                          @endif
                                        </div> Fiscalia
                                      </label>
                                    </div>
                                  </div>
                                @endcan
                                @can('acceso.denuncia.sau')
                                  <div class="col-md-2">
                                    <div class="checkbox icheck" style="margin-top: 5px">
                                      <label class="">
                                        <div class="icheckbox_square-blue" style="position: relative;">
                                          @if(isset($denuncia) && !empty($denuncia['id']))
                                            {!! Form::checkbox('_sau', $denuncia->institucion, null, (isset($denuncia->institucion) && !empty($denuncia->institucion) && $denuncia->institucion == '4') ? ['class'=>'icheckjs chkICheck', 'checked'=>'checked'] : ['class'=>'icheckjs chkICheck']) !!}
                                          @else
                                            {!! Form::checkbox('_sau', null, null, (isset($denuncia->institucion) && !empty($denuncia->institucion) && $denuncia->institucion == '4') ? ['class'=>'icheckjs chkICheck', 'checked'=>'checked'] : ['class'=>'icheckjs chkICheck']) !!}
                                          @endif
                                        </div> SAU
                                      </label>
                                    </div>
                                  </div>
                                @endcan
                                @can('acceso.denuncia.cem')
                                  <div class="col-md-2">
                                    <div class="checkbox icheck" style="margin-top: 5px">
                                      <label class="">
                                        <div class="icheckbox_square-blue" style="position: relative;">
                                          @if(isset($denuncia) && !empty($denuncia['id']))
                                            {!! Form::checkbox('_cem', $denuncia->institucion, null, (isset($denuncia->institucion) && !empty($denuncia->institucion) && $denuncia->institucion == '5') ? ['class'=>'icheckjs chkICheck', 'checked'=>'checked'] : ['class'=>'icheckjs chkICheck']) !!}
                                          @else
                                            {!! Form::checkbox('_cem', null, null, (isset($denuncia->institucion) && !empty($denuncia->institucion) && $denuncia->institucion == '5') ? ['class'=>'icheckjs chkICheck', 'checked'=>'checked'] : ['class'=>'chkICheck']) !!}
                                          @endif
                                        </div> CEM
                                      </label>
                                    </div>
                                  </div>
                                @endcan
                              </div>
                              <div class="comisaria" {{ (isset($denuncia->institucion) && !empty($denuncia->institucion) && $denuncia->institucion == '1') ? "style=display:initial" : "style=display:none" }} >
                                {{ Form::select('tblcomisaria_id', $comisarias, null, array('class'=>'form-control input-sm'.($errors->has('tblcomisaria_id')?" is-invalid":""), 'placeholder'=>'Seleccione una Comisaria', 'style'=>'width: 100%')) }}
                                <span id="error-tblcomisaria_id" class="invalid-feedback"></span>
                              </div>
                              <div class="fiscalia" {{ (isset($denuncia->institucion) && !empty($denuncia->institucion) && $denuncia->institucion == '3') ? "style=display:initial" : "style=display:none" }} >
                                {{ Form::select('tblfiscalia_id', $instituciones, (isset($denuncia->institucion) && !empty($denuncia->institucion) && $denuncia->institucion == '3') ? $denuncia->tblcomisaria_id : null, array('class'=>'form-control input-sm'.($errors->has('tblfiscalia_id')?" is-invalid":""), 'placeholder'=>'Seleccione una Fiscalia', 'style'=>'width: 100%', 'id'=>'tblfiscalia_id')) }}
                                <span id="error-tblfiscalia_id" class="invalid-feedback"></span>
                              </div>
                              <span id="error-institucion" class="invalid-feedback"></span>
                            </div>
                            <div class="form-group">
                              {{ Form::label('itinerancia', 'Itinerancia:', ['class' => 'lbldens control-label']) }}
                              <div class="row">
                                <div class="col-md-6">
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

                            <br>
                            {{-- {{ Form::label('exp', 'Información de los Hechos', ['class' => 'lbldenh control-label']) }} --}}
                            {{ Form::label('exp', 'Característica de la Violencia', ['class' => 'lbldenh control-label']) }}
                            <div class="form-group">
                              {{ Form::label('tblviolencia_id', 'Tipo de Violencia:', ['class' => 'lbldens control-label']) }}
                              @if(isset($denuncia) && !empty($denuncia['id']))
                                {{Form::select('tblviolencia_id',$violencias,$denuncia->tblviolencias()->pluck('tblviolencia.id','tblviolencia.nombre')->toArray(),array('class' => 'form-control input-sm'.($errors->has('tblviolencia_id')?" is-invalid":""), 'multiple'=>'multiple','name'=>'tblviolencia_id[]','id'=>'tblviolencia_id'))}}
                              @else
                                {{Form::select('tblviolencia_id',$violencias,null,array('class' => 'form-control input-sm'.($errors->has('tblviolencia_id')?" is-invalid":""), 'multiple'=>'multiple','name'=>'tblviolencia_id[]','id'=>'tblviolencia_id'))}}
                              @endif
                              <span id="error-tblviolencia_id" class="invalid-feedback"></span>
                            </div>
                            <div class="form-group">
                              {{ Form::label('tbldenuncia_id', 'Grado de violencia:', ['class' => 'lbldens control-label']) }}
                              {{Form::select('tbldenuncia_id',$tdenuncias,null,array('class' => 'form-control input-sm'.($errors->has('tbldenuncia_id')?" is-invalid":""),'name'=>'tbldenuncia_id','id'=>'tbldenuncia_id'))}}
                              {{-- @if(isset($denuncia) && !empty($denuncia['id']))
                                {{Form::select('tbldenuncia_id',$tdenuncias,$denuncia->tbldenuncias()->pluck('tbldenuncia.id','tbldenuncia.nombre')->toArray(),array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""), 'multiple'=>'multiple','name'=>'tbldenuncia_id[]','id'=>'tbldenuncia_id'))}}
                              @else
                                {{Form::select('tbldenuncia_id',$tdenuncias,null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""), 'multiple'=>'multiple','name'=>'tbldenuncia_id[]','id'=>'tbldenuncia_id'))}}
                              @endif --}}
                              <span id="error-tbldenuncia_id" class="invalid-feedback"></span>
                            </div>

                            <br>
                            {{ Form::label('exp', 'Información Adicional', ['class' => 'lbldenh control-label']) }}
                            <div class="form-group">
                              {{ Form::label('registro_file', 'Archivo de Registro Policial:', ['class' => 'lbldens control-label']) }}
                              <div class="file-loading">
                                <input id="registro_file" name="registro_file" type="file">
                              </div>
                              @if (isset($denuncia->registro_file) && !empty($denuncia->registro_file))
                                <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> <a href="{{ url($denuncia->registro_file) }}" target="_blank">{{ explode("denuncia/",$denuncia->registro_file)[1] }}</a></span><br>
                              @endif
                              <span id="error-registro_file" class="invalid-feedback"></span>
                            </div>
                            <div class="form-group has-feedback {{ $errors->has('observacion')? 'has-error':'' }}">
                              {{ Form::label('observacion', 'Observaciones:', ['class' => 'lbldens control-label']) }}
                              <div class="input-group">
                                {{ Form::textarea('observacion', null, ['class' => 'form-control input-sm'.($errors->has('observacion')?" is-invalid":""), "autofocus", 'id' => 'observacion', 'autocomplete' => 'off', 'rows' => 4]) }}
                                <div class="input-group-addon"><i class="fa fa-edit"></i></div>
                              </div>
                              <span id="error-observacion" class="invalid-feedback"></span>
                            </div>

                            <hr>
                            <div style="text-align: center;">
                              <button class="btn btn-outline-primary btn-sm" type="submit"><i class="fa fa-save"></i> Actualizar</button>
                            </div>
                            
                          </div>
                        </div>
                        
                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
              @endcan

              @can('acceso.familia')
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_5">
                  <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        @if(isset($denuncia) && !empty($denuncia['id']))
                          {!! Form::model($denuncia, [ 'route' => ['denuncia.update', $denuncia->id], 'method' => 'PUT', 'id'=>'form_agresor' ]) !!}
                        @else
                          {!! Form::open([ 'route' => 'denuncia.store', 'id'=>'form_familia' ]) !!}
                        @endif
                        
                        <div class="row">
                          <div class="col-md-offset-2 col-sm-8">
                            
                            <input type="hidden" name="action" value="familia">
                            {{ Form::label('exp', 'Información del Expediente', ['class' => 'lbldenh control-label']) }}  
                            <div class="form-group">
                              {{ Form::label('tblinstancia_id', 'Juzgado:', ['class' => 'lbldens control-label']) }}
                              {{ Form::select('tblinstancia_id', $instancias, null, array('class'=>'form-control input-sm'.($errors->has('tblinstancia_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Juzgado', 'style'=>'width: 100%')) }}
                              <span id="error-tblinstancia_id" class="invalid-feedback"></span>
                            </div>
                            <div class="form-group has-feedback {{ $errors->has('expediente')? 'has-error':'' }}">
                              {{ Form::label('expediente', 'Expediente:', ['class' => 'lbldens control-label']) }}
                              {{ Form::text('expediente', null, ['class' => 'form-control input-sm'.($errors->has('expediente')?" is-invalid":""), "autofocus", 'id' => 'expediente', 'autocomplete' => 'off']) }}
                              <span id="error-expediente" class="invalid-feedback"></span>
                            </div>
                            <div class="form-group">
                              {{ Form::label('fformalizacion', 'Fecha de Formalización:', ['class' => 'lbldens control-label']) }}
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('fformalizacion', null, ['class' => 'form-control input-sm datepicker'.($errors->has('fformalizacion')?" is-invalid":""), "autofocus", 'id' => 'fformalizacion', 'autocomplete' => 'off']) }}
                              </div>
                              <span id="error-fformalizacion" class="invalid-feedback"></span>
                            </div>

                            <br>
                            {{ Form::label('exp', 'Información de la Audiencia', ['class' => 'lbldenh control-label']) }}  
                            <div class="form-group">
                              {{ Form::label('calificacion', 'Calificación:', ['class' => 'lbldens control-label']) }}
                              {{Form::select('calificacion',[''=>'Elegir Calificación','No ha lugar'=>'No ha lugar','Ha lugar'=>'Ha lugar'],null,array('class' => 'form-control input-sm'.($errors->has('calificacion')?" is-invalid":""),'name'=>'calificacion','id'=>'calificacion'))}}
                              <span id="error-calificacion" class="invalid-feedback"></span>
                            </div>
                            <div class="row">
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
                              <div class="col-md-6">
                                <div class="form-group">
                                  {{ Form::label('hora', 'Hora de Audiencia:', ['class' => 'lbldens control-label']) }}
                                  <div class="input-group">
                                    {{ Form::text('hora', null, ['class' => 'form-control input-sm timepicker'.($errors->has('hora')?" is-invalid":""), "autofocus", 'id' => 'hora', 'autocomplete' => 'off']) }}
                                    <div class="input-group-addon">
                                      <i class="fa fa-clock-o"></i>
                                    </div>
                                  </div>
                                  <span id="error-hora" class="invalid-feedback"></span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              {{ Form::label('ministerio', 'Audiencia:', ['class' => 'lbldens control-label']) }}
                              <div class="row">
                                <div class="col-md-7">
                                  <div class="onoffswitch-content">
                                    <div class="onoffswitch">
                                      @if(isset($denuncia) && !empty($denuncia['id']))
                                        {!! Form::checkbox('ministerio', $denuncia->ministerio, (isset($denuncia) && !empty($denuncia['id']) && $denuncia->ministerio == '1') ? true : false, ['class' => 'onoffswitch-checkbox', 'id' => 'ministerio']) !!}
                                      @else
                                        {!! Form::checkbox('ministerio', null, null, ['class' => 'onoffswitch-checkbox', 'id' => 'ministerio']) !!}
                                      @endif
                                      <label class="onoffswitch-label" for="ministerio">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                      </label>
                                    </div>
                                  </div>
                                  <span class="onoffswitch-lbln">Participación del Ministerio Publico</span>
                                </div>
                              </div>
                            </div>
                            {{-- <div class="form-group has-feedback {{ $errors->has('ministerio')? 'has-error':'' }}">
                              {{ Form::label('ministerio', 'Audiencia:', ['class' => 'lbldens control-label']) }}
                              <div class="checkbox icheck">
                                <label class="">
                                  <div class="icheckbox_square-blue" style="position: relative;">
                                    @if(isset($denuncia) && !empty($denuncia['id']))
                                      {!! Form::checkbox('ministerio', $denuncia->ministerio, null, ['class' => 'icheckjs']) !!}
                                    @else
                                      {!! Form::checkbox('ministerio', null, null, ['class' => 'icheckjs']) !!}
                                    @endif
                                  </div> Ministerio
                                </label>
                              </div>
                            </div> --}}


                            <br>
                            {{ Form::label('exp', 'Medida de Protección', ['class' => 'lbldenh control-label']) }}  
                            <div class="form-group">
                              {{ Form::label('tblmedida_id', 'Tipo de Medida de Protección:', ['class' => 'lbldens control-label']) }}
                              @if(isset($denuncia) && !empty($denuncia['id']))
                                {{Form::select('tblmedida_id',$medidas,$denuncia->tblmedidas()->pluck('tblmedida.id','tblmedida.nombre')->toArray(),array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""), 'multiple'=>'multiple','name'=>'tblmedida_id[]','id'=>'tblmedida_id'))}}
                              @else
                                {{Form::select('tblmedida_id',$medidas,null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""), 'multiple'=>'multiple','name'=>'tblmedida_id[]','id'=>'tblmedida_id'))}}
                              @endif
                              <span id="error-tblmedida_id" class="invalid-feedback"></span>
                            </div>
                            <div class="form-group">
                              {{ Form::label('medida_file', 'Medida de Protección:', ['class' => 'lbldens control-label']) }}
                              <div class="input-group">
                                <div class="input-group-btn">
                                  @if (isset($denuncia->medida_file) && !empty($denuncia->medida_file) && isset(explode("denuncia/",$denuncia->medida_file)[1]))
                                    <a style="margin-right: 0px;" title="Descargar Medida de Protección" href="{{ $denuncia->medida_file }}" target="_blank" class="btn btn-outline-primary"><i class="fa fa-download"></i></a>
                                  @else
                                    <a disabled style="margin-right: 0px;" title="Medida de Protección disponible" href="javascript:void(0)" target="_blank" class="btn btn-outline-primary"><i class="fa fa-download"></i></a>
                                  @endif
                                </div>
                                {{-- <input type="text" class="form-control"> --}}
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
                            </div>
                            <div class="form-group">
                              {{ Form::label('fmedida', 'Fecha de Medida de Protección:', ['class' => 'lbldens control-label']) }}
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('fmedida', null, ['class' => 'form-control input-sm datepicker'.($errors->has('fmedida')?" is-invalid":""), "autofocus", 'id' => 'fmedida', 'autocomplete' => 'off']) }}
                              </div>
                              <span id="error-fmedida" class="invalid-feedback"></span>
                            </div>

                            <br>
                            {{ Form::label('exp', 'Aplicación Botón de Pánico', ['class' => 'lbldenh control-label']) }}  
                            <div class="form-group">
                              {{ Form::label('device', 'Aplicación Móvil:', ['class' => 'lbldens control-label']) }}
                              <div class="row">
                                <div class="col-md-6">
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

                            <hr>

                            <div style="text-align: center">
                              <button class="btn btn-outline-primary btn-sm" type="submit"><i class="fa fa-save"></i> Actualizar</button>
                            </div>
                            
                          </div>
                        </div>

                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
              @endcan

              @can('acceso.remision')
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_6">
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-1">
                      @if(isset($denuncia) && !empty($denuncia['id']))
                        {!! Form::model($denuncia, [ 'route' => ['denuncia.update', $denuncia->id], 'method' => 'PUT', 'id'=>'form_agresor' ]) !!}
                      @else
                        {!! Form::open([ 'route' => 'denuncia.store', 'id'=>'form_remision' ]) !!}
                      @endif
                        <input type="hidden" name="action" value="remision">
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('remitido', 'Remitir a:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{Form::select('remitido',[''=>'Elegir','Archivo Central'=>'Archivo Central','Ministerio Público'=>'Ministerio Público','Juzgado de Paz Letrado'=>'Juzgado de Paz Letrado'],null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'remitido','id'=>'remitido'))}}
                              <span id="error-remitido" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('oficioremitido')? 'has-error':'' }}">
                          <div class="row">
                            {{ Form::label('oficioremitido', 'Oficio:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{ Form::text('oficioremitido', null, ['class' => 'form-control input-sm'.($errors->has('oficioremitido')?" is-invalid":""), "autofocus", 'id' => 'oficioremitido', 'autocomplete' => 'off']) }}
                              <span id="error-oficioremitido" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('fremision', 'Fecha:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('fremision', null, ['class' => 'form-control input-sm datepicker'.($errors->has('fremision')?" is-invalid":""), "autofocus", 'id' => 'fremision', 'autocomplete' => 'off']) }}
                              </div>
                              <span id="error-fremision" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>

                        <hr style="border-top: 1px solid #797676;">
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('apelacion_r', 'Apelación:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{Form::select('apelacion_r',$instanciasSS,null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'apelacion_r','id'=>'apelacion_r','placeholder'=>'Elegir Sala Superior'))}}
                              <span id="error-apelacion_r" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('oficio_r')? 'has-error':'' }}">
                          <div class="row">
                            {{ Form::label('oficio_r', 'Oficio:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{ Form::text('oficio_r', null, ['class' => 'form-control input-sm'.($errors->has('oficio_r')?" is-invalid":""), "autofocus", 'id' => 'oficio_r', 'autocomplete' => 'off']) }}
                              <span id="error-oficio_r" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('evaluacion_r', 'Fecha de Elevación:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('evaluacion_r', null, ['class' => 'form-control input-sm datepicker'.($errors->has('evaluacion_r')?" is-invalid":""), "autofocus", 'id' => 'evaluacion_r', 'autocomplete' => 'off']) }}
                              </div>
                              <span id="error-evaluacion_r" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('retorno_r', 'Fecha de Retorno:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('retorno_r', null, ['class' => 'form-control input-sm datepicker'.($errors->has('retorno_r')?" is-invalid":""), "autofocus", 'id' => 'retorno_r', 'autocomplete' => 'off']) }}
                              </div>
                              <span id="error-retorno_r" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('resolucion_r', 'Resolución:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{Form::select('resolucion_r',[1=>'Confirma', 2=>'Revoca'],null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'resolucion_r','id'=>'resolucion_r','placeholder'=>'Elegir'))}}
                              <span id="error-resolucion_r" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>

                        <hr style="border-top: 1px solid #797676;">
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('apelacionc_r', 'Casación:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{Form::select('apelacionc_r',$instanciasSSP,null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'apelacionc_r','id'=>'apelacionc_r','placeholder'=>'Elegir Sala Suprema Penal'))}}
                              <span id="error-apelacionc_r" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('oficioc_r')? 'has-error':'' }}">
                          <div class="row">
                            {{ Form::label('oficioc_r', 'Oficio:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{ Form::text('oficioc_r', null, ['class' => 'form-control input-sm'.($errors->has('oficioc_r')?" is-invalid":""), "autofocus", 'id' => 'oficioc_r', 'autocomplete' => 'off']) }}
                              <span id="error-oficioc_r" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('evaluacionc_r', 'Fecha de Elevación:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('evaluacionc_r', null, ['class' => 'form-control input-sm datepicker'.($errors->has('evaluacionc_r')?" is-invalid":""), "autofocus", 'id' => 'evaluacionc_r', 'autocomplete' => 'off']) }}
                              </div>
                              <span id="error-evaluacionc_r" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('retornoc_r', 'Fecha de Retorno:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('retornoc_r', null, ['class' => 'form-control input-sm datepicker'.($errors->has('retornoc_r')?" is-invalid":""), "autofocus", 'id' => 'retornoc_r', 'autocomplete' => 'off']) }}
                              </div>
                              <span id="error-retornoc_r" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('resolucionc_r', 'Resolución:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{Form::select('resolucionc_r',[1=>'Confirma', 2=>'Revoca'],null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'resolucionc_r','id'=>'resolucionc_r','placeholder'=>'Elegir'))}}
                              <span id="error-resolucionc_r" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 col-sm-offset-4">
                          <button class="btn btn-outline-primary btn-sm" type="submit"><i class="fa fa-save"></i> Actualizar</button>
                        </div>
                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
              @endcan

              @can('acceso.faseii')
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_7">
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-1">
                      @if(isset($denuncia) && !empty($denuncia['id']))
                        {!! Form::model($denuncia, [ 'route' => ['denuncia.update', $denuncia->id], 'method' => 'PUT', 'id'=>'form_agresor' ]) !!}
                      @else
                        {!! Form::open([ 'route' => 'denuncia.store', 'id'=>'form_fase3' ]) !!}
                      @endif
                        <input type="hidden" name="action" value="fase3">
                        <div id="pl">
                          <div class="form-group">
                            <div class="row">
                              {{ Form::label('dependenciad', 'J. Paz Letrado:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                              <div class="col-sm-8">
                                {{ Form::select('dependenciad', $instanciasPL, null, array('class'=>'form-control input-sm'.($errors->has('dependenciad')?" is-invalid":""), 'placeholder'=>'Seleccione un Juzgado de Paz Letrado', 'style'=>'width: 100%')) }}
                                <span id="error-dependenciad" class="invalid-feedback"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="mn">
                          <div class="form-group">
                            <div class="row">
                              {{ Form::label('dependenciad', 'Ministerio Público:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                              <div class="col-sm-8">
                                {{ Form::select('dependenciad', $instanciasMIN, null, array('class'=>'form-control input-sm'.($errors->has('dependenciad')?" is-invalid":""), 'placeholder'=>'Seleccione un Ministerio Público', 'style'=>'width: 100%')) }}
                                <span id="error-dependenciad" class="invalid-feedback"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('expediented')? 'has-error':'' }}">
                          <div class="row">
                            {{ Form::label('expediented', 'Carpeta Fiscal', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{ Form::text('expediented', null, ['class' => 'form-control input-sm'.($errors->has('expediented')?" is-invalid":""), "autofocus", 'id' => 'expediented', 'autocomplete' => 'off']) }}
                              <span id="error-expediented" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('remitidod', 'Remitir a:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{Form::select('remitidod',[''=>'Elegir','Archivo Central'=>'Archivo Central','Juzgado de Investigación Preparatoria'=>'Juzgado de Investigación Preparatoria'],null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'remitidod','id'=>'remitidod'))}}
                              <span id="error-remitidod" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('oficioremitidod')? 'has-error':'' }}">
                          <div class="row">
                            {{ Form::label('oficioremitidod', 'Oficio:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{ Form::text('oficioremitidod', null, ['class' => 'form-control input-sm'.($errors->has('oficioremitidod')?" is-invalid":""), "autofocus", 'id' => 'oficioremitidod', 'autocomplete' => 'off']) }}
                              <span id="error-oficioremitidod" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('fremisiond', 'Fecha:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('fremisiond', null, ['class' => 'form-control input-sm datepicker'.($errors->has('fremisiond')?" is-invalid":""), "autofocus", 'id' => 'fremisiond', 'autocomplete' => 'off']) }}
                              </div>
                              <span id="error-fremisiond" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 col-sm-offset-4">
                          <button class="btn btn-outline-primary btn-sm" type="submit"><i class="fa fa-save"></i> Actualizar</button>
                        </div>
                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
              @endcan

              @can('acceso.faseiii')
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_8">
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-1">
                      @if(isset($denuncia) && !empty($denuncia['id']))
                        {!! Form::model($denuncia, [ 'route' => ['denuncia.update', $denuncia->id], 'method' => 'PUT', 'id'=>'form_agresor' ]) !!}
                      @else
                        {!! Form::open([ 'route' => 'denuncia.store', 'id'=>'form_fase4' ]) !!}
                      @endif
                        <input type="hidden" name="action" value="fase4">
                        <div class="form-group">
                          <div class="row">
                            <label class="col-sm-4 control-label" style="line-height:30px" for="tbldpenal_id">
                              <span>Tipo de denuncia penal: </span>
                            </label>
                            <div class="col-sm-8">
                              <select class="form-control input-sm" id="tbldpenal_id" name="tbldpenal_id" style="width: 100%;">
                                <option value="0">Seleccione ... </option>
                                @foreach ($tbldpenales as $tbldpenal)
                                  <optgroup label="{{ $tbldpenal->nombre }}">
                                    @foreach ($tbldpenal->hijos as $hijo)
                                      <option value="{{ $hijo->id }}" {{ ( (isset($denuncia->tbldpenal_id) && !empty($denuncia->tbldpenal_id)) && $hijo->id == $denuncia->tbldpenal_id ) ? 'selected="selected"' : ''  }}>{{ $hijo->nombre }} </option>
                                    @endforeach
                                  </optgroup>
                                @endforeach
                              </select>
                              <span id="error-tbldpenal_id" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <hr style="border-top: 1px solid #797676;">
                        <div class="form-group">
                          <div class="row">
                            <label class="col-sm-4 control-label" style="line-height:30px" for="jip">
                              <span class="pull-left">Etapa1: </span>
                              <span title="Juzgado de Investigación Preparatoria">JIP: </span>
                            </label>
                            <div class="col-sm-8">
                              {{ Form::select('jip', $instanciasJIP, null, array('class'=>'form-control input-sm'.($errors->has('jip')?" is-invalid":""), 'placeholder'=>'Seleccione un Juzgado de Investigación Preparatoria', 'style'=>'width: 100%')) }}
                              <span id="error-jip" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('fjip', 'Fecha:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('fjip', null, ['class' => 'form-control input-sm datepicker'.($errors->has('fjip')?" is-invalid":""), 'id' => 'fjip','autocomplete' => 'off']) }}
                              </div>
                              <span id="error-fjip" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="row" style="margin-top: -15px;">
                          <div class="col-sm-4"></div>
                          <div class="col-sm-8">
                            <hr style="border-top: 1px solid #797676;">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('apelacione1_j', 'Apelación:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{Form::select('apelacione1_j',$instanciasSS,null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'apelacione1_j','id'=>'apelacione1_j','placeholder'=>'Elegir'))}}
                              <span id="error-apelacione1_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('oficioe1_j')? 'has-error':'' }}">
                          <div class="row">
                            {{ Form::label('oficioe1_j', 'Oficio:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{ Form::text('oficioe1_j', null, ['class' => 'form-control input-sm'.($errors->has('oficioe1_j')?" is-invalid":""), "autofocus", 'id' => 'oficioe1_j', 'autocomplete' => 'off']) }}
                              <span id="error-oficioe1_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('evaluacione1_j', 'Fecha de Elevación:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('evaluacione1_j', null, ['class' => 'form-control input-sm datepicker'.($errors->has('evaluacione1_j')?" is-invalid":""), "autofocus", 'id' => 'evaluacione1_j', 'autocomplete' => 'off']) }}
                              </div>
                              <span id="error-evaluacione1_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('retornoe1_j', 'Fecha de Retorno:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('retornoe1_j', null, ['class' => 'form-control input-sm datepicker'.($errors->has('retornoe1_j')?" is-invalid":""), "autofocus", 'id' => 'retornoe1_j', 'autocomplete' => 'off']) }}
                              </div>
                              <span id="error-retornoe1_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('resolucione1_j', 'Resolución:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{Form::select('resolucione1_j',[1=>'Confirma', 2=>'Revoca'],null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'resolucione1_j','id'=>'resolucione1_j','placeholder'=>'Elegir'))}}
                              <span id="error-resolucione1_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row" style="margin-top: -15px;">
                          <div class="col-sm-4"></div>
                          <div class="col-sm-8">
                            <hr style="border-top: 1px solid #797676;">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <label class="col-sm-4 control-label" style="line-height:30px" for="apelacionc_j">
                              <span>Casación: </span>
                            </label>
                            <div class="col-sm-8">
                              {{Form::select('apelacionc_j',$instanciasSSP,null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'apelacionc_j','id'=>'apelacionc_j','placeholder'=>'Elegir'))}}
                              <span id="error-apelacionc_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('oficioc_j')? 'has-error':'' }}">
                          <div class="row">
                            {{ Form::label('oficioc_j', 'Oficio:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{ Form::text('oficioc_j', null, ['class' => 'form-control input-sm'.($errors->has('oficioc_j')?" is-invalid":""), "autofocus", 'id' => 'oficioc_j', 'autocomplete' => 'off']) }}
                              <span id="error-oficioc_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('evaluacionc_j', 'Fecha de Elevación:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('evaluacionc_j', null, ['class' => 'form-control input-sm datepicker'.($errors->has('evaluacionc_j')?" is-invalid":""), "autofocus", 'id' => 'evaluacionc_j', 'autocomplete' => 'off']) }}
                              </div>
                              <span id="error-evaluacionc_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('retornoc_j', 'Fecha de Retorno:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('retornoc_j', null, ['class' => 'form-control input-sm datepicker'.($errors->has('retornoc_j')?" is-invalid":""), "autofocus", 'id' => 'retornoc_j', 'autocomplete' => 'off']) }}
                              </div>
                              <span id="error-retornoc_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('resolucionc_j', 'Resolución:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{Form::select('resolucionc_j',[1=>'Confirma', 2=>'Revoca'],null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'resolucionc_j','id'=>'resolucionc_j','placeholder'=>'Elegir'))}}
                              <span id="error-resolucionc_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>

                        <hr style="border-top: 1px solid #797676;">
                        <div class="form-group">
                          <div class="row">
                            <label class="col-sm-4 control-label" style="line-height:30px" for="juzgamiento">
                              <span class="pull-left">Etapa2: </span>
                              <span>JUP/Unipersonal: </span>
                            </label>
                            <div class="col-sm-8">
                              {{ Form::select('juzgamiento', $instanciasJP, null, array('class'=>'form-control input-sm'.($errors->has('juzgamiento')?" is-invalid":""), 'placeholder'=>'Seleccione un Juzgado Penal Unipersonal', 'style'=>'width: 100%')) }}
                              <span id="error-juzgamiento" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('sentencia', 'Sentencia:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{Form::select('sentencia',[''=>'Elegir','Condenatoria'=>'Condenatoria','Absolutoria'=>'Absolutoria'],null,array('class' => 'form-control input-sm'.($errors->has('sentencia')?" is-invalid":""),'name'=>'sentencia','id'=>'sentencia'))}}
                              <span id="error-sentencia" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('oficioremitidoj')? 'has-error':'' }}">
                          <div class="row">
                            {{ Form::label('oficioremitidoj', 'Resolución:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{ Form::text('oficioremitidoj', null, ['class' => 'form-control input-sm'.($errors->has('oficioremitidoj')?" is-invalid":""), "autofocus", 'id' => 'oficioremitidoj', 'autocomplete' => 'off']) }}
                              <span id="error-oficioremitidoj" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('fremisionj', 'Fecha:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('fremisionj', null, ['class' => 'form-control input-sm datepicker'.($errors->has('fremisionj')?" is-invalid":""), "autofocus", 'id' => 'fremisionj', 'autocomplete' => 'off']) }}
                              </div>
                              <span id="error-fremisionj" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="row" style="margin-top: -15px;">
                          <div class="col-sm-4"></div>
                          <div class="col-sm-8">
                            <hr style="border-top: 1px solid #797676;">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('apelacione2_j', 'Apelación:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{Form::select('apelacione2_j',$instanciasSS,null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'apelacione2_j','id'=>'apelacione2_j','placeholder'=>'Elegir'))}}
                              <span id="error-apelacione2_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('oficioe2_j')? 'has-error':'' }}">
                          <div class="row">
                            {{ Form::label('oficioe2_j', 'Oficio:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{ Form::text('oficioe2_j', null, ['class' => 'form-control input-sm'.($errors->has('oficioe2_j')?" is-invalid":""), "autofocus", 'id' => 'oficioe2_j', 'autocomplete' => 'off']) }}
                              <span id="error-oficioe2_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('evaluacione2_j', 'Fecha de Elevación:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('evaluacione2_j', null, ['class' => 'form-control input-sm datepicker'.($errors->has('evaluacione2_j')?" is-invalid":""), "autofocus", 'id' => 'evaluacione2_j', 'autocomplete' => 'off']) }}
                              </div>
                              <span id="error-evaluacione2_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('retornoe2_j', 'Fecha de Retorno:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('retornoe2_j', null, ['class' => 'form-control input-sm datepicker'.($errors->has('retornoe2_j')?" is-invalid":""), "autofocus", 'id' => 'retornoe2_j', 'autocomplete' => 'off']) }}
                              </div>
                              <span id="error-retornoe2_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('resolucione2_j', 'Resolución:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{Form::select('resolucione2_j',[1=>'Confirma', 2=>'Revoca'],null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'resolucione2_j','id'=>'resolucione2_j','placeholder'=>'Elegir'))}}
                              <span id="error-resolucione2_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row" style="margin-top: -15px;">
                          <div class="col-sm-4"></div>
                          <div class="col-sm-8">
                            <hr style="border-top: 1px solid #797676;">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <label class="col-sm-4 control-label" style="line-height:30px" for="apelacionc2_j">
                              <span>Casación: </span>
                            </label>
                            <div class="col-sm-8">
                              {{Form::select('apelacionc2_j',$instanciasSSP,null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'apelacionc2_j','id'=>'apelacionc2_j','placeholder'=>'Elegir'))}}
                              <span id="error-apelacionc2_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('oficioc2_j')? 'has-error':'' }}">
                          <div class="row">
                            {{ Form::label('oficioc2_j', 'Oficio:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{ Form::text('oficioc2_j', null, ['class' => 'form-control input-sm'.($errors->has('oficioc2_j')?" is-invalid":""), "autofocus", 'id' => 'oficioc2_j', 'autocomplete' => 'off']) }}
                              <span id="error-oficioc2_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('evaluacionc2_j', 'Fecha de Elevación:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('evaluacionc2_j', null, ['class' => 'form-control input-sm datepicker'.($errors->has('evaluacionc2_j')?" is-invalid":""), "autofocus", 'id' => 'evaluacionc2_j', 'autocomplete' => 'off']) }}
                              </div>
                              <span id="error-evaluacionc2_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('retornoc2_j', 'Fecha de Retorno:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                {{ Form::text('retornoc2_j', null, ['class' => 'form-control input-sm datepicker'.($errors->has('retornoc2_j')?" is-invalid":""), "autofocus", 'id' => 'retornoc2_j', 'autocomplete' => 'off']) }}
                              </div>
                              <span id="error-retornoc2_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('resolucionc2_j', 'Resolución:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{Form::select('resolucionc2_j',[1=>'Confirma', 2=>'Revoca'],null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'resolucionc2_j','id'=>'resolucionc2_j','placeholder'=>'Elegir'))}}
                              <span id="error-resolucionc2_j" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 col-sm-offset-4">
                          <button class="btn btn-outline-primary btn-sm" type="submit"><i class="fa fa-save"></i> Actualizar</button>
                        </div>
                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
              @endcan

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div>
    </div>
  </div>
</div>

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
  <script src="{{ asset('assests/js/denuncia/denuncia/denuncia.js') }}"></script>

  <script>
  
    function randomString(length, chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
      var result = '';
      for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
      return result;
    }

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

    $("#tblprovincia_id,.tblprovincia").attr('disabled', 'disabled');
    $("#tbldistrito_id,.tbldistrito").attr('disabled', 'disabled');

    // iniciar icheck
    $('input.icheckjs').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });

    $('input[name=asistencialegal]').on('ifChecked', function() {
      console.log("asistencialegal");
      $(".asistencialegal").removeClass('hide');
      $(".asistencialegal").addClass('show');
      // $(".psicologia").removeClass('show');
      // $(".psicologia").addClass('hide');
      // $(".social").removeClass('show');
      // $(".social").addClass('hide');
    });
    $('input[name=asistencialegal]').on('ifUnchecked', function(event){
      $(".asistencialegal").removeClass('show');
      $(".asistencialegal").addClass('hide');
    });
    $('input[name=psicologia]').on('ifChecked', function() {
      console.log("psicologia");
      // $(".asistencialegal").removeClass('show');
      // $(".asistencialegal").addClass('hide');
      $(".psicologia").removeClass('hide');
      $(".psicologia").addClass('show');
      // $(".social").removeClass('show');
      // $(".social").addClass('hide');
    });

    $('input[name=psicologia]').on('ifUnchecked', function(event){
      $(".psicologia").removeClass('show');
      $(".psicologia").addClass('hide');
    });
    $('input[name=social]').on('ifChecked', function() {
      console.log("social");
      // $(".asistencialegal").removeClass('show');
      // $(".asistencialegal").addClass('hide');
      // $(".psicologia").removeClass('show');
      // $(".psicologia").addClass('hide');
      $(".social").removeClass('hide');
      $(".social").addClass('show');
    });

    $('input[name=social]').on('ifUnchecked', function(event){
      $(".social").removeClass('show');
      $(".social").addClass('hide');
    });

    // seleccionar solo un checkbox - denuncia
    $('input.chkICheck').on('ifChecked', function() {
      console.log("checked");
      $('input.chkICheck').not(this).iCheck('uncheck');
    });

    $('input').on('ifChecked', function() {
      console.log("checked!!");
      if ($('input[name=_institucion]:checked').length) {
        $(".comisaria").show();
        $(".fiscalia").hide();
      }
      if ($('input[name=_modulo]:checked').length) {
        $(".comisaria").hide();
        $(".fiscalia").hide(); 
      }
      if ($('input[name=_fiscalia]:checked').length) {
        $(".comisaria").hide();
        $(".fiscalia").show();
      }
    });

    $('input[name=_institucion]').on('ifUnchecked', function(event){
      $(".comisaria").hide();
    });
    $('input[name=_fiscalia]').on('ifUnchecked', function(event){
      $(".fiscalia").hide();
    });

    $('.datepicker').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy',
      todayHighlight: true,
    });
    $('.timepicker').timepicker({
      minuteStep: 5,
      showInputs: false,
      showMeridian: false,
      showSeconds: false,
      defaultTime:'00:00',
    })
    $('#tbldenuncia_id').select2({
      placeholder: 'Seleccione un Tipo',
      width: '100%'
    });
    $('#tblmedida_id').select2({
      placeholder: 'Seleccione un Tipo',
      width: '100%'
    });
    $('#tblviolencia_id').select2({
      placeholder: 'Seleccione un Tipo',
      width: '100%'
    });
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
    $('#tblcomisaria_id').select2();
    $('#tblfiscalia_id').select2();
    $('#tblinstancia_id').select2();
    $('#tbldpenal_id').select2();
    $('#informeal_file').fileinput({
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
    $('#informeps_file').fileinput({
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
    $('#informes_file').fileinput({
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
    $('#cem_file').fileinput({
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
    $('#medicina_file').fileinput({
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
    $("#remitido").on('change',function () {
      if ($(this).val() == 'Ministerio Público' || $(this).val() == 'Juzgado de Paz Letrado') {
        $('a[href$="#tab_7"]').attr('data-toggle','tab').parent('li').removeClass('disabled');
        $('a[href$="#tab_8"]').attr('data-toggle','tab').parent('li').removeClass('disabled');
        if ($(this).val() == 'Ministerio Público' ) {
          $("#pl").hide();
          $("#mn").show();
        }
        if ($(this).val() == 'Juzgado de Paz Letrado' ) {
          $("#mn").hide();
          $("#pl").show();
        }
      }else{
        $('a[href$="#tab_7"]').removeAttr('data-toggle').parent('li').addClass('disabled');
        $('a[href$="#tab_8"]').removeAttr('data-toggle').parent('li').addClass('disabled');
      }
    });
  </script>
@endsection

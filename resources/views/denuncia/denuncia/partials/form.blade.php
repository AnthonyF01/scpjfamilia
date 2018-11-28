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
            Editar Denuncia
          @else
            Agregar Denuncia
          @endif
          <a href="{{ url('denuncia') }}" class="btn btn-outline-primary btn-xs pull-right" type="submit"><i class="fa fa-arrow-circle-left"></i> Registros</a>
        </div>
        <div class="box_plus-body">

          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a class="menu_tab" href="#tab_1" data-toggle="tab"><i class="fa fa-user"></i> <span>VICTIMAS</span></a></li>
              <li><a class="menu_tab" href="#tab_2" data-toggle="tab"><img style="height: 25px;" src="http://localhost:8000/assests/img/icons/human-skull-o.png"> AGRESORES</a></li>
              <li class="{{ (isset($denuncia) && !empty($denuncia['id'])) ? '' : 'disabled' }}"><a class="menu_tab" href="#tab_3" data-toggle="{{ (isset($denuncia) && !empty($denuncia['id'])) ? 'tab' : '' }}"><i class="fa fa-institution"></i> <span>CEM</span></a></li>
              <li class="{{ (isset($denuncia) && !empty($denuncia['id'])) ? '' : 'disabled' }}"><a class="menu_tab" href="#tab_4" data-toggle="{{ (isset($denuncia) && !empty($denuncia['id'])) ? 'tab' : '' }}"><i class="fa fa-user-secret"></i> <span>DENUNCIA</span></a></li>
              <li class="{{ (isset($denuncia) && !empty($denuncia['id'])) ? '' : 'disabled' }}"><a class="menu_tab" href="#tab_5" data-toggle="{{ (isset($denuncia) && !empty($denuncia['id'])) ? 'tab' : '' }}"><i class="fa fa-institution"></i> <span>M. FAMILIA</span></a></li>
              <li class="{{ (isset($denuncia) && !empty($denuncia['id'])) ? '' : 'disabled' }}"><a class="menu_tab" href="#tab_6" data-toggle="{{ (isset($denuncia) && !empty($denuncia['id'])) ? 'tab' : '' }}"><i class="fa fa-institution"></i> <span>REMISIÓN</span></a></li>
              <li class="{{ (isset($denuncia) && !empty($denuncia['id']) && ($denuncia->remitido=='Ministerio Público' || $denuncia->remitido=='Juzgado de Paz Letrado')) ? '' : 'disabled' }}"><a class="menu_tab" href="#tab_7" data-toggle="{{ (isset($denuncia) && !empty($denuncia['id']) && ($denuncia->remitido=='Ministerio Público' || $denuncia->remitido=='Juzgado de Paz Letrado')) ? 'tab' : '' }}"><i class="fa fa-institution"></i> <span>FASE III</span></a></li>
              <li class="{{ (isset($denuncia) && !empty($denuncia['id']) && ($denuncia->remitido=='Ministerio Público' || $denuncia->remitido=='Juzgado de Paz Letrado')) ? '' : 'disabled' }}"><a class="menu_tab" href="#tab_8" data-toggle="{{ (isset($denuncia) && !empty($denuncia['id']) && ($denuncia->remitido=='Ministerio Público' || $denuncia->remitido=='Juzgado de Paz Letrado')) ? 'tab' : '' }}"><i class="fa fa-institution"></i> <span>FASE IV</span></a></li>
            </ul>
            <div class="tab-content">
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
                          {{ Form::label('victima_id', 'Buscar Victima:', ['class' => 'col-sm-2 control-label', 'style' => 'line-height:30px; text-align:left;']) }}
                          <div class="col-sm-4">
                            {{ Form::select('victima_id', [], null, array('class'=>'form-control input-sm'.($errors->has('victima_id')?" is-invalid":""), 'style'=>'width: 100%')) }}
                            <span id="error-victima_id" class="invalid-feedback"></span>
                          </div>
                          <div class="col-sm-4">
                            <button class="btn btn-outline-success btn-sm" type="submit"><i class="fa fa-plus"></i> Agregar Victima</button>
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
                          {{ Form::label('agresor_id', 'Buscar agresor:', ['class' => 'col-sm-2 control-label', 'style' => 'line-height:30px; text-align:left;']) }}
                          <div class="col-sm-4">
                            {{ Form::select('agresor_id', [], null, array('class'=>'form-control input-sm'.($errors->has('agresor_id')?" is-invalid":""), 'style'=>'width: 100%')) }}
                            <span id="error-agresor_id" class="invalid-feedback"></span>
                          </div>
                          <div class="col-sm-4">
                            <button class="btn btn-outline-success btn-sm" type="submit"><i class="fa fa-plus"></i> Agregar Agresor</button>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          {{ Form::label('tblparentesco_id', 'Parentesco:', ['class' => 'col-sm-2 control-label', 'style' => 'line-height:30px; text-align:left;']) }}
                          <div class="col-sm-4">
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
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-1">
                    @if(isset($denuncia) && !empty($denuncia['id']))
                      {!! Form::model($denuncia, [ 'route' => ['denuncia.update', $denuncia->id], 'method' => 'PUT', 'id'=>'form_cem' ]) !!}
                    @else
                      {!! Form::open([ 'route' => 'denuncia.store', 'id'=>'form_cem' ]) !!}
                    @endif
                      <input type="hidden" name="action" value="cem">
                      <div class="form-group has-feedback {{ $errors->has('cem')? 'has-error':'' }}">
                        <div class="row">
                          {{ Form::label('cem', 'CEM:', ['class' => 'col-sm-4 control-label', 'style' => 'padding-top: 10px;']) }}
                          <div class="col-sm-8">
                            <div class="checkbox icheck">
                              <label class="">
                                <div class="icheckbox_square-blue" style="position: relative;">
                                  @if(isset($denuncia) && !empty($denuncia['id']))
                                    {!! Form::checkbox('asistencialegal', $denuncia->asistencialegal, null) !!}
                                  @else
                                    {!! Form::checkbox('asistencialegal', null, null) !!}
                                  @endif
                                  {{-- <input type="checkbox" name="asistencialegal" {{ old('asistencialegal') ? 'checked' : '' }} style="display: block; position: absolute; top: -20%; left: -20%; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins> --}}
                                </div> Asistencia Legal
                              </label>
                            </div>
                            <div class="checkbox icheck">
                              <label class="">
                                <div class="icheckbox_square-blue" style="position: relative;">
                                  @if(isset($denuncia) && !empty($denuncia['id']))
                                    {!! Form::checkbox('psicologia', $denuncia->psicologia, null) !!}
                                  @else
                                    {!! Form::checkbox('psicologia', null, null) !!}
                                  @endif
                                  {{-- <input type="checkbox" name="psicologia" {{ old('psicologia') ? 'checked' : '' }} style="display: block; position: absolute; top: -20%; left: -20%; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins> --}}
                                </div> Psicología
                              </label>
                            </div>
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
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-1">
                    @if(isset($denuncia) && !empty($denuncia['id']))
                      {!! Form::model($denuncia, [ 'route' => ['denuncia.update', $denuncia->id], 'method' => 'PUT', 'id'=>'form_denuncia' ]) !!}
                    @else
                      {!! Form::open([ 'route' => 'denuncia.store', 'id'=>'form_denuncia' ]) !!}
                    @endif
                      <input type="hidden" name="action" value="denuncia">
                      <div class="form-group has-feedback {{ $errors->has('oficio')? 'has-error':'' }}">
                        <div class="row">
                          {{ Form::label('oficio', 'Oficio:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            {{ Form::text('oficio', null, ['class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""), "autofocus", 'id' => 'oficio', 'autocomplete' => 'off']) }}
                            <span id="error-oficio" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          {{ Form::label('tbldenuncia_id', 'Tipo Denuncia:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            @if(isset($denuncia) && !empty($denuncia['id']))
                              {{Form::select('tbldenuncia_id',$tdenuncias,$denuncia->tbldenuncias()->pluck('tbldenuncia.id','tbldenuncia.nombre')->toArray(),array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""), 'multiple'=>'multiple','name'=>'tbldenuncia_id[]','id'=>'tbldenuncia_id'))}}
                            @else
                              {{Form::select('tbldenuncia_id',$tdenuncias,null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""), 'multiple'=>'multiple','name'=>'tbldenuncia_id[]','id'=>'tbldenuncia_id'))}}
                            @endif
                            <span id="error-tbldenuncia_id" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          {{ Form::label('fdenuncia', 'Fecha de Denuncia:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            <div class="input-group date">
                              <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                              {{ Form::text('fdenuncia', null, ['class' => 'form-control input-sm datepicker'.($errors->has('fdenuncia')?" is-invalid":""), "autofocus", 'id' => 'fdenuncia', 'autocomplete' => 'off', 'data-date-end-date'=>"0d"]) }}
                            </div>
                            <span id="error-fdenuncia" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          {{ Form::label('fformalizacion', 'Fecha de Formalización:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            <div class="input-group date">
                              <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                              {{ Form::text('fformalizacion', null, ['class' => 'form-control input-sm datepicker'.($errors->has('fformalizacion')?" is-invalid":""), "autofocus", 'id' => 'fformalizacion', 'autocomplete' => 'off']) }}
                            </div>
                            <span id="error-fformalizacion" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          {{ Form::label('tblcomisaria_id', 'Institución:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            {{ Form::select('tblcomisaria_id', $comisarias, null, array('class'=>'form-control input-sm'.($errors->has('tblcomisaria_id')?" is-invalid":""), 'placeholder'=>'Seleccione una Institución', 'style'=>'width: 100%')) }}
                            <span id="error-tblcomisaria_id" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          {{ Form::label('registro_file', 'Archivo de Registro:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            <div class="file-loading">
                              <input id="registro_file" name="registro_file" type="file">
                            </div>
                            @if (isset($denuncia->registro_file) && !empty($denuncia->registro_file))
                              <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> {{ explode("denuncia/",$denuncia->registro_file)[1] }}</span><br>
                            @endif
                            <span id="error-registro_file" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group has-feedback {{ $errors->has('observacion')? 'has-error':'' }}">
                        <div class="row">
                          {{ Form::label('observacion', 'Observacion:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            <div class="input-group">
                              {{ Form::textarea('observacion', null, ['class' => 'form-control input-sm'.($errors->has('observacion')?" is-invalid":""), "autofocus", 'id' => 'observacion', 'autocomplete' => 'off', 'rows' => 4]) }}
                              <div class="input-group-addon"><i class="fa fa-edit"></i></div>
                            </div>
                            <span id="error-observacion" class="invalid-feedback"></span>
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
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_5">
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-1">
                    @if(isset($denuncia) && !empty($denuncia['id']))
                      {!! Form::model($denuncia, [ 'route' => ['denuncia.update', $denuncia->id], 'method' => 'PUT', 'id'=>'form_agresor' ]) !!}
                    @else
                      {!! Form::open([ 'route' => 'denuncia.store', 'id'=>'form_familia' ]) !!}
                    @endif
                      <input type="hidden" name="action" value="familia">
                      <div class="form-group">
                        <div class="row">
                          {{ Form::label('tblinstancia_id', 'Juzgado:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            {{ Form::select('tblinstancia_id', $instancias, null, array('class'=>'form-control input-sm'.($errors->has('tblinstancia_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Juzgado', 'style'=>'width: 100%')) }}
                            <span id="error-tblinstancia_id" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group has-feedback {{ $errors->has('expediente')? 'has-error':'' }}">
                        <div class="row">
                          {{ Form::label('expediente', 'Expediente:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            {{ Form::text('expediente', null, ['class' => 'form-control input-sm'.($errors->has('expediente')?" is-invalid":""), "autofocus", 'id' => 'expediente', 'autocomplete' => 'off']) }}
                            <span id="error-expediente" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          {{ Form::label('calificacion', 'Calificación:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            {{Form::select('calificacion',[''=>'Elegir Calificación','No ha lugar'=>'No ha lugar','Ha lugar'=>'Ha lugar'],null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'calificacion','id'=>'calificacion'))}}
                            <span id="error-calificacion" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          {{ Form::label('hora', 'Hora de Audiencia:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
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
                      <div class="form-group has-feedback {{ $errors->has('ministerio')? 'has-error':'' }}">
                        <div class="row">
                          {{ Form::label('ministerio', 'Audiencia:', ['class' => 'col-sm-4 control-label', 'style' => 'padding-top: 10px;']) }}
                          <div class="col-sm-8">
                            <div class="checkbox icheck">
                              <label class="">
                                <div class="icheckbox_square-blue" style="position: relative;">
                                  @if(isset($denuncia) && !empty($denuncia['id']))
                                    {!! Form::checkbox('ministerio', $denuncia->ministerio, null) !!}
                                  @else
                                    {!! Form::checkbox('ministerio', null, null) !!}
                                  @endif
                                  {{-- <input type="checkbox" name="ministerio" {{ old('ministerio') ? 'checked' : '' }} style="display: block; position: absolute; top: -20%; left: -20%; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins> --}}
                                </div> Ministerio
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          {{ Form::label('faudiencia', 'Fecha de Audiencia Realizada:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            <div class="input-group date">
                              <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                              {{ Form::text('faudiencia', null, ['class' => 'form-control input-sm datepicker'.($errors->has('faudiencia')?" is-invalid":""), "autofocus", 'id' => 'faudiencia', 'autocomplete' => 'off']) }}
                            </div>
                            <span id="error-faudiencia" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          {{ Form::label('medida_file', 'Medida de Protección:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            <div class="file-loading">
                              <input id="medida_file" name="medida_file" type="file">
                            </div>
                            @if (isset($denuncia->medida_file) && !empty($denuncia->medida_file))
                              <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> {{ explode("denuncia/",$denuncia->medida_file)[1] }}</span>
                            @endif
                            <span id="error-medida_file" class="invalid-feedback"></span>
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
                            {{Form::select('remitido',[''=>'Elegir','Archivo Central'=>'Archivo Central','Ministerio Público'=>'Ministerio Público','Juzgado de Paz Letrado'=>'Juzgado de Paz Letrado','Sala Superior'=>'Sala Superior'],null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'remitido','id'=>'remitido'))}}
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
                      <div class="col-sm-4 col-sm-offset-4">
                        <button class="btn btn-outline-primary btn-sm" type="submit"><i class="fa fa-save"></i> Actualizar</button>
                      </div>
                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
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
                      {{-- <div class="form-group">
                        <div class="row">
                          {{ Form::label('dependenciad', 'Dependencia(JUZ PAZ, Ministerio):', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            {{Form::select('dependenciad',[''=>'Elegir','Archivo Central'=>'Archivo Central','Juzgado de Investigación Preparatoria'=>'Juzgado de Investigación Preparatoria'],null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'dependenciad','id'=>'dependenciad'))}}
                            <span id="error-dependenciad" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div> --}}
                      <div id="pl">
                        <div class="form-group">
                          <div class="row">
                            {{ Form::label('dependenciad', 'J. Paz Letrado:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                            <div class="col-sm-8">
                              {{ Form::select('dependenciad', $instanciasPL, null, array('class'=>'form-control input-sm'.($errors->has('dependenciad')?" is-invalid":""), 'placeholder'=>'Seleccione un Juzgado', 'style'=>'width: 100%')) }}
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
                              {{ Form::select('dependenciad', $instanciasMIN, null, array('class'=>'form-control input-sm'.($errors->has('dependenciad')?" is-invalid":""), 'placeholder'=>'Seleccione un Juzgado', 'style'=>'width: 100%')) }}
                              <span id="error-dependenciad" class="invalid-feedback"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group has-feedback {{ $errors->has('expediented')? 'has-error':'' }}">
                        <div class="row">
                          {{ Form::label('expediented', 'Car / Exp:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
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
                          {{ Form::label('jip', 'J. Inv. Preparatoria:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            {{ Form::select('jip', $instanciasJIP, null, array('class'=>'form-control input-sm'.($errors->has('jip')?" is-invalid":""), 'placeholder'=>'Seleccione un Juzgado', 'style'=>'width: 100%')) }}
                            <span id="error-jip" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div>
                      {{-- <div class="form-group">
                        <div class="row">
                          {{ Form::label('jip', 'JIP:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            {{Form::select('jip',[''=>'Elegir','Archivo Central'=>'Archivo Central','Juzgado de Investigación Preparatoria'=>'Juzgado de Investigación Preparatoria'],null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'remitidoj','id'=>'remitidoj'))}}
                            <span id="error-remitidoj" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div> --}}
                      <div class="form-group">
                        <div class="row">
                          {{ Form::label('juzgamiento', 'Juzgamiento', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            {{ Form::select('juzgamiento', $instanciasJP, null, array('class'=>'form-control input-sm'.($errors->has('juzgamiento')?" is-invalid":""), 'placeholder'=>'Seleccione un Juzgado', 'style'=>'width: 100%')) }}
                            <span id="error-juzgamiento" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div>
                      {{-- <div class="form-group">
                        <div class="row">
                          {{ Form::label('juzgamiento', 'Juzgamiento:(JUZ PENAL)', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            {{Form::select('juzgamiento',[''=>'Elegir','Archivo Central'=>'Archivo Central','Juzgado de Investigación Preparatoria'=>'Juzgado de Investigación Preparatoria'],null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'remitidoj','id'=>'remitidoj'))}}
                            <span id="error-remitidoj" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div> --}}
                      <div class="form-group">
                        <div class="row">
                          {{ Form::label('remitidoj', 'Remitir a:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                          <div class="col-sm-8">
                            {{Form::select('remitidoj',[''=>'Elegir','Archivo Central'=>'Archivo Central','Juzgado de Investigación Preparatoria'=>'Juzgado de Investigación Preparatoria'],null,array('class' => 'form-control input-sm'.($errors->has('oficio')?" is-invalid":""),'name'=>'remitidoj','id'=>'remitidoj'))}}
                            <span id="error-remitidoj" class="invalid-feedback"></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group has-feedback {{ $errors->has('oficioremitidoj')? 'has-error':'' }}">
                        <div class="row">
                          {{-- {{ Form::label('oficioremitidoj', 'Oficio(Resolucion):', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }} --}}
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
                      <div class="col-sm-4 col-sm-offset-4">
                        <button class="btn btn-outline-primary btn-sm" type="submit"><i class="fa fa-save"></i> Actualizar</button>
                      </div>
                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('js')
  <script src="{{ asset('assests/js/denuncia/denuncia/denuncia.js') }}"></script>
  <script>
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
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
    $('#tblcomisaria_id').select2();
    $('#tblinstancia_id').select2();
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
      allowedFileExtensions: ['pdf']
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

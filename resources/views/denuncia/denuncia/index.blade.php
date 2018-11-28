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
                  <i class="fa fa-plus"></i> Agregar
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
            </div>
          </div><br>
          
          <div id="content_ajax">
            @include('denuncia.denuncia.ajax')  
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
@endsection
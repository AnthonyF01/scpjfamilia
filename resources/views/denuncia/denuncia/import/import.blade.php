@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Denuncias
@endsection

@section('contentheader_title')
    Denuncias
@endsection

@section('contentheader_subtitle')
    Importar
@endsection

@section('import')
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
              <div class="col-md-6"><i class="fa fa-list-ul"></i> Importar</div>
            </div>
          </div> 
          <div class="box_plus-body">
            <div class="row">
              <div class="col-md-6">
                <input name="_token" type="hidden" id="token" value="{{ csrf_token() }}">
                <em>Agregar los archivos de denuncias, victimas y agresores.</em><br><br>
                <div class="form-group">
                  <label for="input01" class="control-label">Denuncias: </label>
                  <input class="form-control" type="file" name="denuncia" accept=".csv">
                </div>
                <div class="form-group">
                  <label for="input01" class="control-label">Agresores: </label>
                  <input class="form-control" type="file" name="agresor" accept=".csv">
                </div>
                <div class="form-group">
                  <label for="input01" class="control-label">Victimas: </label>
                  <input class="form-control" type="file" name="victima" accept=".csv">
                </div>
                <button type="button" class="btn btn-primary" onclick="loadDFilesDAV()" id="importDAV">Importar</button>
                <button type="button" class="btn" onclick="resetDAV()">Reset</button>
              </div>
              <div class="col-md-6">
                <em>Agregar los archivos de audiencias y remisiones.</em><br><br>
                <div class="form-group">
                  <label for="input01" class="control-label">Audiencias: </label>
                  <input class="form-control" type="file" name="audiencia" accept=".csv">
                </div>
                <button type="button" class="btn btn-primary" onclick="loadDFilesA()" id="importA">Importar</button>
                <button type="button" class="btn" onclick="resetA()">Reset</button><br><br>
                <div class="form-group">
                  <label for="input01" class="control-label">Remisiones: </label>
                  <input class="form-control" type="file" name="remision" accept=".csv">
                </div>
                <button type="button" class="btn btn-primary" onclick="loadDFilesR()" id="importR">Importar</button>
                <button type="button" class="btn" onclick="resetR()">Reset</button>
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
  <script src="{{ asset('assests/js/denuncia/denuncia/report.js') }}"></script>

  <script type="text/javascript">
    function resetDAV() {
      $("input[name=denuncia]").val("");
      $("input[name=agresor]").val("");
      $("input[name=victima]").val("");
      $("#data").html("");
    }

    function resetA() {
      $("input[name=audiencia]").val("");
      $("#data").html("");
    }

    function resetR() {
      $("input[name=remision]").val("");
      $("#data").html("");
    }

    function loadDFilesDAV() {

      $("#importDAV").attr('disabled','disabled');

      var file_denuncia = $('input[name=denuncia]').prop('files')[0];
      var file_agresor = $('input[name=agresor]').prop('files')[0];
      var file_victima = $('input[name=victima]').prop('files')[0];
      var _token = $('input[id=token]').val();
      var form_data = new FormData();
      form_data.append('file_denuncia', file_denuncia);
      form_data.append('file_agresor', file_agresor);
      form_data.append('file_victima', file_victima);
      form_data.append('_token', _token);

      debugger

      if ((typeof file_denuncia !== 'undefined' && (file_denuncia)) && (typeof file_agresor !== 'undefined' && (file_agresor)) && (typeof file_victima !== 'undefined' && (file_victima))) {

        $.ajax({
          url: "/denuncia/importCSV",
          data: form_data,
          type: 'post',
          cache: false,
          contentType: false,
          processData: false,
          success: function(data){
            debugger
            alert(data);
            // $("#data").html(data);
            // $("#importDAV").removeAttr('disabled');
          },
          error: function(xhr,error,status){
            debugger
            $("#importDAV").removeAttr('disabled');
          }
        });
        
      }else{
        alert("Debe agregar los archivos correspondientes a la denuncia, victima y agresor.");
        return false;
      }

    }

    function loadDFilesA() {

      $("#importA").attr('disabled','disabled');

      var file_audiencia = $('input[name=audiencia]').prop('files')[0];
      var form_data = new FormData();
      form_data.append('file_audiencia', file_audiencia);

      debugger

      if ((typeof file_audiencia !== 'undefined' && (file_audiencia))) {

        $.ajax({
          url: '../import/import.php',
          dataType: "text",
          cache: false,
          contentType: false,
          processData: false,
          data: form_data,
          type: 'post',
          success: function(data){
            debugger
            alert(data);
            $("#data").html(data);
            $("#importA").removeAttr('disabled');
          },
          error: function(xhr,error,status){
            debugger
            $("#importA").removeAttr('disabled');
          }
        });
        
      }else{
        alert("Debe agregar el archivo de audiencia.");
        return false;
      }

    }

    function loadDFilesR() {

      $("#importR").attr('disabled','disabled');

      var file_remision = $('input[name=remision]').prop('files')[0];
      var form_data = new FormData();
      form_data.append('file_remision', file_remision);

      debugger

      if ((typeof file_remision !== 'undefined' && (file_remision))) {

        $.ajax({
          url: '../import/import.php',
          dataType: "text",
          cache: false,
          contentType: false,
          processData: false,
          data: form_data,
          type: 'post',
          success: function(data){
            debugger
            alert(data);
            $("#data").html(data);
            $("#importR").removeAttr('disabled');
          },
          error: function(xhr,error,status){
            debugger
            $("#importR").removeAttr('disabled');
          }
        });
        
      }else{
        alert("Debe agregar el archivo de remision.");
        return false;
      }

    }
  </script>

@endsection
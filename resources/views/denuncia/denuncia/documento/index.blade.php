@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Documentos Digitalizados 
@endsection

@section('contentheader_title')
  Documentos Digitalizados 
@endsection

@section('contentheader_subtitle')
  Digitalizar Documento
@endsection

@section('documento')
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
@endsection

@section('main-content')

<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">
      <div id="content_ajax">
        @include('denuncia.denuncia.documento.ajax')  
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
  <script src="{{ asset('assests/js/denuncia/denuncia/documento.js') }}"></script>
@endsection
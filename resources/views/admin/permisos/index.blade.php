@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Permisos
@endsection

@section('contentheader_title')
    Permisos
@endsection

@section('permisos')
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
    .row label.documentos{
        font-size: 11px;
    }
    .row label input.check {
        cursor: pointer;
        float: left;
        margin-top: 0px;
        margin-right: 4px;
        cursor: pointer;
        padding: 0px;
        width: 15px;
        height: 15px;
        display: inline;
    }
    .documento_select {
        background-color: #E8EAFF;
    }
    .dd3-handle {
        background-color: #333333;
    }
    .dd3-content:hover {
        color: #A00001;
    }
    .dd3-content{
        text-align: left;
        padding: 5px 10px 5px 5px;
    }

    .alert-info {
        color: #31708f !important;
        background-color: #d9edf7 !important;
        border-color: #bce8f1;
    }
  </style>
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">
                <div id="content_ajax">
                    @include('admin.permisos.ajax')
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
  <script src="{{ asset('assests/js/admin/permisos/permisos.js') }}"></script>
@endsection

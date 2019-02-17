@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Tipos de denuncia
@endsection

@section('contentheader_title')
	Tipos de denuncia
@endsection

@section('contentheader_subtitle')
    Editar Tipos de denuncia
@endsection

@section('tbldenuncia')
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

	    	@include('tablas.tbldenuncia.ajax')	

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
  <script src="{{ asset('assests/js/tablas/tbldenuncia/tbldenuncia.js') }}"></script>
@endsection
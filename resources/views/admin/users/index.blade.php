@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Usuarios
@endsection

@section('contentheader_title')
	Usuarios
@endsection

@section('contentheader_subtitle')
    Editar Usuarios
@endsection

@section('users')
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

	    	@include('admin.users.ajax')	

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
  <script src="{{ asset('assests/js/admin/users/users.js') }}"></script>
@endsection
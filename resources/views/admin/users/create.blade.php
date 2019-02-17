@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Categorías
@endsection

@section('contentheader_title')
    Categorías
@endsection

@section('users')
    active
@endsection

@section('main-content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box_plus box_plus-default ">
        <div id="box_plus-title" class="box_plus-heading">Crear Categoría</div>
        <div class="box_plus-body">
          {!! Form::open(['route' => 'users.store']) !!}

            {{-- @include('admin.almacen.users.partials.form') --}}
              
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
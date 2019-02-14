@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('home')
	active
@endsection

@section('main-content')
<div style="margin: 0 15px">
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $users }}</h3>

          <p>Usuarios registrados</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $denuncias }}</h3>
          <p>Expedientes registrados</p>
        </div>
        <div class="icon">
          <i class="fa fa-clipboard"></i>
        </div>
        <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-light-blue">
        <div class="inner">
          <h3>{{ $victimas }}</h3>
          <p>Denunciantes</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{ $agresores }}</h3>

          <p>Denunciados</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
</div>
  {{-- <div class="container-fluid spark-screen">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">


        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Inicio</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                {{ trans('adminlte_lang::message.logged') }}. Start creating your amazing application!
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </div>
    </div>
  </div> --}}
@endsection

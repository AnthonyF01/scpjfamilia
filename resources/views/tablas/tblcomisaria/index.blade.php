@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Instituciones
@endsection

@section('contentheader_title')
    Instituciones
@endsection

@section('contentheader_subtitle')
    Editar Instituciones
@endsection

@section('tblcomisaria')
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
              @include('tablas.tblcomisaria.ajax')
                </div>
            </div>
        </div>
    </div>

    <div class="loading" style="display: none;">
      <i class="fa fa-refresh fa-spin fa-2x fa-tw"></i>
      <br>
      <span>Loading</span>
    </div>

    <div class="modal fade" id="showModalMapa" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="col-xs-12 col-md-12 col-lg-12">
              <div class="row">
                  <div class="panel panel-info">
                      <div class="panel-heading">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="fa fa-times-circle"></span>
                        </button>
                        <span id="span-title" style="font-size: 14px; font-weight: bold"></span>
                      </div>
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12" id="modal_message">
                                <div class="alert alert-warning">
                                  <button type="button" class="close" onclick="$('div#modal_message').removeClass('show'); $('div#modal_message').addClass('hide');">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <div id="show_message" style="font-weight: bold;"></div>
                                </div>
                              </div>

                              <form id="form-geolocalizacion">
                              </form>
                              <div class="col-md-12 col-lg-12 col-xs-12">
                                  {!! csrf_field() !!}
                                  <div id="map" style="min-width: 100%; max-width: 100%; height: 450px; margin: 0 auto;">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('js')
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqWkugYzfAI4tg9Hy0QkM2xhx6HfNxMkQ"></script>
  <script type="text/javascript">
    URLs="{{ url('/') }}";
  </script>
  <script src="{{ asset('assests/js/tablas/tblcomisaria/tblcomisaria.js') }}"></script>
@endsection

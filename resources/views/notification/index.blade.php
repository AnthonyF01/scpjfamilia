@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Notifiaciones
@endsection

@section('contentheader_title')
	Notifiaciones
@endsection

@section('contentheader_subtitle')
    Editar Notifiaciones
@endsection

@section('notification')
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
    #style-1::-webkit-scrollbar {
      width: 8px;
      background-color: #F5F5F5;
    }
    #style-1::-webkit-scrollbar-thumb {
      border-radius: 10px;
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
      background-color: #666;
    }
  </style>
@endsection

@section('main-content')
	
<div class="container-fluid spark-screen">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">
			<div id="content_ajax">

	    	{{-- @include('notification.ajax')	 --}}
        <div class="box_plus box_plus-default ">
          <div id="box_plus-title" class="box_plus-heading">
            <div class="row">
              <div class="col-md-6"><i class="fa fa-list-ul"></i> Notificaciones</div>
            </div>
          </div> 
          <div class="box_plus-body">
            <div class="row">
              <div id="style-1" class="col-md-4" style="height: 500px; overflow-y: scroll;">
                {{-- <div class="thumbnail">
                  <div class="caption">
                    <div class="row">
                      <span style="float: left; margin:-4px 15px 4px 15px;" class="btn btn-outline-primary btn-xs">Mostrar</span>
                      <span style="float: right; margin:0px 15px 9px 15px;"> 15 noviembre 2018 12:44 pm.</span>
                    </div>
                    <div class="row">
                      <div class='col-lg-12 col-md-12 col-ms-12 well-add-card' style="border-top: 1px solid #ccc">
                        <h4 style="font-weight: bold">Titulo de la notificacion</h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class='col-lg-12 col-md-12 col-ms-12'>
                        <p style="color: #777">Descripcion de la notificacion. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class='col-lg-6 col-md-6 col-ms-6' style="border-bottom: 1px solid #ccc">
                        <p style="margin-bottom: 5px">Latitud: -17.215487</p>
                        <p style="margin-bottom: 5px">Nombre: Maria Perez</p>
                      </div>
                      <div class='col-lg-6 col-md-6 col-ms-6' style="border-bottom: 1px solid #ccc; margin-bottom: 15px">
                        <p style="margin-bottom: 5px">Longitud: -70.326518</p>
                        <p style="margin-bottom: 5px">Telefono: 965986598</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class='col-lg-12 col-md-12 col-ms-12'>
                        <span style="border-radius: 5px; padding: 5px 10px;" class="bg-green">Atendido</span>
                        <span style="border-radius: 5px; padding: 5px 10px;" class="bg-blue">En atención</span>
                        <span style="border-radius: 5px; padding: 5px 10px;" class="bg-red">Pendiente</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="thumbnail">
                  <div class="caption">
                    <div class="row">
                      <span style="float: left; margin:-4px 15px 4px 15px;" class="btn btn-outline-primary btn-xs">Mostrar</span>
                      <span style="float: right; margin:0px 15px 9px 15px;"> 15 noviembre 2018 12:44 pm.</span>
                    </div>
                    <div class="row">
                      <div class='col-lg-12 col-md-12 col-ms-12 well-add-card' style="border-top: 1px solid #ccc">
                        <h4 style="font-weight: bold">Titulo de la notificacion</h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class='col-lg-12 col-md-12 col-ms-12'>
                        <p style="color: #777">Descripcion de la notificacion. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class='col-lg-6 col-md-6 col-ms-6' style="border-bottom: 1px solid #ccc">
                        <p style="margin-bottom: 5px">Latitud: -17.215487</p>
                        <p style="margin-bottom: 5px">Nombre: Maria Perez</p>
                      </div>
                      <div class='col-lg-6 col-md-6 col-ms-6' style="border-bottom: 1px solid #ccc; margin-bottom: 15px">
                        <p style="margin-bottom: 5px">Longitud: -70.326518</p>
                        <p style="margin-bottom: 5px">Telefono: 965986598</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class='col-lg-12 col-md-12 col-ms-12'>
                        <span style="border-radius: 5px; padding: 5px 10px;" class="bg-green">Atendido</span>
                        <span style="border-radius: 5px; padding: 5px 10px;" class="bg-blue">En atención</span>
                        <span style="border-radius: 5px; padding: 5px 10px;" class="bg-red">Pendiente</span>
                      </div>
                    </div>
                  </div>
                </div> --}}

                {{-- get array natifications --}}
                <input id="notificationsArr" type="hidden" value="{{ $notifications->toJson() }}">
                <input id="ubicacion" type="hidden" value="{{ $ubicacion }}">
                
                @if(!$notifications->isEmpty())
                  @foreach($notifications as $notification)
                    <div class="thumbnail">
                      <div class="caption">
                        <div class="row">
                          <span style="float: left; margin:-4px 15px 4px 15px;" class="btn btn-outline-primary btn-xs">Mostrar</span>
                          <span style="float: right; margin:0px 15px 9px 15px;">
                            {{date('d/m/Y h:i',strtotime($notification->created_at))}} hrs</span>
                        </div>
                        <div class="row">
                          <div class='col-lg-12 col-md-12 col-ms-12 well-add-card' style="border-top: 1px solid #ccc">
                            <h4 style="font-weight: bold">{{$notification->title}}</h4>
                          </div>
                        </div>
                        <div class="row">
                          <div class='col-lg-12 col-md-12 col-ms-12'>
                            <p style="color: #777">{{$notification->body}}.</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class='col-lg-6 col-md-6 col-ms-6' style="border-bottom: 1px solid #ccc">
                            <p style="margin-bottom: 5px">Latitud: {{$notification->lat}}</p>
                            <p style="margin-bottom: 5px">Nombre: {{$notification->nombre}}</p>
                          </div>
                          <div class='col-lg-6 col-md-6 col-ms-6' style="border-bottom: 1px solid #ccc; margin-bottom: 15px">
                            <p style="margin-bottom: 5px">Longitud: {{$notification->lng}}</p>
                            <p style="margin-bottom: 5px">Telefono: {{$notification->fono}}</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class='col-lg-12 col-md-12 col-ms-12'>
                            @if ($notification->state == 1)
                              <span style="border-radius: 5px; padding: 5px 10px;" class="bg-green">Atendido</span>
                            @endif
                            @if ($notification->state == 0)
                              <span style="border-radius: 5px; padding: 5px 10px;" class="bg-red">Pendiente</span>
                            @endif
                            @if ($notification->state == 2)
                              <span style="border-radius: 5px; padding: 5px 10px;" class="bg-blue">En atención</span>
                            @endif
                            @if (isset($notification->name))
                              <span style="border-radius: 5px; padding: 5px 10px;" class="bg-blue">{{$notification->name}}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                @else
                  No hay notificaciones
                @endif

              </div>
              <div class="col-md-8">
                <!-- MAP -->
                <div class="thumbnail" id="widget">
                    <div class="map_canvas" id="mapa" style="height: 500px; "></div>
                </div>
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
  <script src="{{ asset('assests/js/notification/notification.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqWkugYzfAI4tg9Hy0QkM2xhx6HfNxMkQ"></script>
  <script src="{{ asset('adminlte245/plugins/maps/infobox.js') }}"></script>
  <script type="text/javascript">

    function loadMap(jsonMAP) {

      // lima: -12.043974, -77.043270
      // tacna: -18.013164, -70.250465

      var ubicacion = $("#ubicacion").val();
      if (ubicacion == '23') {
        var map = new google.maps.Map(document.getElementById('mapa'), {
            center: new google.maps.LatLng(-18.013164, -70.250465),
            zoom: 13
        });
      }else{
        var map = new google.maps.Map(document.getElementById('mapa'), {
            center: new google.maps.LatLng(-12.043974, -77.043270),
            zoom: 13
        });
      }

      var infoWindow = new google.maps.InfoWindow;

      var colorCircle = ['#215967','#403151','#002060','#F20000','#494529','#E26B0A','#700000','#007033','#3379CD','#7030A0','#963634','#92D050','#494529','#CC9900','#009999'];
      var counter = 0;

      // var jsonMAP = [];
      // var item = {};
      // item.nombre = 'Nombre';
      // item.total = 10;
      // item.lat = -18.04661;
      // item.lng = -70.24653;
      // jsonMAP.push(item);
      // console.log(jsonMAP);

      $.each(jsonMAP, function(key, data) {
          console.log(data.lat);
          var mylatlng = new google.maps.LatLng(parseFloat(data.lat), parseFloat(data.lng));
          // var mylatlng = new google.maps.LatLng(-18.04661, -70.24653);

          // Creating a marker and putting it on the map
          var marker = new google.maps.Marker({
              position: mylatlng,
              clickable:true, 
              map:map, 
              animation:google.maps.Animation.DROP,
              // icon: {
              //     path: google.maps.SymbolPath.CIRCLE,
              //     fillOpacity: 0.5,
              //     fillColor: '#ff0000',
              //     strokeOpacity: 1.0,
              //     strokeColor: '#fff000',
              //     strokeWeight: 3.0, 
              //     scale: 20 //pixels
              // }
          });

          if (data.state == 0) {
            marker.setIcon('/assests/img/icons/red-marker2.png');
          }
          if (data.state == 1) {
            marker.setIcon('/assests/img/icons/green-marker2.png');
          }
          if (data.state == 2) {
            marker.setIcon('/assests/img/icons/blue-marker2.png');
          }

          var infowincontent = document.createElement('div');

          var strong = document.createElement('strong');
          strong.textContent = "Nombre: ";
          infowincontent.appendChild(strong);
          var text = document.createElement('text');
          text.textContent = data.nombre;
          infowincontent.appendChild(text);

          infowincontent.appendChild(document.createElement('br'));
          
          var strong = document.createElement('strong');
          strong.textContent = "Telefono: ";
          infowincontent.appendChild(strong);
          var text = document.createElement('text');
          text.textContent = data.fono;
          infowincontent.appendChild(text);

          marker.setMap(map);
          // marker.setIcon('http://maps.google.com/mapfiles/ms/icons/green-dot.png');
          marker.addListener('click', function() {
              infoWindow.setContent(infowincontent);
              infoWindow.open(map, marker);
          });

          // add circles
          /*var circle = new google.maps.Circle({
              strokeColor: colorCircle[counter],
              strokeOpacity: 0.8,
              strokeWeight: 2,
              fillColor: colorCircle[counter],
              fillOpacity: 0.9,
              map: map,
              center: {lat: data.lat, lng: data.lon},
              radius: 500
          });
          // text to circle
          var infowincontent = document.createElement('div');
          var strong = document.createElement('strong');
          strong.textContent = data.nombre;
          infowincontent.appendChild(strong);
          infowincontent.appendChild(document.createElement('br'));
          var text = document.createElement('text');
          text.textContent = data.total;
          infowincontent.appendChild(text);
          circle.addListener('click', function() {
              infoWindow.setContent(infowincontent);
              infoWindow.open(map, circle);
          });*/

          // text inner circles
          /*var myOptions = {
              content: data.total,
              boxStyle: {
                  // background: transparent,
                  color: '#fff',
                  textAlign: "center",
                  fontSize: "9pt",
                  fontWeight: 'bold',
                  width: "50px"
              },
              disableAutoPan: true,
              pixelOffset: new google.maps.Size(-25, -10), // left upper corner of the label
              position: new google.maps.LatLng(data.lat,data.lon),
              closeBoxURL: "",
              isHidden: false,
              pane: "floatPane",
              zIndex: 100,
              enableEventPropagatiºon: true
          };
          var ib = new InfoBox(myOptions);

          ib.open(map);*/

          counter++;

      });
      
    }

  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      var ntArr = $.parseJSON($('#notificationsArr').val());
      console.log(ntArr);
      loadMap(ntArr);
    });
  </script>
@endsection
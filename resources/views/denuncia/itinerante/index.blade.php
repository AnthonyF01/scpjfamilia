@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Justicia Itinerante
@endsection

@section('contentheader_title')
    Justicia Itinerante
@endsection

@section('jitinerante')
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
    .box.cld{
      border-radius: 3px !important;
      border-top-width: 3px !important;
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
              @can('denuncia.jicreate')
                <a href="{{ route('denuncia.jicreate') }}" class="btn btn-xs btn-outline-primary pull-right">
                  <i class="fa fa-plus"></i> Agregar Nuevo Registro de Denuncia
                </a>
              @endcan
            </div>
          </div>
        </div>
        <div class="box_plus-body">
          <div class="row">

            <div class="col-md-12">
              <div class="box cld box-primary">
                <div class="box-body">
                  <!-- THE CALENDAR -->
                  <div id="calendar"></div>
                </div>
                <!-- /.box-body -->
              </div><br>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <div class="row">
                  {{ Form::label('tblcomisaria_id', 'Comisaría:', ['class' => 'col-sm-4 control-label', 'style' => 'line-height:30px']) }}
                  <div class="col-sm-8">
                    {{ Form::select('tblcomisaria_id', $comisarias, Session::get('tblcomisaria_id'), array('class'=>'form-control input-sm'.($errors->has('tblcomisaria_id')?" is-invalid":""), 'placeholder'=>'Seleccione una Comisaría', 'style'=>'width: 100%', 'onChange'=>'showRowC(this)')) }}
                    <span id="error-tblcomisaria_id" class="invalid-feedback"></span>
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
            </div>

            <div class="col-md-6">
              
              <div class="form-group has-feedback ">
                <div class="row">
                  <label for="oficio" class="col-sm-4 control-label" style="line-height:30px">Código Denuncia:</label>
                  <div class="col-sm-8">
                    <div class="input-group">
                      <input class="form-control input-sm" autofocus="autofocus" id="search" value="{{ request()->session()->get('search') }}" onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('denuncia/jitinerante/index')}}?search='+this.value)" placeholder="Buscar..." name="search" type="text"/>
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-primary" onclick="ajaxLoad('{{url('denuncia/jitinerante/index')}}?search='+$('input#search').val())">
                          <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group has-feedback ">
                <div class="row">
                  <label for="dni" class="col-sm-4 control-label" style="line-height:30px">DNI:</label>
                  <div class="col-sm-8">
                    <select id="selectVictima" class="form-control" name="selectVictima"></select>
                  </div>
                </div>
              </div>
            </div>

            <div id="content_ajax">
              @include('denuncia.itinerante.ajax')   
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
  <script type="text/javascript">
    var date1 = "{{ request()->session()->get('fecha1') }}";
    var date2 = "{{ request()->session()->get('fecha2') }}";
    var chk = {{ Session::get('checked') }};
  </script>
  <script type="text/javascript">
    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    var calendar = $('#calendar').fullCalendar({
      locale: 'es',
      themeSystem: 'bootstrap4',
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay,listWeek'
      },
      aspectRatio: 1.605,
      columnHeaderFormat:'dddd',
      height: 510,
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      defaultView: 'agendaWeek',
      minTime: "8:00:00",
      maxTime: "18:00:00",
      selectable: true,
      allDaySlot: true,
      defaultEventMinutes: 120,
      slotLabelFormat: 'HH:mm a',
      weekNumbers: true,
      weekNumbersWithinDays: true,
      selectHelper:true,
      nowIndicator:true,


      buttonText: {
        today: 'Hoy',
        month: 'Mes',
        week : 'Semana',
        listweek : 'Agenda',
        day  : 'Día'
      },
      //Random default events
      events    : [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954' //red
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Reunión',
          start          : new Date(y, m, d, 11, 0),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Almuerzo',
          start          : new Date(y, m, d, 13, 30),
          end            : new Date(y, m, d, 14, 30),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Itinerancia-Audiencia en comisaria',
          start          : new Date(y, m, d + 1, 15, 0),
          end            : new Date(y, m, d + 1, 16, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'http://google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }

      }
    })
  </script>
  <script type="text/javascript">
    // fix button calendar
    $(document).ready(function() {
      $(".fc-listWeek-button").text("Agenda");
    });
  </script>
  <script src="{{ asset('assests/js/denuncia/itinerante/itinerante.js') }}"></script>
@endsection
<html>
<!-- <![endif]-->

<head>
    <title>SISTEMA DE MONITOREO JUDICIAL</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('menu/css/lib/bootstrap.min.css') }}">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- style material design -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <!--Hojas de estilo local -->
    <link rel="stylesheet" href="{{ asset('menu/css/system.css') }}">
    <link rel="stylesheet" href="{{ asset('menu/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('menu/img/favicon.ico') }}">
</head>

<body class="loginWrapper" cz-shortcut-listen="true">
    <div class="menuNavTop">
        <div class="container" id="header1">
            <img src="{{ asset('menu/img/logo_pj.png') }}" height="50px" style="border: 0px;">
            <img src="{{ asset('menu/img/pj_vm2.png') }}" height="50px" style="border: 0px; float: right;">
        </div>
    </div>
    <div class="menuNav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Poder Judicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Introduccion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Instrumentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Directorio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Actividades</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-login">Iniciar  Sesión</button>
                </form>
            </div>
            <button class="navbar-toggler btn-sm" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
    <header class="int-head intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" id="img-place">
                    <div class="site-heading">
                        <h1>PROGRAMA DE IMPLEMENTACIÓN DE LA LEY N° 30364</h1>
                        <hr class="small">
                        <span class="subheading">La justicia es absolutamente nula si no se encuentra en la
                            naturaleza</span>
                    </div>
                </div>
            </div>
        </div>


    </header>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="content_table">
                    <h2>Cuadro estadístico de ingresos de denuncias y tiempos de trámite</h2>
                    <!-- <p>The .table-condensed class makes a table more compact by cutting cell padding in half:</p> -->
                    <div class="">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Distrito Judicial</th>
                                    <th title="Ingresos de Denuncias">I. Denuncias</th>
                                    <th title="Tiempos de Trámite">T. Trámite</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($deps as $dep)
                                <tr>
                                    <td>{{ $dep->nombre }}</td>
                                    <td>{{ $dep->total}}</td>
                                    <td>{{ $dep->tramite}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div id="chartdiv" style="padding: 0 60px;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ingrese sus credenciales</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" style="padding-top: 0px;">
                    <form method="post" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div id="result" class="alert alert-success text-center" style="display: none;"> 
                            Logged in! <i class="fa fa-refresh fa-spin"></i> Entering...
                        </div> 
                        {{-- <div class="form-group">
                            <label for="exampleInputEmail1">Distrito Judicial</label>
                        </div> --}}
                        <div class="form-group has-feedback {{ $errors->has('email')? 'has-error':'' }}">
                            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" autofocus="autofocus" class="form-control" required autofocus> <span class="glyphicon form-control-feedback glyphicon-envelope"></span> @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div> 
                        <div class="form-group has-feedback">
                            <input type="password" placeholder="Contraseña" name="password" class="form-control"> <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div> 
                        <div class="row">
                            {{-- <div class="col-md-6">
                                <div class="checkbox icheck">
                                    <label class="">
                                        <div class="icheckbox_square-blue" style="position: relative;">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} style="display: block; position: absolute; top: -20%; left: -20%; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div> Recuérdame
                                    </label>
                                </div>
                            </div>  --}}
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('menu/js/jquery.min.js') }}"></script>
    <script>
    if ( /*@cc_on!@*/ false && document.documentMode === 10) {
        document.documentElement.className += ' ie ie10';
    }

    </script>
    <script src="{{ asset('menu/js/lib/bootstrap.min.js') }}"></script>
    <!-- armchart scripts -->
    <script src="{{ asset('menu/js/lib/amcharts/core.js') }}"></script>
    <script src="{{ asset('menu/js/lib/amcharts/charts.js') }}"></script>
    <script src="{{ asset('menu/js/lib/amcharts/maps.js') }}"></script>
    <script src="{{ asset('menu/js/lib/amcharts/themes/animated.js') }}"></script>
    <script src="https://www.amcharts.com/lib/version/geodata/4.1.7/peruLow.js"></script>
    <script src="https://www.amcharts.com/lib/version/geodata/4.1.7/peruHigh.js"></script>
    <!-- internal functions -->
    <script src="{{ asset('menu/js/samu.funciones.sistema.js') }}"></script>
    <script src="{{ asset('menu/js/samu.validacion.login.js') }}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
    
    <script type="text/javascript">
        $("#displayModal").on('click', function() {
            $('#myModal').modal('show');
        });
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

    <script type="text/javascript">
        am4core.useTheme(am4themes_animated);
        var map = am4core.create("chartdiv", am4maps.MapChart);
        map.geodata = am4geodata_peruHigh;

        /*charge type map*/
        map.projection = new am4maps.projections.Miller();

        var polygonSeries = map.series.push(new am4maps.MapPolygonSeries());

        polygonSeries.heatRules.push({
          property: "fill",
          target: polygonSeries.mapPolygons.template,
          min: map.colors.getIndex(1).brighten(1),
          max: map.colors.getIndex(1).brighten(-0.3)
        });

        polygonSeries.useGeodata = true;

        /*disable zoom*/
        map.maxZoomLevel = 1;

        /*disable draggable*/
        map.seriesContainer.draggable = false;

        var polygonTemplate = polygonSeries.mapPolygons.template;

        let heatLegend = map.createChild(am4maps.HeatLegend);
        heatLegend.minColor = am4core.color("#d15a5a");
        heatLegend.maxColor = am4core.color("#690808");
        heatLegend.orientation = "horizontal";
        heatLegend.series = polygonSeries;
        heatLegend.align = "right";
        heatLegend.valign = "bottom";
        heatLegend.width = am4core.percent(20);
        heatLegend.marginRight = am4core.percent(4);
        heatLegend.minValue = 0;
        heatLegend.maxValue = 40000000;

        var minRange = heatLegend.valueAxis.axisRanges.create();
        minRange.value = heatLegend.minValue;
        minRange.label.text = "Bajo";
        var maxRange = heatLegend.valueAxis.axisRanges.create();
        maxRange.value = heatLegend.maxValue;
        maxRange.label.text = "Alto";

        /*tooltip text*/
        polygonTemplate.tooltipHTML =
            '<button type="button" class="btn btn-outline-light btn-sm dep" data-toggle="modal" data-target="#modal-login" onclick="loc();" name={name}>Loguear al sistema de familia {name}</button>';

        polygonSeries.calculateVisualCenter = true;
        polygonTemplate.tooltipPosition = "fixed";
        polygonSeries.tooltip.label.interactionsEnabled = true;
        polygonSeries.tooltip.keepTargetHover = true;
        polygonSeries.tooltip.background.strokeOpacity = 0;
        polygonSeries.tooltip.pointerOrientation = "vertical";
        polygonSeries.tooltip.label.textAlign = "middle";
        polygonSeries.tooltip.label.textValign = "middle";
        polygonSeries.tooltip.background.fill = am4core.color("#d15a5a");

        polygonTemplate.fill = am4core.color("#dc3545");

        var hs = polygonTemplate.states.create("hover");
        hs.properties.fill = am4core.color("rgb(150, 15, 4)");

        polygonSeries.exclude = ["PE-LKT"];

        polygonSeries.data = [
            {
                "id": "PE-LIM",
                "fill": am4core.color("#730808")
            },
            {
                "id": "PE-CAL",
                "name": "Callao - Ventanilla",
                "fill": am4core.color("#d15a5a")
            },{
                "id": "PE-TAC",
                "fill": am4core.color("#730808")
            }];

        polygonTemplate.propertyFields.fill = "fill";

    </script>
    <script type="text/javascript">
        function loc(){
            var x = document.getElementsByClassName('dep');
            var y =x[0].name;

            var c = document.getElementsByClassName('modal-header');
            var x2 =  document.createElement("h2");
            x2.innerText = y.toString();
            alert(y);
            c.appendChild(x2);
        }
    </script>
    <script data-id="App.Config">
        var App = {};
        var basePath = '',
            commonPath = '../assets/',
            rootPath = '../',
            DEV = false,
            componentsPath = '../assets/components/';
        var primaryColor = '#3695d5',
            dangerColor = '#b55151',
            successColor = '#609450',
            infoColor = '#4a8bc2',
            warningColor = '#ab7a4b',
            inverseColor = '#45484d';
        var themerPrimaryColor = primaryColor;
    </script>
</body>

</html>

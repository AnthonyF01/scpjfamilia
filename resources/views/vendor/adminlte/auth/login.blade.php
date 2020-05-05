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
    {{-- <link rel="stylesheet" href="{{ asset('menu/css/style.css') }}"> --}}
    <link rel="shortcut icon" href="{{ asset('menu/img/favicon.ico') }}">
</head>

<style type="text/css">
    body {
        /*background-color: rgb(204,0,102);*/
        {{-- background-image: url("{{ asset('menu/img/image2.png') }}"); --}}
        background-image: url("{{ asset('menu/img/palacio2.webp') }}");
        padding: 0px 15px 15px 15px;
    }
    .line {
        background-color: #fff;
        padding: 10px;
        /*margin-top: 100px;*/
        background-image: linear-gradient(-90deg, rgb(173,0,86), white 50%);
    }
    .container img {
        margin-right: 10px;
    }
    .counter {
        background-color: #fff;
        padding: 20px;
        font-size: 10px
    }
    .counter h6{
        font-size: 1.3em;
        font-weight: bold;
    }
    .counter .dr{
        color: red;
    }
    .counter .mp{
        color: green;
    }
    .t1 {
        font-size: 80px;
        font-weight: bold;
        color: #ccc;
    }
    .d1 {
        /*font-size: 60px;*/
        color: #ccc;
        margin-bottom: 30px;
    }
    .btn.a {
        width: 180px;
        margin-right: 10px;
        color: rgb(204,0,102);
        font-weight: bold;
    }
    .btn.a.b {
        background-color: white;
    }
    .btn-danger.ts{
        margin-bottom: 20px;
        background-color: #c30618;
    }
    .btn-success.ts{
        margin-bottom: 20px;
        background-color: #038220;
    }
</style>

<body class="loginWrapper" cz-shortcut-listen="true">
    <div class="container">
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3 counter">
                <h6 class="dr">Denuncias Registradas</h6>
                <h6 class="mp">Medidas de Protección</h6>
            </div>
        </div>
    </div>
    <div class="row line">
        <div class="col-md-12">
            <div class="container">
                <img src="{{ asset('menu/img/logo_pj.png') }}" height="50px" style="border: 0px;">
                <img src="{{ asset('menu/img/pj_vm2.png') }}" height="50px" style="border: 0px;">
                <img src="{{ asset('menu/img/justicia_genero.png') }}" height="50px" style="border: 0px;">
                <img src="{{ asset('menu/img/ppr_familia.png') }}" height="50px" style="border: 0px;">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9" style="padding-top: 50px">
                <h1 class="t1">SITRAD - VF</h1>
                <h1 class="d1">Sistema  Interoperable  de Trámite de Denuncias de Violencia Familiar con aplicación de la Ley Nro. 30364</h1>
                <button class="btn btn-default a">Protocolo - Proceso</button>
                <button class="btn btn-default a">Manual de Usuario</button>
                <button class="btn a b" data-toggle="modal" data-target="#modal-login" type="button" >INICIO SESIÓN</button>
            </div>
            <div class="col-md-3" style="background-color: #fff;">
                <img src="{{ asset('menu/img/no_violencia_genero-min.webp') }}" width="100%" style="border: 0px; margin-top: 20px; margin-bottom: 20px;">
                <button class="btn btn-danger btn-block ts">
                    <span class="glyphicon glyphicon-list"></span>
                    Denuncia <br><span>Formulario de Denuncia</span>
                </button>
                <button class="btn btn-success btn-block ts">Seguimiento <br><span>Medida de Protección</span>
                     <span class="glyphicon glyphicon-list-alt"></span>
                </button>
                <h5 style="color: rgb(204,0,102); float: left; line-height: 50px; font-weight: bold">COMUNICATE</h5>
                <img src="{{ asset('menu/img/telefono.png') }}" width="50px" style="float: right; border: 0px;">
                <img src="{{ asset('menu/img/whatsapp.png') }}" width="45px" style="float: right; border: 0px;">

            </div>
        </div>
    </div>

</body>

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
<script src="{{ asset('menu/js/lib/bootstrap.min.js') }}"></script>
<!-- internal functions -->
<script src="{{ asset('menu/js/samu.funciones.sistema.js') }}"></script>
<script src="{{ asset('menu/js/samu.validacion.login.js') }}"></script>
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

</html>

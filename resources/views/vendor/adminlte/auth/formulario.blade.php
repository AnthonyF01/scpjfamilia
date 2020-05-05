<!DOCTYPE html>
<html lang="es">

<!-- Mirrored from demo.themefisher.com/bizcraft/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2020 07:41:43 GMT -->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>SITRAD - VF</title>
    <meta name="description" content="">    
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons
    ================================================== -->
    <link rel="icon" href="{{ asset('menu/img/asociacion_logo_color.png') }}" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('menu/img/asociacion_logo_color.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('menu/img/asociacion_logo_color.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('menu/img/asociacion_logo_color.png') }}">
    
    <!-- CSS
    ================================================== -->
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('bizcraft/css/bootstrap.min.css') }}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ asset('bizcraft/css/style.css') }}">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="{{ asset('bizcraft/css/responsive.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('bizcraft/css/font-awesome.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('bizcraft/css/animate.css') }}">
    <!-- Prettyphoto -->
    <link rel="stylesheet" href="{{ asset('bizcraft/css/prettyPhoto.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('bizcraft/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('bizcraft/css/owl.theme.css') }}">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{ asset('bizcraft/css/flexslider.css') }}">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{ asset('bizcraft/css/cd-hero.css') }}">
    <!-- Style Swicther -->
    <link id="style-switch" href="{{ asset('bizcraft/css/presets/preset3.css') }}" media="screen" rel="stylesheet" type="text/css">
    <!-- Style Swicther -->
    <link id="style-switch" href="{{ asset('bizcraft/css/formularioweb.css') }}" media="screen" rel="stylesheet" type="text/css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="body-inner">
    
    <!-- Header start -->
    <header id="header" class="navbar-fixed-top header" role="banner">
        <div class="container">
            <div class="row">
                <!-- Logo start -->
                <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand navbar-bg">
                        <a href="{{ url('/') }}">
                            {{-- <img class="img-responsive" src="{{ asset('menu/img/asociacion_blanco.png') }}" alt="logo"> --}}
                            <img class="img-responsive" src="{{ asset('menu/img/pj_logo_texto.png') }}" alt="logo">
                        </a> 
                    </div>                   
                </div><!--/ Logo end -->
                <nav class="collapse navbar-collapse clearfix" role="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/') }}">INCIO</a></li>
                        {{-- <li><a href="#">MANUAL DE USUARIO</a></li> --}}
                        {{-- <li><a href="#">INCIO SESIÓN</a></li> --}}
                    </ul>
                </nav><!--/ Navigation end -->
            </div><!--/ Row end -->
        </div><!--/ Container end -->
    </header><!--/ Header end -->

    <div id="banner-area">
        <img src="{{ asset('bizcraft/images/banner/banner2.jpg') }}" alt ="" />
        <div class="parallax-overlay"></div>
        <!-- Subpage title start -->
        <div class="banner-title-content">
            <div class="text-center">
                <h2>Formulario de Denuncia</h2>
                <ul class="breadcrumb">
                    <li>Registro de Denuncia</li>
                    {{-- <li>Features</li>
                    <li><a href="#"> Typography</a></li> --}}
                </ul>
            </div>
        </div><!-- Subpage title end -->
    </div>
    <!-- Banner area end -->

    <!-- Main container start -->
    <section id="main-container">
        <div class="container">
            <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <p style="font-size: 23px;">Es indispensable el registro de los <strong class="text-danger">números telefónicos</strong> para mayor celeridad y eficiencia en el trámite de la denuncia.</p>
                    <div class="gap-20"></div>
                </div>
                </div>
                <div class="col-md-6">
                    <h3 class="title-border">Datos de la Víctima</h3>
                    <span><strong class="text-danger">(*) Datos Obligatorios</strong></span><br><br>
                    {!! Form::open([ 'route' => 'formularioweb.store', 'id'=>'form_formularioweb' ]) !!}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Primer Nombre <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="nombre1_vic" id="nombre1_vic" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Segundo Nombre <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="nombre2_vic" id="nombre2_vic" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Apellido Paterno <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="apellido1_vic" id="apellido1_vic" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Apellido Materno <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="apellido2_vic" id="apellido2_vic" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                               <div class="form-group">
                                  {{ Form::label('Tipo de Documento') }}
                                  {{ Form::select('tbldocumento_id_vic', ['2'=>'Documento Nacional de Identidad','3'=>'Otros'], null, array('class'=>'form-control input required'.($errors->has('tbldocumento_id_vic')?" is-invalid":""), 'placeholder'=>'Seleccione Tipo')) }}
                                  <span id="error-tbldocumento_id" class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nro. de Documento <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="nro_doc_vic" id="nro_doc_vic" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                               <div class="form-group">
                                  {{ Form::label('Tipo de Agraviado') }}
                                  {{ Form::select('tbltipo_id_vic', $tipos, null, array('class'=>'form-control input required'.($errors->has('tbltipo_id_vic')?" is-invalid":""), 'placeholder'=>'Seleccionar tipo Agraviado')) }}
                                  <span id="error-tbltipo_id" class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Edad <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="edad_vic" id="edad_vic" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Hijos <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="hijos_vic" id="hijos_vic" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Teléfono <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="telefono_vic" id="telefono_vic" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Correo Electrónico <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="email_vic" id="email_vic" placeholder="" type="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Direccion del Domicilio <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="direccion_vic" id="direccion_vic" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  {{ Form::label('Departamento') }}
                                  {{ Form::select('tbldepartamento_id_vic', $departamentos, null, array('class'=>'form-control input required'.($errors->has('tbldepartamento_id_vic')?" is-invalid":""), 'placeholder'=>'Selecciona tu Departamento', 'id'=>'tbldepartamento_id_vic')) }}
                                  <span id="error-tbldepartamento_id_vic" class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('Provincia') }}
                                {{ Form::select('tblprovincia_id_vic',$provincias, null, array('class'=>'form-control input required'.($errors->has('tblprovincia_id_vic')?" is-invalid":""), 'placeholder'=>'Selecciona tu provincia', 'id'=>'tblprovincia_id_vic')) }}
                              <span id="error-tblprovincia_id_vic" class="invalid-feedback"></span>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  {{ Form::label('Distrito') }}
                                  {{ Form::select('tbldistrito_id', $distritos, null, array('class'=>'form-control input'.($errors->has('tbldistrito_id_vic')?" is-invalid":""), 'placeholder'=>'Selecciona tu Distrito', 'id'=>'tbldistrito_id_vic')) }}
                                  <span id="error-tbldistrito_id" class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>
    </div>
    <div class="col-md-6">

                    <h3 class="title-border">Datos del Agresor</h3>
                    <span><strong class="text-danger">(*) Datos Obligatorios</strong></span><br><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Primer Nombre <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="nombre1_agre" id="nombre1_agre" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Segundo Nombre <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="nombre2_agre" id="nombre2_agre" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Apellido Paterno <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="apellido1_agre" id="apellido1_agre" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Apellido Materno <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="apellido2_agre" id="apellido2_agre" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  {{ Form::label('Tipo de Documento') }}
                                  {{ Form::select('tbldocumento_id_agre', ['2'=>'Documento Nacional de Identidad','3'=>'Otros'], null, array('class'=>'form-control input required'.($errors->has('tbldocumento_id')?" is-invalid":""), 'placeholder'=>'Seleccione Tipo')) }}
                                  <span id="error-tbldocumento_id_agre" class="invalid-feedback"></span>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nro. de Documento <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="nro_doc_agre" id="nro_doc_agre" placeholder="" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-feedback {{ $errors->has('sexo')? 'has-error':'' }}">
                                  {{ Form::label('sexo_agre', 'Sexo') }}
                                  {{ Form::select('sexo_agre', ['Masculino'=>'Masculino','Femenino'=>'Femenino'], null, array('class'=>'form-control input'.($errors->has('sexo_agre')?" is-invalid":""), 'placeholder'=>'Selecciona el Sexo')) }}
                                  <span id="error-sexo_agre" class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Teléfono <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="telefono_agre" id="telefono_agre" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Direccion del Domicilio <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="direccion_agre" id="direccion_agre" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  {{ Form::label('Departamento') }}
                                  {{ Form::select('tbldepartamento_id_agre', $departamentos, null, array('class'=>'form-control input required'.($errors->has('tbldepartamento_id_agre')?" is-invalid":""), 'placeholder'=>'Seleccione un Departamento', 'id'=>'tbldepartamento_id_agre')) }}
                                  <span id="error-tbldepartamento_id_agre" class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('Provincia') }}
                                {{ Form::select('tblprovincia_id_agre',$provincias, null, array('class'=>'form-control input required'.($errors->has('tblprovincia_id_agre')?" is-invalid":""), 'placeholder'=>'Selecciona tu Provincia', 'id'=>'tblprovincia_id_agre')) }}
                              <span id="error-tblprovincia_id_agre" class="invalid-feedback"></span>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  {{ Form::label('Distrito') }}
                                  {{ Form::select('tbldistrito_id_agre', $distritos, null, array('class'=>'form-control input required'.($errors->has('tbldistrito_id_agre')?" is-invalid":""), 'placeholder'=>'Selecciona tu Distrito', 'id'=>'tbldistrito_id_agre')) }}
                                  <span id="error-tbldistrito_id_agre" class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Parentesco con la/el Agraviada(o) <strong class="text-danger">*</strong></label>
                                {{ Form::select('tblparentesco_id', $parentescos, null, array('class'=>'form-control input'.($errors->has('tblparentesco_id')?" is-invalid":""), 'placeholder'=>'Parentesco')) }}
                                </div>
                            </div>
                        </div>
                

                    <h3 class="title-border">Datos de la Denuncia</h3>
                    <span><strong class="text-danger">(*) Datos Obligatorios</strong></span><br><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tipo de Violencia <strong class="text-danger">*</strong></label>
                                {{ Form::select('tblviolencia_id', $violencias, null, array('class'=>'form-control input'.($errors->has('tblviolencia_id')?" is-invalid":""), 'placeholder'=>' Selecciona Tipo')) }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Comisaría <strong class="text-danger">*</strong></label>
                                    {{ Form::select('comisaria_id', $comisariaform, null, array('class'=>'form-control input'.($errors->has('comisaria_id')?" is-invalid":""), 'placeholder'=>' Selecciona Tipo')) }}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label>Message <strong class="text-danger">*</strong></label>
                            <textarea class="form-control" name="message" id="message" placeholder="" rows="10" required></textarea>
                        </div> --}}
                        <div class="text-right"><br>
                            <button class="btn btn-primary solid blank" type="submit">Enviar Formulario</button> 
                        </div>
                 {!! Form::close() !!}
                </div>
        </div>
   
        </div>
        <!--/ container end -->
    </section>
    <!--/ Main container end -->

    <!-- Footer start -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 footer-widget footer-about-us">
                    <h3 class="widget-title">ACERCA DE SITRAD-VF</h3>
                    <p>Herramienta Tecnológica que permite el seguimiento y control de tiempos de trámites de las denuncias de violencia contra la mujer e integrantes del grupo familiar con la aplicación de la Ley 30364</p>
                    {{-- <h4>Dirección</h4>
                    <p>1102 Saint Marys, Junction City, KS</p> --}}
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Email:</h4>
                            <p>mhc021072@hotmail.com</p>
                        </div>
                        <div class="col-md-6">
                            <h4>Teléfono.</h4>
                            <p>+51999099846</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="cd-half-width" style="text-align: center; padding: 20px;">
                                <a href="#0" class="cd-btn btn btn-primary white">MANUAL DE USUARIO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ end about us -->
                <div class="col-md-6 col-sm-12 footer-widget">
                    <h3 class="widget-title">SISTEMA ARTICULADO DE ATENCIÓN</h3>
                    <p>En el Distrito Judicial de Tacna, las denuncias de violencia contra la mujer e integrantes del grupo familiar son tramitadas de forma articulada por la PNP y el Poder Judicial respecto a las medidas de Proteccion en la aplicación de la Ley 30364</p>

                    <div class="img-gallery" style="margin-top: 38px;">
                        <div class="img-container">
                            <a class="thumb-holder" data-rel="prettyPhoto" href="{{ asset('menu/img/pj_logo_color.png') }}">
                                <img src="{{ asset('menu/img/pj_logo_color.png') }}" alt="">
                            </a>
                            <a class="thumb-holder" data-rel="prettyPhoto" href="{{ asset('menu/img/policia_nacional-min.png') }}">
                                <img style="width: 70px;" src="{{ asset('menu/img/policia_nacional-min.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="cd-half-width" style="text-align: center; padding: 20px;">
                                <a href="#0" class="cd-btn btn btn-primary white">PROTOCOLO - PROCESO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Recent Posts-->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </footer><!-- Footer end -->
    

    <!-- Copyright start -->
    <section id="copyright" class="copyright angle">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="footer-social unstyled">
                        <li>
                            <a title="Twitter" href="#">
                                <span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
                            </a>
                            <a title="Facebook" href="#">
                                <span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
                            </a>
                            <a title="Google+" href="#">
                                <span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
                            </a>
                            <a title="linkedin" href="#">
                                <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
                            </a>
                            <a title="Pinterest" href="#">
                                <span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
                            </a>
                            <a title="Skype" href="#">
                                <span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
                            </a>
                            <a title="Dribble" href="#">
                                <span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--/ Row end -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright-info">
                     &copy; Copyright 2020 SITRAD-VF. <span>Formulador by <b>Lic. Miguel A. Huacollo Centeno</b>. <span>Desarrollado por <b>Anthony Flores Llantoy</b></span>
                    </div>
                </div>
            </div><!--/ Row end -->
           <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
                <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
            </div>
        </div><!--/ Container end -->
    </section><!--/ Copyright end -->

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script type="text/javascript" src="{{ asset('bizcraft/js/jquery.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script type="text/javascript" src="{{ asset('bizcraft/js/bootstrap.min.js') }}"></script>
    <!-- Style Switcher -->
    <script type="text/javascript" src="{{ asset('bizcraft/js/style-switcher.js') }}"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{ asset('bizcraft/js/owl.carousel.js') }}"></script>
    <!-- PrettyPhoto -->
    <script type="text/javascript" src="{{ asset('bizcraft/js/jquery.prettyPhoto.js') }}"></script>
    <!-- Bxslider -->
    <script type="text/javascript" src="{{ asset('bizcraft/js/jquery.flexslider.js') }}"></script>
    <!-- CD Hero slider -->
    <script type="text/javascript" src="{{ asset('bizcraft/js/cd-hero.js') }}"></script>
    <!-- Isotope -->
    <script type="text/javascript" src="{{ asset('bizcraft/js/isotope.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bizcraft/js/ini.isotope.js') }}"></script>
    <!-- Wow Animation -->
    <script type="text/javascript" src="{{ asset('bizcraft/js/wow.min.js') }}"></script>
    <!-- SmoothScroll -->
    {{-- <script type="text/javascript" src="{{ asset('bizcraft/js/smoothscroll.js') }}"></script> --}}
    <!-- Eeasing 
    <script type="text/javascript" src="{{ asset('bizcraft/js/jquery.easing.1.3.js') }}"></script>
    -->
    <!-- Counter -->
    <script type="text/javascript" src="{{ asset('bizcraft/js/jquery.counterup.min.js') }}"></script>
    <!-- Waypoints -->
    <script type="text/javascript" src="{{ asset('bizcraft/js/waypoints.min.js') }}"></script>
    <!-- Template custom -->
    <script type="text/javascript" src="{{ asset('bizcraft/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bizcraft/js/jquery-3.5.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bizcraft/js/droopdown.js') }}"></script>
    </div><!-- Body inner end -->
    
    <script type="text/javascript">
        $(window).on('resize', function(){
            var win = $(this);
            console.log(win.width());
            if (win.width() >= 768) {
                var height_logo = $(".navbar-brand a img.img-responsive").height();
                $(".navbar-header .navbar-brand").height(height_logo);
            }
            // if (win.width() < 768) {
            //     $(".navbar-header .navbar-brand").height(51);
            // }
        });
    </script>

  <script type="text/javascript">

  </script>
    </div><!-- Body inner end -->
</body>

<!-- Mirrored from demo.themefisher.com/bizcraft/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2020 07:45:06 GMT -->
</html>
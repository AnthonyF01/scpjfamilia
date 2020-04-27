<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themefisher.com/bizcraft/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2020 07:41:43 GMT -->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>BizCraft - Responsive Html5 Template</title>
    <meta name="description" content="">    
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons
    ================================================== -->
    <link rel="icon" href="img/favicon/favicon-32x32.html" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.html">
    <link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.html">
    
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

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        .navbar-brand.navbar-bg {
            position: absolute;
            left: 0;
            padding: 3px 15px 10px;
            width: 15%;
            min-width: 185px !important;
            max-width: 205px !important;
            height: 69px;
            line-height: 69px;
        }
        
        @media screen and (min-width: 1171px) {
            .cd-hero-slider .cd-full-width, .cd-hero-slider .cd-half-width {
                padding-top: 220px !important;
            }
        }

        @media screen and (max-width: 1170px) and (min-width: 1081px) {
            .cd-hero-slider .cd-full-width, .cd-hero-slider .cd-half-width {
                padding-top: 200px !important;
            }
        }

        @media screen and (max-width: 1080px) and (min-width: 1001px) {
            .cd-hero-slider .cd-full-width, .cd-hero-slider .cd-half-width {
                padding-top: 180px !important;
            }
        }

        @media screen and (max-width: 1000px) and (min-width: 950px) {
            .cd-hero-slider .cd-full-width, .cd-hero-slider .cd-half-width {
                padding-top: 150px !important;
            }
        }

        @media screen and (max-width: 1170px) and (min-width: 768px) {
            .cd-half-width.cd-img-container.img-right {
                margin-top: -60px;
            }
        }
        
        @media (max-width : 767px){
            .navbar-brand.navbar-bg {
                min-width: 160px !important;
                width: 160px !important;
                height: 50px !important;
                line-height: 55px;
            }
            .navbar-brand.navbar-bg img{
                background-size: contain;
                height: 38px !important;
            }
            .cd-slider-nav .cd-marker, .cd-slider-nav li {
                width: 220px;
            }
        }

        .cd-slider-nav {
            position: absolute;
            width: 100%;
            bottom: 70px;
            z-index: 2;
            text-align: center;
            height: 70px;
        }
        
        @media (max-width : 1170px){
            .cd-slider-nav {
                bottom: 120px;
            }
        }
        @media (max-width: 991px) and (min-width: 768px){
            .cd-slider-nav {
                bottom: 95px !important;
            }
        }
        @media (max-width: 767px){
            .cd-slider-nav {
                bottom: 75px;
            }
        }
        .service .items{
            text-align: center;
        }
    </style>

    <style type="text/css">
        .t1 {
            font-size: 60px;
            font-weight: bold;
            color: #ccc;
        }
        .d1 {
            font-size: 40px;
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
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('menu/img/asociacion_blanco.png') }}" alt="logo">
                        </a> 
                    </div>                   
                </div><!--/ Logo end -->
                <nav class="collapse navbar-collapse clearfix" role="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/') }}">INICIO</a></li>
                        <li><a href="#">MANUAL DE USUARIO</a></li>
                        {{-- <li><a href="#">INCIO SESIÓN</a></li> --}}
                    </ul>
                </nav><!--/ Navigation end -->
            </div><!--/ Row end -->
        </div><!--/ Container end -->
    </header>
    <!--/ Header end -->

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

                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <h3 class="title-border">Datos de la Víctima</h3>
                    <span><strong class="text-danger">(*) Datos Obligatorios</strong></span><br><br>
                    <form id="form_victima" action="#" method="post" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Primer Nombre <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="nombre1" id="nombre1" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Segundo Nombre <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="nombre2" id="nombre2" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Apellido Paterno <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="apellido1" id="apellido1" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Apellido Materno <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="apellido2" id="apellido2" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tipo de Documento <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="tbldocumento_id" id="tbldocumento_id" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Número de Documento <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="nro_doc" id="nro_doc" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tipo de Agraviada(o) <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="tbltipo_id" id="tbltipo_id" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Edad <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="edad" id="edad" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Hijos <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="hijos" id="hijos" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Teléfono <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="telefono" id="telefono" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Correo Electrónico <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="email" id="email" placeholder="" type="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Direccion del Domicilio <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="direccion" id="direccion" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Departamento <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="tbldepartamento_id" id="tbldepartamento_id" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Provincia <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="tblprovincia_id" id="tblprovincia_id" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Distrito <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="tbldistrito_id" id="tbldistrito_id" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/ Col end -->

                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

                    <h3 class="title-border">Texto de Ejemplo</h3>

                    <p>Lorem ipsum dolor sit amet, <mark>a mark here</mark> adipisicing elit. Atque, iusto, minus sequi natus nesciunt rerum tenetur corrupti autem officiis fugiat expedita laudantium ea aspernatur</p>
                    <p><strong class="text-success">Consectetur adipisicing elit</strong>. Corrupti, aliquam, voluptates, nulla, blanditiis totam voluptatem <strong class="text-danger">voluptatum quod ipsa debitis non</strong> ab odio natus.</p>

                    <div class="gap-20"></div>

                    <h3 class="title-border">Blockquote</h3>

                    <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
            
                  <blockquote class="pull-right">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                  </blockquote>

                </div>
                <!--/ Col end -->

            </div>
            <!-- Content row  end -->

            <div class="row">

                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <h3 class="title-border">Datos del Agresor</h3>
                    <span><strong class="text-danger">(*) Datos Obligatorios</strong></span><br><br>
                    <form id="form_victima" action="#" method="post" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Primer Nombre <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="nombre1" id="nombre1" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Segundo Nombre <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="nombre2" id="nombre2" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Apellido Paterno <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="apellido1" id="apellido1" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Apellido Materno <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="apellido2" id="apellido2" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tipo de Documento <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="tbldocumento_id" id="tbldocumento_id" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Número de Documento <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="nro_doc" id="nro_doc" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sexo <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="tbltipo_id" id="tbltipo_id" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Teléfono <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="telefono" id="telefono" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Direccion del Domicilio <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="direccion" id="direccion" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Departamento <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="tbldepartamento_id" id="tbldepartamento_id" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Provincia <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="tblprovincia_id" id="tblprovincia_id" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Distrito <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="tbldistrito_id" id="tbldistrito_id" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Parentesco con la/el Agraviada(o) <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="tbldistrito_id" id="tbldistrito_id" placeholder="" type="text" required>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/ Col end -->

                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

                    <h3 class="title-border">Texto de Ejemplo</h3>

                    <p>Lorem ipsum dolor sit amet, <mark>a mark here</mark> adipisicing elit. Atque, iusto, minus sequi natus nesciunt rerum tenetur corrupti autem officiis fugiat expedita laudantium ea aspernatur</p>
                    <p><strong class="text-success">Consectetur adipisicing elit</strong>. Corrupti, aliquam, voluptates, nulla, blanditiis totam voluptatem <strong class="text-danger">voluptatum quod ipsa debitis non</strong> ab odio natus.</p>

                    <div class="gap-20"></div>

                    <h3 class="title-border">Blockquote</h3>

                    <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
            
                  <blockquote class="pull-right">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                  </blockquote>

                </div>
                <!--/ Col end -->

            </div>
            <!-- Content row  end -->

            <div class="row">

                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <h3 class="title-border">Datos de la Denuncia</h3>
                    <span><strong class="text-danger">(*) Datos Obligatorios</strong></span><br><br>
                    <form id="form_victima" action="#" method="post" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tipo de Violencia <strong class="text-danger">*</strong></label>
                                <input class="form-control" name="nombre1" id="nombre1" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Comisaría <strong class="text-danger">*</strong></label>
                                    <input class="form-control" name="nombre2" id="nombre2" placeholder="" type="text" required>
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
                    </form>
                </div>
                <!--/ Col end -->

                {{-- <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

                    <h3 class="title-border">Texto de Ejemplo</h3>

                    <p>Lorem ipsum dolor sit amet, <mark>a mark here</mark> adipisicing elit. Atque, iusto, minus sequi natus nesciunt rerum tenetur corrupti autem officiis fugiat expedita laudantium ea aspernatur</p>
                    <p><strong class="text-success">Consectetur adipisicing elit</strong>. Corrupti, aliquam, voluptates, nulla, blanditiis totam voluptatem <strong class="text-danger">voluptatum quod ipsa debitis non</strong> ab odio natus.</p>

                    <div class="gap-20"></div>

                    <h3 class="title-border">Blockquote</h3>

                    <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
            
                  <blockquote class="pull-right">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                  </blockquote>

                </div> --}}
                <!--/ Col end -->

            </div>
            <!-- Content row  end -->

        </div>
        <!--/ container end -->

    </section>
    <!--/ Main container end -->

    <!-- Footer start -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 footer-widget">
                    <h3 class="widget-title">Recent Posts</h3>
                    <div class="latest-post-items media">
                            <div class="latest-post-content media-body">
                                <h4><a href="#">Bulgaria claims to find Europe's 'oldest town'</a></h4>
                                <p class="post-meta">
                                    <span class="author">Posted by John Doe</span>
                                    <span class="post-meta-cat">in<a href="#"> Blog</a></span>
                                </p>
                            </div>
                        </div><!-- 1st Latest Post end -->

                        <div class="latest-post-items media">
                            <div class="latest-post-content media-body">
                                <h4><a href="#">Few Answers in Case of Murdered Law Professor</a></h4>
                                <p class="post-meta">
                                    <span class="date"><i class="icon icon-calendar"></i> Mar 15, 2015</span>
                                    <span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#">03</a></span>
                                </p>
                            </div>
                        </div><!-- 2nd Latest Post end -->

                        <div class="latest-post-items media">
                            <div class="latest-post-content media-body">
                                <h4><a href="#">Over the year we have lots of experience in our field</a></h4>
                                <p class="post-meta">
                                    <span class="date"><i class="icon icon-calendar"></i> Apr 17, 2015</span>
                                    <span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#">14</a></span>
                                </p>
                            </div>
                        </div><!-- 3rd Latest Post end -->
    
                </div><!--/ End Recent Posts-->
                

                <div class="col-md-4 col-sm-12 footer-widget">
                    <h3 class="widget-title">Flickr Photos</h3>

                    <div class="img-gallery">
                        <div class="img-container">
                            <a class="thumb-holder" data-rel="prettyPhoto" href="{{ asset('bizcraft/images/gallery/1.jpg') }}">
                                <img src="{{ asset('bizcraft/images/gallery/1.jpg') }}" alt="">
                            </a>
                            <a class="thumb-holder" data-rel="prettyPhoto" href="{{ asset('bizcraft/images/gallery/2.jpg') }}">
                                <img src="{{ asset('bizcraft/images/gallery/2.jpg') }}" alt="">
                            </a>
                            <a class="thumb-holder" data-rel="prettyPhoto" href="{{ asset('bizcraft/images/gallery/3.jpg') }}">
                                <img src="{{ asset('bizcraft/images/gallery/3.jpg') }}" alt="">
                            </a>
                            <a class="thumb-holder" data-rel="prettyPhoto" href="{{ asset('bizcraft/images/gallery/4.jpg') }}">
                                <img src="{{ asset('bizcraft/images/gallery/4.jpg') }}" alt="">
                            </a>
                            <a class="thumb-holder" data-rel="prettyPhoto" href="{{ asset('bizcraft/images/gallery/5.jpg') }}">
                                <img src="{{ asset('bizcraft/images/gallery/5.jpg') }}" alt="">
                            </a>
                            <a class="thumb-holder" data-rel="prettyPhoto" href="{{ asset('bizcraft/images/gallery/6.jpg') }}">
                                <img src="{{ asset('bizcraft/images/gallery/6.jpg') }}" alt="">
                            </a>
                            <a class="thumb-holder" data-rel="prettyPhoto" href="{{ asset('bizcraft/images/gallery/6.jpg') }}">
                                <img src="{{ asset('bizcraft/images/gallery/7.jpg') }}" alt="">
                            </a>
                            <a class="thumb-holder" data-rel="prettyPhoto" href="{{ asset('bizcraft/images/gallery/6.jpg') }}">
                                <img src="{{ asset('bizcraft/images/gallery/8.jpg') }}" alt="">
                            </a>
                            <a class="thumb-holder" data-rel="prettyPhoto" href="{{ asset('bizcraft/images/gallery/6.jpg') }}">
                                <img src="{{ asset('bizcraft/images/gallery/9.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div><!--/ end flickr -->

                <div class="col-md-3 col-sm-12 footer-widget footer-about-us">
                    <h3 class="widget-title">Acerca de SITRAD-VF</h3>
                    <p>We are a awward winning multinational company. We believe in quality and standard worldwide.</p>
                    <h4>Address</h4>
                    <p>1102 Saint Marys, Junction City, KS</p>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Email:</h4>
                            <p>info@craftbd.com</p>
                        </div>
                        <div class="col-md-6">
                            <h4>Phone No.</h4>
                            <p>+(785) 238-4131</p>
                        </div>
                    </div>
                    <form action="#" role="form">
                        <div class="input-group subscribe">
                            <input type="email" class="form-control" placeholder="Email Address" required="">
                            <span class="input-group-addon">
                              <button class="btn" type="submit"><i class="fa fa-envelope-o"> </i></button>
                            </span>                        
                        </div>
                    </form>
                </div><!--/ end about us -->

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
    <!-- Eeasing -->
    <script type="text/javascript" src="{{ asset('bizcraft/js/jquery.easing.1.3.js') }}"></script>
    <!-- Counter -->
    <script type="text/javascript" src="{{ asset('bizcraft/js/jquery.counterup.min.js') }}"></script>
    <!-- Waypoints -->
    <script type="text/javascript" src="{{ asset('bizcraft/js/waypoints.min.js') }}"></script>
    <!-- Template custom -->
    <script type="text/javascript" src="{{ asset('bizcraft/js/custom.js') }}"></script>
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
    </div><!-- Body inner end -->
</body>

<!-- Mirrored from demo.themefisher.com/bizcraft/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2020 07:45:06 GMT -->
</html>
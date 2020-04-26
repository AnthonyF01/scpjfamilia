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
            width: 20%;
            height: 94px;
            line-height: 94px;
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
                width: 160px !important;
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

	<!-- Style switcher start -->
	{{-- <div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn-primary"></button>
		<button id="preset2" class="btn btn-sm btn-primary"></button>
		<button id="preset3" class="btn btn-sm btn-primary"></button>
		<button id="preset4" class="btn btn-sm btn-primary"></button>
		<button id="preset5" class="btn btn-sm btn-primary"></button>
		<button id="preset6" class="btn btn-sm btn-primary"></button>
		<br/><br/>
		<a class="btn btn-sm btn-primary close-styler pull-right">Close X</a>
	</div> --}}
	<!-- Style switcher end -->

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
                        <li><a href="#">INCIO</a></li>
                        <li><a href="#">MANUAL DE USUARIO</a></li>
            			{{-- <li><a href="#">INCIO SESIÓN</a></li> --}}
                    </ul>
				</nav><!--/ Navigation end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->

	<!-- Slider start -->
	<section id="home" class="no-padding">	
    	<div id="main-slide" class="cd-hero">
			<ul class="cd-hero-slider">
				<li class="selected">
					<div class="overlay2">
						<img class="" src="{{ asset('menu/img/palacio2.jpg') }}" alt="slider">
					</div> 
                    <div class="cd-half-width cd-img-container img-right">
                        <img src="{{ asset('menu/img/no_violencia_genero_3-min.webp') }}" alt="">
                    </div>
                    <div class="cd-half-width">
                        <h2>SITRAD - VF</h2>
                        <p>Sistema  Interoperable  de Trámite de Denuncias de Violencia Familiar con aplicación de la Ley Nro. 30364</p>
                        <a href="#0" class="cd-btn btn btn-primary white">PROTOCOLO - PROCESO</a>
                        <a href="#0" class="cd-btn btn secondary btn-primary solid" data-toggle="modal" data-target="#modal-login" type="button">INICIAR SESION</a>
                    </div>
				</li>
			</ul> <!--/ cd-hero-slider -->
    		<div class="cd-slider-nav">
    			<nav>
    				<ul>
    					<li><a href="{{ url('/formulario')}}"><i class="fa fa-file" style="margin-left: 10px; float: left;"></i> <span style="float: right; margin-right: 10px;">DENUNCIA <br><span>Formulario de Denuncia</span></span></a></li>
    					<li><a href="#"><i class="fa fa-folder-open" style="margin-left: 10px; float: left;"></i> <span style="float: right; margin-right: 10px;">SEGUIMIENTO <br><span>Medida de Protección</span></span></a></li>
    				</ul>
    			</nav> 
    		</div> <!-- .cd-slider-nav -->

		</div><!--/ Main slider end -->    	
    </section> <!--/ Slider end -->


    <!-- Service box start -->
	<section id="service" class="service angle">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-cogs"></i></span>
					<h2 class="title">SERVICIOS A LA CUIDADANIA <span class="title-desc">Nuestro objetivo es proteger a la Mujer y Los Integrantes del Grupo Familiar.</span></h2>
				</div>
			</div><!-- Title row end -->

			<div class="row">
				<div class="col-md-12">
					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
						<div class="service-content text-center">
                            {{-- <span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span> --}}
							<span class="service-icon icon-pentagon">
                                <img width="50px" src="{{ asset('menu/img/pj_blanco.png') }}" alt="">
                            </span>
							<h3>PODER JUDICIAL DEL PERÚ <br></h3>
							<p>Justicia Honorable, País Respetable.</p>
						</div>
					</div><!--/ End first service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".8s" >
						<div class="service-content text-center">
							{{-- <span class="service-icon icon-pentagon"><i class="fa fa-android"></i></span> --}}
                            <span class="service-icon icon-pentagon">
                                <img width="50px" src="{{ asset('menu/img/rechaza_violencia_blanco.png') }}" alt="">
                            </span>
							<h3>¡UNA JUSTICIA CON IGUALDAD DE GENERO!</h3>
							<p>El Poder Judicial Rechaza la Violencia contra la Mujer.</p>
						</div>
						
					</div><!--/ End Second service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.1s">
						<div class="service-content text-center">
							{{-- <span class="service-icon icon-pentagon"><i class="fa fa-shopping-cart"></i></span> --}}
                            <span class="service-icon icon-pentagon">
                                <img width="50px" src="{{ asset('menu/img/comision_logo1_blanco.png') }}" alt="">
                            </span>
							<h3>COMISION DE JUSTICIA DE GENERO DEL PODER JUDICIAL</h3>
							<p>Administrando Justicia con Enfoque de Género. Trabajando por la igualdad y la no discriminación.</p>
						</div>
					</div><!--/ End Third service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.4s">
						<div class="service-content text-center">
							{{-- <span class="service-icon icon-pentagon"><i class="fa fa-lightbulb-o"></i></span> --}}
                            <span class="service-icon icon-pentagon">
                                <img width="50px" src="{{ asset('menu/img/ppr_familia_blanco.png') }}" alt="">
                            </span>
							<h3>PpR FAMILIA <br></h3>
							<p>Programa Presupuestal por Resultado "Celeridad en los Procesos Judiciales de Familia para el Año Fiscal".</p>
						</div>
					</div><!--/ End 4th service -->
				</div>
			</div><!-- Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Service box end -->
   
	<!-- Portfolio start -->
	{{-- <section id="portfolio" class="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon classic pull-left"><i class="fa fa-suitcase"></i></span>
					<h2 class="title classic">Our Awesome Work</h2>
				</div>
			</div> <!-- Title row end -->

			<!--Isotope filter start -->
			<div class="row text-right">
				<div class="isotope-nav" data-isotope-nav="isotope">
					<ul>
						<li><a href="#" class="active" data-filter="*">All</a></li>
						<li><a href="#" data-filter=".web-design">Web Design</a></li>
						<li><a href="#" data-filter=".development">Development</a></li>
						<li><a href="#" data-filter=".joomla">Joomla</a></li>
						<li><a href="#" data-filter=".wordpress">Wordpress</a></li>
					</ul>
				</div>
			</div><!-- Isotope filter end -->
		</div>
		
		<div class="container-fluid">
			<div class="row">
				<div id="isotope" class="isotope">
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="{{ asset('bizcraft/images/portfolio/portfolio1.jpg') }}" alt="">
								<figcaption>
									<h3>Startup Business</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{ asset('bizcraft/images/portfolio/portfolio-bg1.jpg') }}"><i class="fa fa-search"></i></a>            
								</figcaption>			
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="{{ asset('bizcraft/images/portfolio/portfolio2.jpg') }}" alt="">
								<figcaption>
									<h3>Easy to Lanunch</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{ asset('bizcraft/images/portfolio/portfolio-bg2.jpg') }}"><i class="fa fa-search"></i></a>            
								</figcaption>				
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="{{ asset('bizcraft/images/portfolio/portfolio3.jpg') }}" alt="">
								<figcaption>
									<h3>Your Business</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{ asset('bizcraft/images/portfolio/portfolio-bg3.jpg') }}"><i class="fa fa-search"></i></a>            
								</figcaption>				
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 wordpress isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="{{ asset('bizcraft/images/portfolio/portfolio4.jpg') }}" alt="">
								<figcaption>
									<h3>Prego Match</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="#"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="{{ asset('bizcraft/images/portfolio/portfolio5.jpg') }}" alt="">
								<figcaption>
									<h3>Fashion Brand</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="#"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="{{ asset('bizcraft/images/portfolio/portfolio6.jpg') }}" alt="">
								<figcaption>
									<h3>The Insidage</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{ asset('bizcraft/images/portfolio/portfolio-bg1.jpg') }}"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="{{ asset('bizcraft/images/portfolio/portfolio7.jpg') }}" alt="">
								<figcaption>
									<h3>Light Carpet</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{ asset('bizcraft/images/portfolio/portfolio-bg2.jpg') }}"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="{{ asset('bizcraft/images/portfolio/portfolio8.jpg') }}" alt="">
								<figcaption>
									<h3>Amazing Keyboard</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{ asset('bizcraft/images/portfolio/portfolio-bg3.jpg') }}"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->
				</div><!-- Isotope content end -->
			</div><!-- Content row end -->
		</div><!-- Container end -->
	</section> --}}
    <!-- Portfolio end -->

	<!-- Counter Strat -->
	{{-- <section class="ts_counter no-padding">
		<div class="container-fluid">
			<div class="row facts-wrapper wow fadeInLeft text-center">
				<div class="facts one col-md-3 col-sm-6">
					<span class="facts-icon"><i class="fa fa-user"></i></span>
					<div class="facts-num">
						<span class="counter">1200</span>
					</div>
					<h3>Clients</h3> 
				</div>

				<div class="facts two col-md-3 col-sm-6">
					<span class="facts-icon"><i class="fa fa-institution"></i></span>
					<div class="facts-num">
						<span class="counter">1277</span>
					</div>
					<h3>Item Sold</h3> 
				</div>

				<div class="facts three col-md-3 col-sm-6">
					<span class="facts-icon"><i class="fa fa-suitcase"></i></span>
					<div class="facts-num">
						<span class="counter">869</span>
					</div>
					<h3>Projects</h3> 
				</div>

				<div class="facts four col-md-3 col-sm-6">
					<span class="facts-icon"><i class="fa fa-trophy"></i></span>
					<div class="facts-num">
						<span class="counter">76</span>
					</div>
					<h3>Awwards</h3> 
				</div>

			</div>
		</div><!--/ Container end -->
    </section> --}}
    <!--/ Counter end -->

	<!-- Feature box start -->
	{{-- <section id="feature" class="feature">
		<div class="container">
			<div class="row">
				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-heart-o"></i></span>
					<div class="feature-content">
						<h3>Clean &amp; Modern Design</h3>
						<p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>
					</div>
				</div><!--/ End first featurebox -->

				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-codepen"></i></span>
					<div class="feature-content">
						<h3>Useful Shortcodes</h3>
						<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
					</div>
				</div><!--/ End 2nd featurebox -->

				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-film"></i></span>
					<div class="feature-content">
						<h3>Parallax Section</h3>
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
					</div>
				</div><!--/ End 3rd featurebox -->
			</div><!-- Content row end -->

			<div class="gap-40"></div>

			<div class="row">
				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-newspaper-o"></i></span>
					<div class="feature-content">
						<h3>Multipurpose Concept</h3>
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
					</div>
				</div><!--/ End 1st featurebox -->

				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-desktop"></i></span>
					<div class="feature-content">
						<h3>Responsive Layout</h3>
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
					</div>
				</div><!--/ End 2nd featurebox -->

				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-pagelines"></i></span>
					<div class="feature-content">
						<h3>Light wight Performance</h3>
						<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
					</div>
				</div><!--/ End 3rd featurebox -->

			</div><!-- Content row end -->

			<div class="gap-40"></div>

			<div class="row">
				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-recycle"></i></span>
					<div class="feature-content">
						<h3>Free Lifetime Updates</h3>
						<p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>
					</div>
				</div><!--/ End first featurebox -->

				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-diamond"></i></span>
					<div class="feature-content">
						<h3>Endless Possibilites</h3>
						<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
					</div>
				</div><!--/ End first featurebox -->

				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<span class="feature-icon pull-left" ><i class="fa fa-whatsapp"></i></span>
					<div class="feature-content">
						<h3>24/7 Live Support</h3>
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
					</div>
				</div><!--/ End first featurebox -->
			</div><!-- Content row end -->

		</div><!--/ Container end -->
	</section> --}}
    <!--/ Feature box end -->

	{{-- <section id="image-block" class="image-block no-padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 ts-padding" style="height:650px;background:url({{ asset('bizcraft/images/image-block-bg.jpg') }}) 50% 50% / cover no-repeat;">
				</div>
				<div class="col-md-6 ts-padding img-block-right">
					<div class="img-block-head text-center">
						<h2>Know More About Our Company</h2>
						<h3>Why Choose Us</h3>
						<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor Aenean sollicitudin, adipisicing elit sed lorem quis bibendum auctor.
						</p>
					</div>

					<div class="gap-30"></div>

					<div class="image-block-content">
						<span class="feature-icon pull-left" ><i class="fa fa-bicycle"></i></span>
						<div class="feature-content">
							<h3>Tons of Features</h3>
							<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
						</div>
					</div><!--/ End 1st block -->

					<div class="image-block-content">
						<span class="feature-icon pull-left" ><i class="fa fa-diamond"></i></span>
						<div class="feature-content">
							<h3>PowerPack Theme</h3>
							<p>Proin gravida nibh vel velit auctor Aenean sollicitudin adipisicing</p>
						</div>
					</div><!--/ End 1st block -->

					<div class="image-block-content">
						<span class="feature-icon pull-left" ><i class="fa fa-street-view"></i></span>
						<div class="feature-content">
							<h3>Day Night Support</h3>
							<p>Simply dummy text and typesettings industry has been the industry</p>
						</div>
					</div><!--/ End 1st block -->

				</div>
			</div>
		</div>
	</section> --}}
    <!--/ Image block end -->


	<!-- Team start -->
	{{-- <section id="team" class="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
					<h2 class="title">Meet with our Team <span class="title-desc">A Quality Experience Team with 4 years experience</span></h2>
				</div>
			</div><!-- Title row end -->

			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="team wow slideInLeft">
						<div class="img-hexagon">
							<img src="{{ asset('bizcraft/images/team/team1.jpg') }}" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Vosgi Varduhi</h3>
							<p>Web Designer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>	
				</div><!--/ Team 1 end -->
				<div class="col-md-3 col-sm-6">
					<div class="team wow slideInLeft">
						<div class="img-hexagon">
							<img src="{{ asset('bizcraft/images/team/team2.jpg') }}" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Robert Aleska</h3>
							<p>Web Designer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
				</div><!--/ Team 2 end -->
				<div class="col-md-3 col-sm-6">
					<div class="team wow slideInRight">
						<div class="img-hexagon">
							<img src="{{ asset('bizcraft/images/team/team3.jpg') }}" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Taline Voski</h3>
							<p>Web Designer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
				</div><!--/ Team 3 end -->
				<div class="col-md-3 col-sm-6">
					<div class="team animate wow slideInRight">
						<div class="img-hexagon">
							<img src="{{ asset('bizcraft/images/team/team4.jpg') }}" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Alban Spencer</h3>
							<p>Web Designer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
				</div><!--/ Team 4 end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
    </section> --}}
    <!--/ Team end -->

    <!-- Parallax 1 start -->
	{{-- <section class="parallax parallax1">
		<div class="parallax-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Are You Ready to Buy This Template!</h2>
					<h3>Just Click Button and Use Your Own</h3>
					<p>
						<a href="#" class="btn btn-primary white">Purchase Now</a>
						<a href="#" class="btn btn-primary solid">Get In Touch</a>
					</p>
				</div>
			</div>
		</div><!-- Container end -->
    </section> --}}
    <!-- Parallax 1 end -->

    <!-- Pricing table start -->
	{{-- <section id="pricing" class="pricing">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-university"></i></span>
					<h2 class="title">Pricing Table <span class="title-desc">We Love to Work with Passion</span></h2>
				</div>
			</div><!-- Title row end -->
	  		<div class="row">
				<!-- plan start -->
				<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
				    <div class="plan text-center">
				        <span class="plan-name">Basic <small>Monthly plan</small></span>
				        <p class="plan-price"><sup class="currency">$</sup><strong>49</strong><sub>.99</sub></p>
				        <ul class="list-unstyled">
				            <li>100GB Monthly Bandwidth</li>
				            <li>$100 Google AdWords</li>
				            <li>100 Domain Hosting</li>
				            <li>SSL Shopping Cart</li>
				            <li>24/7 Live Support</li>
				        </ul>
				        <a class="btn btn-primary" href="#.">Sign Up</a>
				    </div>
				</div><!-- plan end -->

				<!-- plan start -->
				<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1s">
				    <div class="plan text-center">
				        <span class="plan-name">Standared <small>Monthly plan</small></span>
				        <p class="plan-price"><sup class="currency">$</sup><strong>99</strong><sub>.99</sub></p>
				        <ul class="list-unstyled">
				            <li>100GB Monthly Bandwidth</li>
				            <li>$100 Google AdWords</li>
				            <li>100 Domain Hosting</li>
				            <li>SSL Shopping Cart</li>
				            <li>24/7 Live Support</li>
				        </ul>
				        <a class="btn btn-primary" href="#.">Sign Up</a>
				    </div>
				</div><!-- plan end -->

				<!-- plan start -->
				<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1.4s">
				    <div class="plan text-center featured">
				        <span class="plan-name">Professional <small>Monthly plan</small></span>
				        <p class="plan-price"><sup class="currency">$</sup><strong>149</strong><sub>.99</sub></p>
				        <ul class="list-unstyled">
				            <li>100GB Monthly Bandwidth</li>
				            <li>$100 Google AdWords</li>
				            <li>100 Domain Hosting</li>
				            <li>SSL Shopping Cart</li>
				            <li>24/7 Live Support</li>
				        </ul>
				        <a class="btn btn-primary" href="#.">Sign Up</a>
				    </div>
				</div><!-- plan end -->

				<!-- plan start -->
				<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1.6s">
				    <div class="plan text-center">
				        <span class="plan-name">Premium <small>Monthly plan</small></span>
				        <p class="plan-price"><sup class="currency">$</sup><strong>399</strong><sub>.99</sub></p>
				        <ul class="list-unstyled">
				            <li>100GB Monthly Bandwidth</li>
				            <li>$100 Google AdWords</li>
				            <li>100 Domain Hosting</li>
				            <li>SSL Shopping Cart</li>
				            <li>24/7 Live Support</li>
				        </ul>
				        <a class="btn btn-primary" href="#.">Sign Up</a>
				    </div>
				</div><!-- plan end -->
			</div><!--/ Content row end -->
		</div><!--/  Container end-->
	</section> --}}
    <!--/ Pricing table end -->


	<!-- Testimonial start-->
	{{-- <section class="testimonial parallax parallax2">
		<div class="parallax-overlay"></div>
	  	<div class="container">
		    <div class="row">
			    <div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide">
			        <div class="item">
			          	<div class="testimonial-thumb">
			            	<img src="{{ asset('bizcraft/images/team/testimonial1.jpg') }}" alt="testimonial">
			          	</div>
			          	<div class="testimonial-content">
				            <p class="testimonial-text">
				              Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
				            </p>
			            	<h3 class="name">Sarah Arevik<span>Chief Executive</span></h3>
			          	</div>
			        </div>
			        <div class="item">
			          	<div class="testimonial-thumb">
			            	<img src="{{ asset('bizcraft/images/team/testimonial2.jpg') }}" alt="testimonial">
			          	</div>
				        <div class="testimonial-content">
				            <p class="testimonial-text">
				              Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
				            </p>
				            <h3 class="name">Narek Bedros<span>Sr. Manager</span></h3>
				        </div>
			        </div>
			        <div class="item">
				        <div class="testimonial-thumb">
				            <img src="{{ asset('bizcraft/images/team/testimonial3.jpg') }}" alt="testimonial">
				        </div>
			          	<div class="testimonial-content">
				            <p class="testimonial-text">
				              Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
				            </p>
			            	<h3 class="name">Taline Lucine<span>Sales Manager</span></h3>
			          	</div>
			        </div>
			    </div><!--/ Testimonial carousel end-->
		    </div><!--/ Row end-->
	  	</div><!--/  Container end-->
	</section> --}}
    <!--/ Testimonial end-->


	<!-- Clients start -->
	{{-- <section id="clients" class="clients">
		<div class="container">
			<div class="row wow fadeInLeft">
		      <div id="client-carousel" class="col-sm-12 owl-carousel owl-theme text-center client-carousel">
		        <figure class="item client_logo">
		          <a href="#">
		            <img src="{{ asset('bizcraft/images/clients/client1.png') }}" alt="client">
		          </a>
		        </figure>
		        <figure class="item client_logo">
		          <a href="#">
		            <img src="{{ asset('bizcraft/images/clients/client2.png') }}" alt="client">
		          </a>
		        </figure>
		        <figure class="item client_logo">
		          <a href="#">
		            <img src="{{ asset('bizcraft/images/clients/client3.png') }}" alt="client">
		          </a>
		        </figure>
		        <figure class="item client_logo">
		          <a href="#">
		            <img src="{{ asset('bizcraft/images/clients/client4.png') }}" alt="client">
		          </a>
		        </figure>
		        <figure class="item client_logo">
		          <a href="#">
		            <img src="{{ asset('bizcraft/images/clients/client5.png') }}" alt="client">
		          </a>
		        </figure>
		        <figure class="item client_logo">
		          <a href="#">
		            <img src="{{ asset('bizcraft/images/clients/client6.png') }}" alt="client">
		          </a>
		        </figure>
		        <figure class="item client_logo">
		          <a href="#">
		            <img src="{{ asset('bizcraft/images/clients/client7.png') }}" alt="client">
		          </a>
		        </figure>
		        <figure class="item client_logo">
		          <a href="#">
		            <img src="{{ asset('bizcraft/images/clients/client8.png') }}" alt="client">
		          </a>
		        </figure>
		      </div><!-- Owl carousel end -->
	    	</div><!-- Main row end -->
		</div><!--/ Container end -->
	</section> --}}
    <!--/ Clients end -->
	

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

</body>

<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <h5 class="modal-title" style="float: left;margin-left: 20px;">Ingrese sus credenciales</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float: right;position: fixed;right: 30px;"><span aria-hidden="true">&times;</span></button>
                </div>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div id="result" class="alert alert-success text-center" style="display: none;"> 
                        Logged in! <i class="fa fa-refresh fa-spin"></i> Entering...
                    </div> 
                    {{-- <div class="form-group">
                        <label for="exampleInputEmail1">Distrito Judicial</label>
                    </div> --}}
                    <div class="form-group has-feedback {{ $errors->has('email')? 'has-error':'' }}">
                        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" autofocus="autofocus" class="form-control" required autofocus> {{-- <span class="glyphicon form-control-feedback glyphicon-envelope"></span> --}} @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div> 
                    <div class="form-group has-feedback">
                        <input type="password" placeholder="Contraseña" name="password" class="form-control"> {{-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> --}}
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

</html>
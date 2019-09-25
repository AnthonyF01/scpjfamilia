<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<!-- Estos css provienen de cada modulo -->
@yield('css')

<body class="skin-blue sidebar-mini fixed">
<!-- <body class="skin-blue sidebar-mini"> -->
<div id="app" v-cloak>
    <div class="wrapper">

    @include('adminlte::layouts.partials.mainheader')

    @include('adminlte::layouts.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        {{-- @include('adminlte::layouts.partials.contentheader') --}}

        <ol class="breadcrumb" style="padding: 15px 20px; margin-botom: 5px;border-bottom: 1px solid #d0d0d0;">
            <li>
                <a href="{{ url('/home') }}"><i class="fa fa-home"></i> Inicio</a>
            </li>
            <li id="parent" class="active">
                <i class="fa fa-gears"></i> Informacion
                {{-- @yield('contentheader_title', 'Page Header here') --}}
            </li>
        </ol>

        <div>

            <!-- Main content -->
            <section class="content">
                <!-- Your Page Content Here -->
                {{-- @if (session('info')) --}}
                <!-- Mensaje de confirmacion de eliminacion de registro -->
                <div id="box_message" class="container-fluid spark-screen hide"> 
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">
                            <div class="alert alert-success">
                                {{-- session('info') --}}
                                <button type="button" class="close" onclick="$('div#box_message').removeClass('show'); $('div#box_message').addClass('hide');">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div id="message"></div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @endif --}}

                @yield('main-content')

            </section><!-- /.content -->

        </div>
    </div><!-- /.content-wrapper -->

    @include('adminlte::layouts.partials.controlsidebar')

    @include('adminlte::layouts.partials.footer')

</div><!-- ./wrapper -->
</div>
@section('scripts')
    @include('adminlte::layouts.partials.scripts')
@show

<!-- Estos js provienen de cada modulo -->
@yield('js')

</body>
</html>

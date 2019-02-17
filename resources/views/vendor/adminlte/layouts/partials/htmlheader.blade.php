<head>
    <meta charset="UTF-8">
    <title> Poder Judicial - @yield('htmlheader_title', 'Your title here') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <link href="{{ mix('/css/all.css') }}" rel="stylesheet" type="text/css" /> -->



    <!-- Se usa una version actualizada de AdminLTE v2.4.5 -->
    <!-- No se usa mixins se agrega cada recurso mediante enlace -->
    <!-- Se usan los recursos directamente del paquete AdminLTE -->

    <style type="text/css">
        
        /* Viewports Devices */

        /* 
          ##Device = Desktops
          ##Screen = 1281px to higher resolution desktops
        */

        @media (min-width: 1281px) {
          
          div.content-wrapper {
            min-height: 558px;
          }

          body.fixed div.content-wrapper {
            min-height: 611px;
          }
          
        }

        /* 
          ##Device = Laptops, Desktops
          ##Screen = B/w 1025px to 1280px
        */

        @media (min-width: 1025px) and (max-width: 1280px) {
          
          div.content-wrapper {
            min-height: 558px;
          }
          
        }

        /* 
          ##Device = Tablets, Ipads (portrait)
          ##Screen = B/w 768px to 1024px
        */

        @media (min-width: 768px) and (max-width: 1024px) {
          
          //CSS
          
        }

        /* 
          ##Device = Tablets, Ipads (landscape)
          ##Screen = B/w 768px to 1024px
        */

        @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
          
          //CSS
          
        }

        /* 
          ##Device = Low Resolution Tablets, Mobiles (Landscape)
          ##Screen = B/w 481px to 767px
        */

        @media (min-width: 481px) and (max-width: 767px) {
          
          //CSS
          
        }

        /* 
          ##Device = Most of the Smartphones Mobiles (Portrait)
          ##Screen = B/w 320px to 479px
        */

        @media (min-width: 320px) and (max-width: 480px) {
          
          //CSS
          
        }
    </style>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('/adminlte245/bower_components/bootstrap/dist/css/bootstrap_v3.3.7.min.css') }}">
    <!-- Bootstrap 4.1.3 -->
    <!-- <link rel="stylesheet" href="{{ asset('/adminlte245/bower_components/bootstrap_v413/dist/css/bootstrap.min.css') }}"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/adminlte245/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('/adminlte245/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="{{ asset('/adminlte245/dist/css/AdminLTE.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('/adminlte245/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('/adminlte245/dist/css/skins/_all-skins.min.css') }}">

    <!-- Morris chart -->
    <!-- <link rel="stylesheet" href="{{ asset('/adminlte245/bower_components/morris.js/morris.css') }}"> -->
    <!-- jvectormap -->
    <!-- <link rel="stylesheet" href="{{ asset('/adminlte245/bower_components/jvectormap/jquery-jvectormap.css') }}"> -->
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('/adminlte245/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('/adminlte245/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <!-- Time picker -->
    <link rel="stylesheet" href="{{ asset('/adminlte245/plugins/timepicker/bootstrap-timepicker.min.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('/adminlte245/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

    <!-- Protip 1.4.16 -->
    <link rel="stylesheet" href="{{ asset('/assests/plugins/protip/protip.css') }}">

    <!-- Select2 -->
    <link href="{{ asset('/assests/plugins/select2v4.0.6/select2.min.css') }}" rel="stylesheet" />

    <!-- iCheck 1.0.2 -->
    <link href="{{ asset('/assests/plugins/icheck/all.css') }}" rel="stylesheet" />

    <!-- Multi-Select -->
    <link href="{{ asset('/assests/plugins/multi-select/multi-select.css') }}" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link href="{{ asset('/assests/icon/themify-icons/themify-icons.css') }}" rel="stylesheet">

    <!-- <link href="{{ asset('/assests/css/adminLTE_bt4fix.css') }}" rel="stylesheet" type="text/css" /> -->

    {{-- Bootstrap Fileup --}}
    <link href="{{ asset('/assests/plugins/fileinput/fileinput.min.css') }}" rel="stylesheet" type="text/css" />
    
    <link href="{{ asset('/assests/css/main.css') }}" rel="stylesheet" type="text/css" />



    <!-- <script>
        //See https://laracasts.com/discuss/channels/vue/use-trans-in-vuejs
        window.trans = @php
            // copy all translations from /resources/lang/CURRENT_LOCALE/* to global JS variable
            $lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
            $trans = [];
            foreach ($lang_files as $f) {
                $filename = pathinfo($f)['filename'];
                $trans[$filename] = trans($filename);
            }
            $trans['adminlte_lang_message'] = trans('adminlte_lang::message');
            echo json_encode($trans);
        @endphp
    </script> -->

</head>

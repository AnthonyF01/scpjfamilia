<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->

<!-- Laravel App -->
<!-- <script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script> -->

<!-- /*------- REQUIRED JS SCRIPTS --------*/ -->


<!-- Se usa una version actualizada de AdminLTE v2.4.5 -->
<!-- No se usa mixins se agrega cada recurso mediante enlace -->
<!-- Se usan los recursos directamente del paquete AdminLTE -->

	<!-- jQuery 3 -->
	<script src="{{ asset('/adminlte245/bower_components/jquery/dist/jquery.min.js') }}"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
	<script type="text/javascript">
		if ($("body.fixed")){
			$("div.content-wrapper").css('min-height', ( $(window).height() - $("footer").outerHeight() ) );
		} else {
	    	$("div.content-wrapper").css('min-height', ( $(window).height() - ( $("header").outerHeight() + $("footer").outerHeight() ) ) );
		}
	    // $("div.content-wrapper").css('margin-left', $("aside.main-sidebar").width());
	</script>
	<!-- jQuery UI 1.11.4 -->
	<script src="{{ asset('/adminlte245/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 4.1.3 -->
    <script src="{{ asset('/adminlte245/bower_components/bootstrap/dist/js/bootstrap_v3.3.7.min.js') }}"></script>
	{{-- <script src="{{ asset('/adminlte245/bower_components/bootstrap/dist/js/bootstrap_v4.1.3.min.js') }}"></script> --}}
	<!-- <script src="{{ asset('/adminlte245/bower_components/bootstrap_v413/dist/js/bootstrap.min.js') }}"></script> -->
	<!-- Morris.js charts -->
	<!-- <script src="{{ asset('/adminlte245/bower_components/raphael/raphael.min.js') }}"></script> -->
	<!-- <script src="{{ asset('/adminlte245/bower_components/morris.js/morris.min.js') }}"></script> -->
	<!-- Sparkline -->
	<!-- <script src="{{ asset('/adminlte245/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script> -->
	<!-- jvectormap -->
	<!-- <script src="{{ asset('/adminlte245/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script> -->
	<!-- <script src="{{ asset('/adminlte245/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script> -->
	<!-- jQuery Knob Chart -->
	<!-- <script src="{{ asset('/adminlte245/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script> -->
	<!-- daterangepicker -->
    <script src="{{ asset('/adminlte245/bower_components/moment/min/moment.min.js') }}"></script>
	<script src="{{ asset('/adminlte245/bower_components/moment/min/moment-timezone-with-data.js') }}"></script>
	<script src="{{ asset('/adminlte245/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
	<!-- datepicker -->
    <script src="{{ asset('/adminlte245/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- timepicker -->
    <script src="{{ asset('/adminlte245/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
    {{-- <script src="{{ asset('/adminlte245/bower_components/bootstrap-datepicker/js/locales/bootstrap-datepicker.es.js') }}"></script> --}}
	<!-- Bootstrap WYSIHTML5 -->
	<script src="{{ asset('/adminlte245/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
	<!-- Slimscroll -->
	<script src="{{ asset('/adminlte245/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<!-- FastClick -->
	<!-- <script src="{{ asset('/adminlte245/bower_components/fastclick/lib/fastclick.js') }}"></script> -->
    <!-- Protip 1.4.16 -->
	<script src="{{ asset('/assests/plugins/protip/protip.min.js') }}"></script>
	<script type="text/javascript">
		// Iniciar Protip (tooltip)
	    $.protip();
	</script>

	<!-- Quicksearch -->
	<script src="{{ asset('/assests/plugins/quicksearch/quicksearch.js') }}"></script>
	<!-- Multi-Select --> <!-- Depende de Quicksearch para las busquedas -->
	<script src="{{ asset('/assests/plugins/multi-select/multi-select.js') }}"></script>

	<!-- AngularJS 1.7.2 -->
	<!-- <script type="text/javascript" src="{{ asset('/assests/plugins/angularjs/angular.min.js') }}"></script> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script> -->
	<!-- Angular Bootstrap Multiselect -->
	<!-- <script src="{{ asset('/assests/plugins/angular-bootstrap-multiselect/angular-bootstrap-multiselect.js') }}"></script> -->
	<!-- <script src="https://bentorfs.github.io/angular-bootstrap-multiselect/bower_components/angular-bootstrap-multiselect/dist/angular-bootstrap-multiselect.min.js"></script> -->

    <!-- Select2 -->
	<script src="{{ asset('/assests/plugins/select2v4.0.6/select2.min.js') }}"></script>
	<!-- <script type="text/javascript">
        $('.select2').select2();
    </script> -->
    <!-- iCheck 1.0.2 -->
    <script type="text/javascript" src="{{ asset('/assests/plugins/icheck/icheck.min.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('/adminlte245/dist/js/adminlte.min.js') }}"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<!-- <script src="{{ asset('/adminlte245/dist/js/pages/dashboard.js') }}"></script> -->
	<!-- AdminLTE for demo purposes -->
	<!-- <script src="{{ asset('/adminlte245/dist/js/demo.js') }}"></script> -->

    <!-- cross-domain-ajax -->
    <script src="{{ asset('/assests/plugins/cross-domain-ajax/jquery.xdomainajax.js') }}"></script>

    <!-- Bootstrap Fileup -->
    <script src="{{ asset('/assests/plugins/fileinput/fileinput.min.js') }}"></script>
    <script src="{{ asset('/assests/plugins/fileinput/locales/es.js') }}"></script>

    {{-- Highcharts v6.2.0 --}}
    <script src="{{ asset('/assests/plugins/highcharts/highcharts.js') }}"></script>
    {{-- <script src="https://code.highcharts.com/highcharts.js"></script> --}}
    {{-- Highcharts v6.0.6 --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script> --}}

    <script src="{{ asset('/assests/plugins/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
    
    {{-- Bootstrap Databales --}}
    <script src="{{ asset('/assests/plugins/datatables.net/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/assests/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>

    {{-- Fullcalendar --}}
    <script src="{{ asset('/adminlte245/bower_components/fullcalendar/dist/fullcalendar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/adminlte245/bower_components/fullcalendar/dist/locale/es.js') }}" type="text/javascript"></script>

    {{-- Pacejs --}}
    <script src="{{ asset('/assests/plugins/pacejs/pace.min.js') }}" type="text/javascript"></script>

<!-- Scripts propios -->

<script src="{{ asset('/assests/js/main.js') }}" type="text/javascript"></script>


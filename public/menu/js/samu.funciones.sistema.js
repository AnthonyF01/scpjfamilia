//*********************************************************************************************************************************
// Funciones que se cargan al culminar de cargar el DOM
//*********************************************************************************************************************************
$(document).ready(function(){
//_Para verificar el CIERRE DE SESION del sistema ----------------------------------------------------
	if($('.logout').length>0){
		$('.logout').on("click",function(e){
			var ht = document.getElementsByTagName("html");
			ht[0].style.filter = "progid:DXImageTransform.Microsoft.BasicImage(grayscale=1)";
			if(confirm("Realmente desea cerrar su sesion?")){
				ht[0].style.filter = "";
				return true;
			}else{
				ht[0].style.filter = "";
				return false;
			}
		});
	}
//_Para el efecto DATEPICKER -------------------------------------------------------------------------
	fncDatePicker();
//_Para el efecto TIMEPICKER -------------------------------------------------------------------------
	fncTimePicker();
//_Para el efecto SELECT (combo buscador) ------------------------------------------------------------
	fncSelect();
//_Para el efecto de COLORBOX ------------------------------------------------------------------------
	fncColorbox();
//_Para Generar los EDITORES -------------------------------------------------------------------------
	fncCKEditor();
//_Para Generar los COMBOS DE BUSQUEDA ---------------------------------------------------------------
	fncComboBuscar();
//_Mantenimiento de FORMULARIOS ----------------------------------------------------------------------
	fncManttoExg();
//_Formateo de ingreso en cajas de texto -------------------------------------------------------------
	if($('.numeric').length>0){ $('.numeric').validCampoFranz('0123456789'); }
	if($(".decimal").length>0){ $(".decimal").numeric({ decimal:".", negative:false });	}
	if($('.alpha').length>0){ $('.alpha').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou'); }
	if($('.upper').length>0){
		$('.upper').on("keyup blur", function(event){
			valor = $(this).val().toUpperCase();
			$(this).val(valor);
		});
	}
	if($('.lower').length>0){
		$('.lower').on("keyup blur", function(event){
			valor = $(this).val().toLowerCase();
			$(this).val(valor);
		});
	}
	if($(".hora").length > 0) {
		$.mask.definitions['H']='[012]'; //_Horas
		$.mask.definitions['N']='[012345]';
		$.mask.definitions['n']='[0123456789]';
		$(".hora").mask("Hn:Nn"); // Hn:Nn:Nn
	}
//_Para cargar pagina AJAX en un colorbox ------------------------------------------------------------
	if($(".btn-ajax-clb").length>0){
		$.fn.dataTableExt.sErrMode = 'throw';
		$(".btn-ajax-clb").on("click", function(){
			var mod_id_sist = $(this).attr("data-id-sist");
			if(mod_id_sist!="" && IsNumeric(mod_id_sist)==true){
				var mod_tipo = $(this).attr("data-tipo"); //-----> LISTAR, MANTTO o MIXTO
				var mod_url = $(this).attr("data-url");
				var mod_params = $(this).attr("data-params");
				var mod_paramsdest = $(this).attr("data-paramsdest");
				var mod_name = $(this).attr("data-name");
				var params = {};
				params.m = mod_id_sist;
				if(mod_params!="" && mod_paramsdest!=""){
					params.param_1 = mod_params;
					params.param_2 = mod_paramsdest;
				}else{
					if(mod_params!="" || mod_paramsdest!=""){
						if(mod_params!=""){ params.param_1=mod_params; }else{ params.param_2=mod_paramsdest; }
					}
				}
				$.post(mod_url, params, function(data){
					$.colorbox({
						width	  : "100%",
						maxWidth  : "90%",
						maxHeight : "95%",
						opacity	  : 0.7,
						current   : false,
						html	  : data,
						onLoad	  : function(){
							$('#cboxPrevious').remove();
							$('#cboxNext').remove();
							$('#cboxBottomCenter').html("<div style='padding-top:7px;'><strong>\""+mod_name.toUpperCase()+"\"</strong></div>");
						},
						onComplete: function(){
							if(mod_tipo!="mantto"){ fncDatatable(); }
							if($(".focus_ajax").length>0){ $(".focus_ajax").focus(); }
						}
					});
				});
			}
			return false;
		});
	}
//_Para cargar pagina IFRAME en un colorbox ----------------------------------------------------------
	if($(".btn-iframe-clb").length>0){
		$(".btn-iframe-clb").on("click", function(){
			var mod_url = $(this).attr("data-url");
			var mod_name = $(this).attr("data-name");
			$.colorbox({
				iframe	  : true,
				width	  	: "100%",
				maxWidth  : "90%",
				height	  : "100%",
				maxHeight : "62%",
				opacity	  : 0.7,
				current   : false,
				href	  	: mod_url,
				onLoad	  : function(){
					$('#cboxPrevious').remove();
					$('#cboxNext').remove();
					$('#cboxBottomCenter').html("<div style='padding-top:7px;'><strong>\""+mod_name.toUpperCase()+"\"</strong></div>");
				}
			});
			return false;
		});
	}
//_Para el efecto POPOVER ----------------------------------------------------------------------------
	if($(".popover_exg").length>0){
		$(".popover_exg").popover({ 
			html: true,
			trigger: 'hover',
			container : 'body'
		});
	}
//_Para el efecto TOOLTIP ----------------------------------------------------------------------------
	if($(".tooltip_exg").length>0){
		$(".tooltip_exg").tooltip({ 
			html: true,
			trigger: 'hover',
			container : 'body'
		});
	}
//_Para cargar los videos de YOUTUBE -----------------------------------------------------------------
	if($("a.youtube").length > 0){
		$("a.youtube").player({
			chromeless: 0,		
			showTime: 0,
			showPlaylist: 0,
			showTitleOverlay: 0
		});
	}
});

//*********************************************************************************************************************************
// Funciones que se cargan al culminar la carga de la pagina por completo
//*********************************************************************************************************************************
$(window).load(function(){
//_Para Generar los DATATABLES -----------------------------------------------------------------------
	fncDatatable();
});

//*********************************************************************************************************************************
// Funciones utilizadas en toda la intranet
//*********************************************************************************************************************************
//_Para Generar los DATEPICKER -----------------------------------------------------------------------
function fncDatePicker(){
	if($(".datepicker").length>0){
		$('.datepicker').bdatepicker({
			format	 : 'dd-mm-yyyy',
			autoclose: true,
			language : 'es'
		});
	}
	if($(".datepicker_usu").length>0){
		var today = new Date();
		var yyyy = today.getFullYear();
		$('.datepicker_usu').bdatepicker({
			format	 : 'dd-mm-yyyy',
			startDate: '31-12-'+(yyyy-80),
			endDate	 : '31-12-'+(yyyy-12),
			language : 'es',
			autoclose: true
		});
	}
	if($(".datepicker_arch").length>0){
		var today = new Date();
		var yyyy = today.getFullYear();
		$('.datepicker_arch').bdatepicker({
			format	 : 'dd-mm-yyyy',
			startDate: '31-12-'+(yyyy-4),
			endDate	 : '31-12-'+(yyyy),
			language : 'es',
			autoclose: true
		});
	}
}
//_Para Generar los TIMEPICKER -----------------------------------------------------------------------
function fncTimePicker(){
	if($(".timepicker").length>0){
		$(".timepicker").timepicker({
			minuteStep: 1,
			showInputs: true,
			disableFocus: true
    });
	}
	if($(".timepicker_esp").length>0){
		$(".timepicker_esp").timepicker({
			minuteStep: 1,
			showInputs: false,
			disableFocus: true
    });
	}
}
//_Para Generar los SELECT (combos de busqueda) ------------------------------------------------------
function fncSelect(){
	if($(".select").length>0){
		$(".select").select2({
			allowClear: true
		});
	}
}
//_Para el efecto de COLORBOX ------------------------------------------------------------------------
function fncColorbox(){
	if($(".clb_img").length>0){
		$(".clb_img").colorbox({
			rel		  : 'gal', 
			slideshow : true,
			current   : false,
			opacity	  : 0.7,
			maxWidth  : "90%"
		});
	}
}
//_Para Generar los DATATABLES -----------------------------------------------------------------------
function fncDatatable(){
	if($('.exg_table,.exg1_table').size() > 0){
		$('.exg_table,.exg1_table').each(function(){
		//_Con tabla de exportacion
			if($(this).is('.tableTools')){
				$(this).dataTable({
					"sPaginationType": "bootstrap",
					"sDom": "<'row separator bottom'<'col-md-5'T><'col-md-3'l><'col-md-4'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
					"oLanguage": {
						"sUrl": rootPath + "js/jquery.datatables.es.txt"
					},
					"oTableTools": {
						"sSwfPath": componentsPath + "common/tables/datatables/assets/lib/extras/TableTools/media/swf/copy_csv_xls_pdf.swf"
						},
					"aoColumnDefs": [
							{ 'bSortable': false, 'aTargets': [ 0 ] }
						],
						"sScrollX": "100%",
						"sScrollXInner": "100%",
						"bScrollCollapse": true,
					"fnInitComplete": function(){
						fncDatatableCompleto(this);
						},
					"bDestroy": true
				});
			}
		//_Mostrar / ocultar columnas
			else if ($(this).is('.colVis')){
				$(this).dataTable({
					"sPaginationType": "bootstrap",
					"sDom": "<'row separator bottom'<'col-md-3'f><'col-md-3'l><'col-md-6'C>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
					"oLanguage": {
						"sUrl": rootPath + "js/jquery.datatables.es.txt"
					},
					"oColVis": {
						"buttonText": "Mostrar / Ocultar Columnas",
						"sAlign": "right"
					},
					"sScrollX": "100%",
							"sScrollXInner": "100%",
							"bScrollCollapse": true,
					"fnInitComplete": function(){ fncDatatableCompleto(this); },
					"bDestroy": true
				});
			}
		//_Con scroll vertical
			else if ($(this).is('.scrollVertical')){
				$(this).dataTable({
					"bPaginate": false,
					"sScrollY": "200px",
					"sScrollX": "100%",
					"sScrollXInner": "100%",
					"bScrollCollapse": true,
					"sDom": "<'row separator bottom'<'col-md-12'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
					"fnInitComplete": function(){ fncDatatableCompleto(this); },
					"bDestroy": true
				});
			}
		//_Llamada de contenido por AJAX
			else if ($(this).is('.ajax')){
				$(this).dataTable({
					"sPaginationType": "bootstrap",
					"sDom": "<'row separator bottom'<'col-md-12'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
					"sScrollX": "100%",
					"sScrollXInner": "100%",
					"bScrollCollapse": true,
					"bProcessing": true,
					"bServerSide": true,
					"oLanguage": { "sUrl": rootPath + "js/jquery.datatables.es.txt" },
					"sAjaxSource": $(this).attr("data-source"),
					"fnInitComplete": function(){ fncDatatableCompleto(this); },
					"iDisplayLength": 200,
					"aLengthMenu":[200,250,300],
					"bDestroy": true
				});
			}
		//_Llamada de contenido por AJAX_EXP
			else if ($(this).is('.expjax')){
				$(this).dataTable({
					"sPaginationType": "bootstrap",
					"bProcessing": true,					
					"sAjaxSource": $(this).attr("data-source"),
					"sDom": "<'row separator bottom'<'col-md-12'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
					"sScrollX": "100%",
					//"sScrollXInner": "100%",
					"bScrollCollapse": true,					
					//"bServerSide": true,
					"oLanguage": { "sUrl": rootPath + "js/jquery.datatables.es.txt" },					
					"fnInitComplete": function(){ fncDatatableCompleto(this); },
					//"iDisplayLength": 200,
					//"aLengthMenu":[200,250,300],
					"bDestroy": true
				});
			}
		//_Para Drag & Drop de las columnas
			else if ($(this).is('.fixedHeaderColReorder')){
				$(this).dataTable({
					"sPaginationType": "bootstrap",
					"sDom": "R<'clear'><'row separator bottom'<'col-md-12'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
					"sScrollX": "100%",
					"sScrollXInner": "100%",
					"bScrollCollapse": true,
					"fnInitComplete": function(){
						fncDatatableCompleto(this);
						var t = this;
						setTimeout(function(){
							new FixedHeader( t );
						}, 1000);
					},
					"bDestroy": true
				});
			}
		//_Para el listado de registros sin busqueda y sin paginacion
			else if ($(this).is('.exg_table_esp')){
				$(this).dataTable({
					"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
					"bPaginate": false,
					"bFilter": false,
					"bInfo": false,
					"bSort": true,
					"sScrollX": "100%",
					"sScrollXInner": "100%",
					"bScrollCollapse": true,
					"oLanguage": { "sUrl": rootPath + "js/jquery.datatables.es.txt" },
					"fnInitComplete": function(){ fncDatatableCompleto(this); },
					"bDestroy": true
				});
				$(this).find("tbody").on('click','tr',function () {
					if($(this).hasClass('selected')){ $(this).removeClass('selected'); }
					else{
						table.$('tr.selected').removeClass('selected');
						$(this).addClass('selected');
					}
				});
			}
		//_Por defecto
			else{
				var table = $(this).dataTable({
					"sPaginationType": "bootstrap",
					"sDom": "<'row separator bottom'<'col-md-3'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
					"sScrollX": "100%",
					"sScrollXInner": "100%",
					"bScrollCollapse": true,
					"oLanguage": { "sUrl": rootPath + "js/jquery.datatables.es.txt" },
					"fnInitComplete": function(){ fncDatatableCompleto(this); },
					"iDisplayLength": 200,
					"aLengthMenu":[200,250,300],
					"bDestroy": true
				});
				$(this).find("tbody").on('click','tr',function () {
					if($(this).hasClass('selected')){ $(this).removeClass('selected'); }
					else{
						table.$('tr.selected').removeClass('selected');
						$(this).addClass('selected');
					}
				});
			}
		});
	}
}
//_Para el final de la carga de los DATATABLES -------------------------------------------------------
function fncDatatableCompleto(that){
	var p = that.parents('.dataTables_wrapper').first();
	var l = p.find('.row').find('label');
	
	l.each(function(index, el) {
		var iw = $("<div>").addClass('col-md-8').appendTo($(el).parent());
		$(el).parent().addClass('form-group margin-none').parent().addClass('form-horizontal');
		$(el).find('input, select').addClass('form-control').removeAttr('size').appendTo(iw);
		$(el).addClass('col-md-4 control-label');
	});
	
	var s = p.find('select');
	s.addClass('.selectpicker').selectpicker();
}
//_Para Generar los EDITORES -------------------------------------------------------------------------
function fncCKEditor(){
	if($(".ckeditor").length>0){
		$("textarea.ckeditor").ckeditor({ height:160 });
	}
	if($(".ckeditor_mini").length>0){
		$("textarea.ckeditor_mini").ckeditor({ height:130, resize_enabled:false });
	}
}
//_Para Generar los COMBOS DE BUSQUEDA ---------------------------------------------------------------
function fncComboBuscar(){
	if($('.exg_combo_buscar').length){
		$('.exg_combo_buscar').select2();
	}
}
//_Propias de EXGADMIN -------------------------------------------------------------------------------
function fncManttoExg(){
//_Para limpiar un formulario con el boton RESET
	if($("button[type=reset]").length>0){
		$("button[type=reset]").on("click", function(){
			if($(".obj_focus").length>0){ $(".obj_focus").focus(); }
		});
	}
//_Para MARCAR o DESMARCAR todos los checkbox de un listado
	if($("#chk_all").length>0){
		$("#chk_all").on("click", function(){
		   if($(".chk").length>0){
				 var marcado = $(this).prop("checked")?true:false;
				 $(".chk").prop("checked",marcado);
				 if(marcado==true){ $(".chk").siblings().addClass("checked"); }
				 else{ $(".chk").siblings().removeClass("checked"); }
		   }
		});
		if($(".chk").length>0){
			$(".chk").on("click", function(){
				if($(".chk:checked").length==$(".chk").length){ 
					$("#chk_all").prop("checked",true); $("#chk_all").siblings().addClass("checked"); 
				}else{
					$("#chk_all").prop("checked",false); $("#chk_all").siblings().removeClass("checked"); 
				}
			});
		}
	}
//_Para ACTUALIZAR el estado de un registro
	if($('.estado_exg').length>0){
		$(".estado_exg").on("click", function(e){
			e.preventDefault();
			var url = $(this).data("url");
			var params = $(this).data("params");
			if(url!="" && params!=""){
				$.post(url, params, function(datos){
					if(trim(datos)=="si"){
						alert("Estado editado satisfactoriamente.");
						document.location.href = document.location;
					}else{
						alert("El estado de este registro no pudo ser editado.");						
					}
				});
			}
		});
	}
//_Para ELIMINAR 1 solo registro
	// if($('.eliminar_exg').length>0){
		$(document).on("click", ".eliminar_exg", function(e){
            debugger
			e.preventDefault();
			var url = $(this).data("url");
			var params = $(this).data("params");
			if(url!="" && params!=""){
				if(confirm("\xbfRealmente desea ELIMINAR este registro?")){
					$.post(url, params, function(datos){
						if($.trim(datos)=="si"){							
							alert("Registro eliminado satisfactoriamente.");
							document.location.href = document.location;
                            location.reload();
						}else{							
							alert("El registro no pudo ser eliminado.");
						}
					});
				}
			}
		});
	// }
//_Para ELIMINAR varios registros
	// if($(".eliminar_varios_exg").length>0){
		$(document).on("click", ".eliminar_varios_exg", function(e){
			e.preventDefault();
			var url = $(this).data("url");
			var params = $(this).data("params");
			if(url!="" && params!=""){
				if($(".chk:checked").length>0){
					registros="";
					$(".chk:checked").each(function(){ registros+=$(this).val()+","; });
					if(confirm("\xbfRealmente desea eliminar los registros marcados?")){
						registros=registros.substring(0,(registros.length-1));
						params+="&id="+registros;
						$.post(url, params, function(datos){
							if($.trim(datos)=="si"){
								alert("Registros eliminados satisfactoriamente.");
								document.location.href = document.location;
                                location.reload();
							}else{
								alert("Los registros no pudieron ser eliminados.");
							}
						});
					}
				}else{
					alert('No se han marcado registros a eliminar.');
				}
			}
		});
	// }	
}

//*********************************************************************************************************************************
// Funciones varias
//*********************************************************************************************************************************
//_Para limpiar los espacios en blanco --------------------------------------------------------------
function ltrim(s) { return s.replace(/^\s+/, ""); }  
function rtrim(s) { return s.replace(/\s+$/, ""); }  
function trim(s)  { return rtrim(ltrim(s)); }
//_Para limpiar un formulario y dar enfoque a un objeto ---------------------------------------------
function fncLimpiarFormulario(frm,obj){ 
	frm.reset(); obj.focus(); 
}
//_Para convertir el texto de una caja de texto en mayuscula ----------------------------------------
function fncConvertirMayuscula(obj){
	obj.value = obj.value.toUpperCase();
}
//_Para forzar el envio de un formulario ------------------------------------------------------------
function fncEnviarFormulario(frm){
	frm.submit();
}
//_Para forzar el evento click de un objeto ---------------------------------------------------------
function oClick(url){
	document.location.href = url;
}
//_Para obtener la fecha del sistema ----------------------------------------------------------------
function fncObtenerFecha(){
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; /* January is 0! */
	var yyyy = today.getFullYear();
	if(dd<10){dd='0'+dd}
	if(mm<10){mm='0'+mm}
	fecha = dd + '-' + mm + '-' + yyyy;
	return fecha
}
//_Para dar Formato a la fecha de ingreso en tu caja de texto ---------------------------------------
var primerslap=false;
var segundoslap=false;
function fncFormatearFecha(fecha){ // dd-mm-YYY
	var long = fecha.length;
	var dia;
	var mes;
	var ano;
	
	if ((long>=2) && (primerslap==false)) { 
		dia=fecha.substr(0,2);
		if((fncEsNumerico(dia)==true) && (dia<=31) && (dia!="00")){ fecha=fecha.substr(0,2)+"-"+fecha.substr(3,7); primerslap=true; }
		else{ fecha=""; primerslap=false;}
	}else{
		dia=fecha.substr(0,1);
		if (fncEsNumerico(dia)==false){ fecha=""; }
		if ((long<=2) && (primerslap=true)){ fecha=fecha.substr(0,1); primerslap=false; }
	}
	if((long>=5) && (segundoslap==false)){ 
		mes=fecha.substr(3,2);
		if((fncEsNumerico(mes)==true) &&(mes<=12) && (mes!="00")){ fecha=fecha.substr(0,5)+"-"+fecha.substr(6,4); segundoslap=true; }
		else{ fecha=fecha.substr(0,3); segundoslap=false; }
	}else{
		if((long<=5) && (segundoslap=true)) { fecha=fecha.substr(0,4); segundoslap=false; }
	}
	if(long>=7){ 
		ano=fecha.substr(6,4);
		if(fncEsNumerico(ano)==false) { fecha=fecha.substr(0,6); }
		else{ 
			if(long==10){ 
				if ((ano==0) || (ano<1900) || (ano>2500)){ fecha=fecha.substr(0,6); } 
			}
		}
	}
	if (long>=10){
		fecha=fecha.substr(0,10);
		dia=fecha.substr(0,2);
		mes=fecha.substr(3,2);
		ano=fecha.substr(6,4);
		// Año no viciesto y es febrero y el dia es mayor a 28
		if( (ano%4 != 0) && (mes ==02) && (dia > 28) ){ fecha=fecha.substr(0,2)+"/"; }
	}
	return (fecha);
}
//_Para restar 2 fechas -----------------------------------------------------------------------------
function fncRestarFechas(CadenaFecha1,CadenaFecha2){  
   var fecha1 = new fncDatosFecha( CadenaFecha1 )     
   var fecha2 = new fncDatosFecha( CadenaFecha2 )  
   var miFecha1 = new Date( fecha1.anio, fecha1.mes, fecha1.dia )  
   var miFecha2 = new Date( fecha2.anio, fecha2.mes, fecha2.dia )  
   var diferencia = miFecha1.getTime() - miFecha2.getTime()  
   var dias = Math.floor(diferencia / (1000 * 60 * 60 * 24))  
   var segundos = Math.floor(diferencia / 1000)  
   //alert ('La diferencia es de ' + dias + ' dias,\no ' + segundos + ' segundos.')  
   return dias;
}
//_Función para mostrar el modal con data del promedio de tiempo de resolución
$(document).on('click','.avgmatmod',function(){	
	$.ajax({
		type: 'GET',
		url:$(this).attr("data-source"),
		data:$(this).attr("data-params"),
		dataType : 'html',
		success : function(data){	        
			$('.modal-body').html(data);
			$('#modal-exp').modal('show');
	    },
	    // código a ejecutar si la petición falla;
	    error : function(xhr, status) {
	    	console.log(status);
	    	console.log(xhr);
	        alert('Disculpe, existió un problema');
	    }	
	})
});

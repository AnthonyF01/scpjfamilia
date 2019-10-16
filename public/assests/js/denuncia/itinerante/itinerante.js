// select row table
$(document).on('click', 'table.table-cell>tbody>tr', function () {
    if ( $(this).hasClass('selected') ) {
        $(this).removeClass('selected');
    }
    else {
        $("table.table-cell tbody").find('tr.selected').removeClass('selected');
        $(this).addClass('selected');
    }
});

// controlador de mensajes del sistema
$(document).ready(function() {
    // debugger
    $('#li_create').remove();
    $('#li_edit').remove();
    $('#parent').remove();
    $(".breadcrumb").append('<li id="parent" class="active"><i class="fa fa-balance-scale"></i> Justicia Itinerante</li>');

    if (typeof sessionStorage.jitinerante !== 'undefined' && sessionStorage.jitinerante != '') {
        var data = JSON.parse(sessionStorage.jitinerante);
        if (data.status == 'success') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-success"); }
        if (data.status == 'error') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-error"); }
        $("div#box_message").removeClass('hide');
        $("div#box_message").addClass('show');
        $("div#message").text(data.info);
        sessionStorage.removeItem('jitinerante');
    }
});

// ------------------------------------------------------------------------------------------------------------------------

// FUNCIONES DE LOS FILTROS DE LA TABLA PRINCIPAL

// date1 y date2 definidos en /denuncia/itinerante/index.blade.php
if ((typeof date1 !== 'undefined' && date1 != '') && (typeof date2 !== 'undefined' && date2 != '')) {
    var Fecha1 = moment(date1).tz("America/Lima").format("YYYY-MM-DD");
    var Fecha2 = moment(date2).tz("America/Lima").format("YYYY-MM-DD");
} else {
    var Fecha1 = moment().tz("America/Lima").format("YYYY-MM-DD");
    var Fecha2 = moment().tz("America/Lima").format("YYYY-MM-DD");
}

// autocomplete select2
$('#selectVictima').select2({ // SELECT CLASS
    placeholder: 'Buscar por DNI, Nombre y Apellido ...',
    ajax: {
      url: '/denuncia/autocomplete',
      dataType: 'json',
      delay: 250,
      processResults: function (data) {
        return {
          results:  $.map(data, function (item) {
                return {
                    id: item.nro_doc,
                    text: item.nro_doc+" | "+item.nombre+" "+item.apellido
                }
            })
        };
      },
      cache: true
    }
});
$('#selectVictima').on('change', function(event) {
    var selectedVictima = $(this).find('option:selected').val();
    ajaxLoad('/denuncia/jitinerante/index?dni='+selectedVictima);
});

/* comisaria seleccionado */
function showRowC(elm) {
    var value = $(elm).val();
    var path = "{{ url('/') }}";
    var str = "/denuncia/jitinerante/index?tblcomisaria_id=" + value;
    javascript:ajaxLoad(str);
}

/* cantidad de filas de la tabla */
function showRow(elm) {
    var value = $(elm).val();
    var path = "{{ url('/') }}";
    var str = "/denuncia/jitinerante/index?show=" + value;
    javascript:ajaxLoad(str);
}

/* Intervalo de fechas */
function showIntFech(fecha1, fecha2, checked) {
    var str = "/denuncia/jitinerante/index?fecha1="+fecha1+"&fecha2="+fecha2+"&checked="+checked;
    javascript:ajaxLoad(str);
}

// intervalo de fechas
$("input[name='intfech']").iCheck({
    checkboxClass: 'icheckbox_square-blue',
    radioClass: 'iradio_square-blue',
    increaseArea: '20%'
});
// daterangepicker
$('#dateRange').daterangepicker({
    locale: {
        'format': 'DD/MM/YYYY',
        'separator': ' - ',
        'applyLabel': 'Aplicar',
        'cancelLabel': 'Cancelar',
        'fromLabel': 'From',
        'toLabel': 'To',
        'customRangeLabel': 'Custom',
        'daysOfWeek': [
            'Do',
            'Lu',
            'Ma',
            'Mi',
            'Ju',
            'Vi',
            'Sa'
        ],
        'monthNames': [
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Setiembre',
            'Octubre',
            'Noviembre',
            'Diciembre'
        ],
        'firstDay': 1
    },
    startDate: moment(Fecha1),
    endDate: moment(Fecha2),
});
// boton aplicar fecha - daterangepicker 
$('#dateRange').on('apply.daterangepicker', function (ev, picker) {
    var startDate = picker.startDate;
    var endDate = picker.endDate;
    // alert(startDate.format('YYYY-MM-DD')+" - "+endDate.format('YYYY-MM-DD'));
    if ($('input[name="intfech"]').prop('checked')) {
        showIntFech(startDate.format('YYYY-MM-DD'),endDate.format('YYYY-MM-DD'),$('input[name="intfech"]:checked').length);
    }
});
// event ifChecked checkbox
$(document).on('ifChecked', 'input[name="intfech"]', function() {
    debugger
    // alert("ifChecked");
    var fecha1 = $('#dateRange').val().split(' - ')[0].split('/')[2]+'-'+$('#dateRange').val().split(' - ')[0].split('/')[1]+'-'+$('#dateRange').val().split(' - ')[0].split('/')[0];
    var fecha2 = $('#dateRange').val().split(' - ')[1].split('/')[2]+'-'+$('#dateRange').val().split(' - ')[1].split('/')[1]+'-'+$('#dateRange').val().split(' - ')[1].split('/')[0];
    showIntFech(fecha1,fecha2,$('input[name="intfech"]:checked').length);
});
// event ifUnchecked checkbox
$(document).on('ifUnchecked', 'input[name="intfech"]', function() {
    debugger
    var fecha1 = $('#dateRange').val().split(' - ')[0].split('/')[2]+'-'+$('#dateRange').val().split(' - ')[0].split('/')[1]+'-'+$('#dateRange').val().split(' - ')[0].split('/')[0];
    var fecha2 = $('#dateRange').val().split(' - ')[1].split('/')[2]+'-'+$('#dateRange').val().split(' - ')[1].split('/')[1]+'-'+$('#dateRange').val().split(' - ')[1].split('/')[0];
    showIntFech(fecha1,fecha2,$('input[name="intfech"]:checked').length);
});

// funcion adicial - detalles de la victima
function showDetalis(elm) {
    debugger
    if ($(elm).attr('data-toggle') == '1') {
        $(elm).css({ background: 'url("/assests/img/details_close.png") no-repeat center center' });
        $(elm).removeAttr('data-toggle');
        $(elm).attr('data-toggle','0');
        $(elm).parent('tr').next('tr.details').css({ display: 'table-row' });
    }else{
        if ($(elm).attr('data-toggle') == '0') {
            $(elm).css({ background: 'url("/assests/img/details_open.png") no-repeat center center' });
            $(elm).removeAttr('data-toggle');
            $(elm).attr('data-toggle','1');
            $(elm).parent('tr').next('tr.details').css({ display: 'none' });
        }
    }
}


// FUNCIONES DE CARGA DE LA TABLA PRINCIPAL

// paginadores de la tabla
$(document).on('click', 'a.page-link', function (event) {
    event.preventDefault();
    ajaxLoad($(this).attr('href'));
});

// Carga todas las vistas: index, create, edit.
function ajaxLoad(filename, content, action = '', message = '') {

    // add breadcrumb
    if (typeof filename !== 'undefined' && filename != '') {
        var redirect = "javascript:ajaxLoad(\""+filename.split("denuncia")[0]+"denuncia"+"\")";
        if (filename.indexOf('edit') != -1) {
            $('#parent').remove();
            $(".breadcrumb").append("<li id='parent' class='active'><a href='"+redirect+"'><i class='fa fa-balance-scale'></i> Denuncias</a></li><li id='li_edit' class='active'><i class='fa fa-edit'></i> Editar Denuncia</li>");
        }else if (filename.indexOf('create') != -1) {
            $('#parent').remove();
            $(".breadcrumb").append("<li id='parent' class='active'><a href='"+redirect+"'><i class='fa fa-balance-scale'></i> Denuncias</a></li><li id='li_create' class='active'><i class='fa fa-edit'></i> Crear Denuncia</li>");
        }else {
            $('#li_create').remove();
            $('#li_edit').remove();
            $('#parent').remove();
            $(".breadcrumb").append('<li id="parent" class="active"><i class="fa fa-balance-scale"></i> Denuncias</li>');
        }
    }else{
        $('#li_create').remove();
        $('#li_edit').remove();
        $('#parent').remove();
        $(".breadcrumb").append('<li id="parent" class="active"><i class="fa fa-balance-scale"></i> Denuncias</li>');
    }

    content = typeof content !== 'undefined' ? content : 'content_ajax';
    $('.loading').show();
    debugger;
    $.ajax({
        type: "GET",
        url: filename,
        cache: false, // al navegar atras se muestra todo correctamente
        contentType: false,
        success: function (data) {
            debugger
            // revisar en este archivo lo que se agrega a la varaible "data"
            // data+="<script type='text/javascript'> $('#tblcomisaria_id').select2(); $('#tblinstancia_id').select2(); $(\"input[name='intfech']\").iCheck({ checkboxClass: 'icheckbox_square-blue', radioClass: 'iradio_square-blue', increaseArea: '20%' }); $('#dateRange').daterangepicker({ locale: {'format': 'DD/MM/YYYY', 'separator': ' - ', 'applyLabel': 'Aplicar', 'cancelLabel': 'Cancelar', 'fromLabel': 'From','toLabel': 'To', 'customRangeLabel': 'Custom', 'daysOfWeek': ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],'monthNames': ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre'],'firstDay': 1},startDate: moment(Fecha1),endDate: moment(Fecha2),}); $('#dateRange').on('apply.daterangepicker', function (ev, picker) { var startDate = picker.startDate; var endDate = picker.endDate; if ($('input[name=\"intfech\"]').prop('checked')) { showIntFech(startDate.format('YYYY-MM-DD'),endDate.format('YYYY-MM-DD'),$('input[name=\"intfech\"]:checked').length); } }); </script>";
            $("#" + content).html(data);
            $("input#search").focus();
            $('.loading').hide();
            if (action == 'update' || action == 'store' || action == 'destroy') {
                $("div#box_message").removeClass('hide');
                $("div#box_message").addClass('show');
                $("div#message").text(message);
            }else{
                $('div#box_message').removeClass('show');
                $('div#box_message').addClass('hide');
            }
        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
}

// -------------------------------------------------------------------------------------------------------------------------

// FUNCIONES OPERADORAS

/* abrir modal */
function openModal(form,modal,select,funcion){
    debugger
    $(".loading").show();
    var elemento = form.replace('form_','');
    elemento = elemento.replace('_modal','');
    $(".store").hide();
    $(".update").hide();
    $(".update_btn").attr('disabled','disabled');
    if ($("#"+select).val() !== null) {
        var value = $("#"+select).val();
        $.ajax({
            type: 'GET',
            url: '/'+funcion+'/'+value,
            cache: false,
            contentType: false,
            success: function (data) {
                debugger;
                var agresor_id,victima_id,tbldepartamento_id,tblprovincia_id,tbldistrito_id;
                for (var item in data) {
                    if (item == 'id') {
                        if (elemento == 'victima') {
                            victima_id = data[item];
                        }
                        if (elemento == 'agresor') {
                            agresor_id = data[item];
                        }
                    }
                    if (item == 'tbldepartamento_id') {
                        tbldepartamento_id = data[item];
                    }
                    if (item == 'tblprovincia_id') {
                        tblprovincia_id = data[item];
                    }
                    if (item == 'tbldistrito_id') {
                        tbldistrito_id = data[item];
                    } else {
                        $('form#'+form+' #'+item).val(data[item]);
                    }
                }

                myPlugin = new myqueue();
                myPlugin.add(function (dfd) {
                  setTimeout(function () {

                    $('form#'+form+' #tbldepartamento_id').val(tbldepartamento_id).trigger('change');

                    console.log("1");
                    dfd.resolve();
                  }, 1000);
                }, "first");

                myPlugin.add(function (dfd) {
                  setTimeout(function () {

                    $('form#'+form+' #tblprovincia_id').val(tblprovincia_id).trigger('change');

                    console.log("2");
                    dfd.resolve();
                  }, 1000);
                }, "second");

                myPlugin.add(function (dfd) {
                  setTimeout(function () {

                    $('form#'+form+' #tbldistrito_id').val(tbldistrito_id).trigger('change');

                    $(".update_btn").removeAttr('disabled');
                    $(".loading").hide();

                    console.log("3");
                    dfd.resolve();
                  }, 1000);
                }, "third");

                myPlugin.start();

                // cambiar el metodo y y la url del formulario
                var action = $("form#"+form).attr('action');
                if (elemento == 'victima') {
                    action = action.replace('store', victima_id);
                }
                if (elemento == 'agresor') {
                    action = action.replace('store', agresor_id);
                }
                $("form#"+form).attr('action',action);
                $("form#"+form).append('<input name="_method" type="hidden" value="PUT">');

                $("#myModal1").find(".modal-header").css({background:'#f39c12'});
                $("#myModal2").find(".modal-header").css({background:'#f39c12'});
                if (elemento == 'victima') {
                    $(".modal-header").find("h5").html('Modificar victima');
                }
                if (elemento == 'agresor') {
                    $(".modal-header").find("h5").html('Modificar agresor');
                }

                $(".update").show();
                return $('#'+modal).modal('toggle');
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
            }
        });
    }else{
        // revertir cambios del metodo y la url del formulario
        var action = $("form#"+form).attr('action');
        var split = action.split('/');
        action = split[0]+'/'+split[1]+'/'+split[2]+'/'+split[3]+'/store';
        $("form#"+form).attr('action',action);
        // $("form#"+form).append('<input name="_method" type="hidden" value="PUT">');
        $("form#"+form+' input[name=_method]').remove();

        $("#myModal1").find(".modal-header").css({background:'#337ab7'});
        $("#myModal2").find(".modal-header").css({background:'#337ab7'});
        if (elemento == 'victima') {
            $(".modal-header").find("h5").html('Registrar victima');
        }
        if (elemento == 'agresor') {
            $(".modal-header").find("h5").html('Registrar agresor');
        }

        $(".loading").hide();
        $(".store").show();
        return $('#'+modal).modal('toggle');
    }

}

/* resetear select */
function refresh(select, form) {
    $('#'+select).prev().find('span').attr('class','fa fa-plus');
    $("#"+select).val(null).trigger('change');
    resetPartes(form);
}

/* registrar victima/agresor */
function savePartes(id_form) {
    event.preventDefault();
    var form = $('form#'+id_form);
    var data = new FormData($('form#'+id_form)[0]);
    var url = form.attr("action");
    debugger;
    $.ajax({
        type: form.attr('method'),
        url: url,
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            debugger;
            $('.is-invalid').removeClass('is-invalid');
            if (data.fail) {
                for (control in data.errors) {
                    $('#' + control).addClass('is-invalid');
                    $('#error-' + control).html(data.errors[control]);
                }
            } else {
                // ajaxLoad(data.redirect_url, content='content_ajax', data.type, data.info);
                // guarda en el localStorage los mensajes de registro de victima en la denuncia.
                switch(data.tab){
                    case 'victima_modal':
                        sessionStorage.setItem('victima_modal', JSON.stringify(data));
                        break;
                    case 'agresor_modal':
                        sessionStorage.setItem('agresor_modal', JSON.stringify(data));
                        break;
                }
                if (typeof sessionStorage.victima_modal !== 'undefined' && sessionStorage.victima_modal != '') {
                    var data = JSON.parse(sessionStorage.victima_modal);
                    if (data.status == 'success') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-success"); }
                    if (data.status == 'error') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-error"); }
                    $("div#box_message").removeClass('hide');
                    $("div#box_message").addClass('show');
                    $("div#message").text(data.info);
                    sessionStorage.removeItem('victima_modal');
                }
                if (typeof sessionStorage.agresor_modal !== 'undefined' && sessionStorage.agresor_modal != '') {
                    var data = JSON.parse(sessionStorage.agresor_modal);
                    if (data.status == 'success') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-success"); }
                    if (data.status == 'error') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-error"); }
                    $("div#box_message").removeClass('hide');
                    $("div#box_message").addClass('show');
                    $("div#message").text(data.info);
                    sessionStorage.removeItem('agresor_modal');
                }
                $('#myModal1').modal('hide');
                $('#myModal2').modal('hide');
                resetPartes(id_form);
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            alert("Error: " + errorThrown);
        }
    });
    return false;
}

/* limpiar formulario victima/agresor */
function resetPartes(id_form) {
    $('form#'+id_form).find('span.invalid-feedback').empty();
    $('form#'+id_form).find('select,input').css({"color":"#555"});

    $('form#'+id_form).trigger("reset");
    $("#tblprovincia_id, .tblprovincia_id").empty();
    $("#tblprovincia_id, .tblprovincia_id").append("<option value=''>Seleccione una Provincia</option>");
    $("#tbldistrito_id, .tbldistrito_id").empty();
    $("#tbldistrito_id, .tbldistrito_id").append("<option value=''>Seleccione un Distrito</option>");
    $("#tblprovincia_id").attr('disabled', 'disabled');
    $("#tbldistrito_id").attr('disabled', 'disabled');
}

// agregar victimas en la tabla
window.TableVictimas = $('#victimas').DataTable( {
    "ordering": false,
    createdRow: function (row, data, index) {
        $('tr', row).addClass('data_victima');
    }
} );

// eliminar filas de la tabla victimas
$('#victimas tbody').on( 'click', 'a#remove', function () {
    TableVictimas
        .row( $(this).parents('tr') )
        .remove()
        .draw();
} );

// agregar agresores en la tabla
window.TableAgresores = $('#agresores').DataTable( {
    "ordering": false,
    createdRow: function (row, data, index) {
        $('tr', row).addClass('data_agresor');
    }
} );
// eliminar filas de la tabla agresores
$('#agresores tbody').on( 'click', 'a#remove', function () {
    TableAgresores
        .row($(this).parents('tr'))
        .remove()
        .draw();
} );

// contadores de la tabla victima
var vcounter = 1;

// cargar filas de la tabla victima
function cargarVictima(victima_arr) {
    $(".loading").css('display','block');
    for (var i=0;i<victima_arr.length;i++) {
        agregarVictima(victima_arr[i].id);
    }
    $(".loading").css('display','none');
}

// agregar filas a la tabla victima
function agregarVictima(victima_id) {
    $(".loading").css('display','block');
    if (typeof victima_id === "undefined" || victima_id === null) { 
        var victima_id = $("#victima_id").val();
    }
    if ( typeof victima_id !== 'undefined' && (victima_id) ) {
        $.ajax({
            url: '/getVictima/'+victima_id,
            type: 'GET',
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                debugger;

                var rowNode_esp = TableVictimas.row.add( [
                    '<a id="remove" class="remove btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Eliminar" href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i></a>',
                    '<label class="doc">'+data.nro_doc+'</label> <input type="hidden" name="victima_id" id="victima_id'+vcounter+'" value="'+victima_id+'"> <input type="hidden" name="vcounter" id="vcounter'+vcounter+'" value="'+vcounter+'">',
                    '<span class="span_det" style="font-size: 13px;" name="nombres" id="nombres'+vcounter+'">'+data.apellido+' '+data.nombre+'</span>',
                    '<span class="span_det" style="font-size: 13px;" name="edad" id="edad'+vcounter+'">'+data.edad+'</span>',
                    '<span class="span_det" style="font-size: 13px;" name="hijos" id="hijos'+vcounter+'">'+data.hijos+'</span>',
                    '<span class="span_det" style="font-size: 13px;" name="tbldepartamento_nombre" id="tbldepartamento_nombre'+vcounter+'">'+data.tbldepartamento.nombre+'</span>',
                ] ).draw(false).node();

                // agregar clase a la fila creada
                $(rowNode_esp).addClass('data_victima');
         
                vcounter++;

                $(".loading").css('display','none');

            },
            error: function (xhr, textStatus, errorThrown) {
                alert("Error: " + errorThrown);
            }
        });
    }else{
        alert("Debe seleccionar una Víctima");
        return false;
    }
}

// contador de la tabla agresor
var acounter = 1;

// cargar filas de la tabla victima
function cargarAgresor(agresor_arr) {
    $(".loading").css('display','block');
    for (var i=0;i<agresor_arr.length;i++) {
        agregarAgresor(agresor_arr[i].id,agresor_arr[i].pivot.tblparentesco_id);
    }
    $(".loading").css('display','none');
}

// agregar filas a la tabla agresor
function agregarAgresor(agresor_id,tblparentesco_id) {
    $(".loading").css('display','block');
    if ((typeof agresor_id === "undefined" || agresor_id === null) && (typeof tblparentesco_id === "undefined" || tblparentesco_id === null)) { 
        var agresor_id = $("#agresor_id").val();
    }
    if ( typeof agresor_id !== 'undefined' && (agresor_id) ) {
        $.ajax({
            url: '/getAgresor/'+agresor_id,
            type: 'GET',
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                debugger;

                // tipos de parentesco
                var options = '';
                for (var i = 0; i < data.tblparentescos.length; i++) {
                    // verifica si existe la columna pivot adicional tblparentesco_id
                    if ( typeof tblparentesco_id !== 'undefined' && (tblparentesco_id) && (tblparentesco_id == data.tblparentescos[i].id)) {
                        options += '<option selected="selected" value="'+data.tblparentescos[i].id+'">'+data.tblparentescos[i].nombre+'</option>';
                        
                    } else {
                        options += '<option value="'+data.tblparentescos[i].id+'">'+data.tblparentescos[i].nombre+'</option>';
                    }
                }

                var rowNode_esp = TableAgresores.row.add( [
                    '<a id="remove" class="remove btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Eliminar" href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i></a>',
                    '<label class="doc">'+data.agresor.nro_doc+'</label> <input class="text" type="hidden" name="agresor_id" id="agresor_id'+acounter+'" value="'+agresor_id+'"> <input class="text" type="hidden" name="acounter" id="acounter'+acounter+'" value="'+acounter+'">',
                    '<span class="span_det" style="font-size: 13px;" name="nombres" id="nombres'+acounter+'">'+data.agresor.apellido+' '+data.agresor.nombre+'</span>',
                    '<select name="tblparentesco_id" id="tblparentesco_id'+acounter+'" style="width:100%" class="form-control input-sm text">'+options+'</select>',
                    '<span class="span_det" style="font-size: 13px;" name="tbldepartamento_nombre" id="tbldepartamento_nombre'+acounter+'">'+data.agresor.tbldepartamento.nombre+'</span>',
                ] ).draw(false).node();

                // agregar clase a la fila creada
                $(rowNode_esp).addClass('data_agresor');
         
                acounter++;

                $(".loading").css('display','none');

            },
            error: function (xhr, textStatus, errorThrown) {
                alert("Error: " + errorThrown);
            }
        });
    }else{
        alert("Debe seleccionar un Agresor");
        return false;
    }
}

// registrar denuncias (victimas - agresores) - editar
$(document).on('submit', 'form#form_denuncia_itinerante', function (event) {
    event.preventDefault();
    $(".loading").show();
    var form = $(this);
    var formData  = new FormData($(this)[0]);
    var url = form.attr("action");
    // alert(url);
    var str;    
    debugger;

    // input checkbox
    if (formData.has('device')) {
        formData.set('device', $('input[name="device"]:checked').length);
    }
    if (formData.has('itinerancia')) {
        formData.set('itinerancia', $('input[name="itinerancia"]:checked').length);
    }

    // input radio
    var pabogado = $('input[name=pabogado]:checked').val();
    if (typeof pabogado !== 'undefined' && (pabogado)) {
        formData.append("pabogado",pabogado);
    }
    var pdenuncia = $('input[name=pdenuncia]:checked').val();
    if (typeof pdenuncia !== 'undefined' && (pdenuncia)) {
        formData.append("pdenuncia",pdenuncia);
    }

    // de ambas tablas
    var rowCountV = $('#victimas tbody tr.data_victima').length;
    formData.append("rowCountV",rowCountV); // me servira en el controlador para identificar los campos
    var rowCountA = $('#agresores tbody tr.data_agresor').length;
    formData.append("rowCountA",rowCountA); // me servira en el controlador para identificar los campos

    if (rowCountV != 0 && rowCountA != 0) {

        // tabla victimas
        var vcounters = '';
        var vinputs = $("input[name=vcounter]").map(function() { // 
            vcounters+=','+$(this).attr('value');
        });
        var vidalls, vnamealls;
        var vitemArray, split_vcounters = vcounters.split(',');
        var vtotal = [];
        for (var i = 0; i < rowCountV; i++) {
            vitemArray = {};
            vidalls = $('#victimas tbody tr:eq(' + i + ') td').map(function() {
                if($(this).find("input").attr("name") == 'victima_id') { 
                    return $(this).find("input").attr("id");  
                }else{ 
                    return $(this).find("span").attr("id");
                }
            });
            vnamealls = $('#victimas tbody tr:eq(' + i + ') td').map(function() {
                if($(this).find("input").attr("name") == 'victima_id') { 
                    return $(this).find("input").attr("name");  
                }else{ 
                    return $(this).find("span").attr("name");
                }
            });
            // debugger;
            for (var j = 0; j < vidalls.length; j++) {
                if (vnamealls[j] == 'victima_id') { // input
                    vitemArray[vnamealls[j]+split_vcounters[i+1]] = $("#"+vidalls[j]).val(); // .val()
                    formData.append(vnamealls[j]+split_vcounters[i+1],$("#"+vidalls[j]).val()); // .val()
                }else{ // columnas de spans
                    vitemArray[vnamealls[j]+split_vcounters[i+1]] = $("#"+vidalls[j]).text(); // .val()
                    formData.append(vnamealls[j]+split_vcounters[i+1],$("#"+vidalls[j]).text()); // .val()
                }
            }
            vtotal.push(vitemArray);
        }
        formData.append('vcounters',vcounters);

        console.log(vtotal);

        // tabla partes
        var acounters = '';
        var ainputs = $("input[name=acounter]").map(function() { // 
            acounters+=','+$(this).attr('value');
        });
        var aidalls, anamealls;
        var aitemArray, split_acounters = acounters.split(',');
        var atotal = [];
        for (var i = 0; i < rowCountA; i++) {
            aitemArray = {};
            aidalls = $('#agresores tbody tr:eq(' + i + ') .text').map(function() {
                return $(this).attr("id");
            });
            anamealls = $('#agresores tbody tr:eq(' + i + ') .text').map(function() {
                return $(this).attr("name");
            });
            // debugger;
            for (var j = 0; j < aidalls.length; j++) {
                aitemArray[anamealls[j]+split_acounters[i+1]] = $("#"+aidalls[j]).val(); // .val()
                formData.append(anamealls[j]+split_acounters[i+1],$("#"+aidalls[j]).val()); // .val()
            }
            atotal.push(aitemArray);
        }
        formData.append('acounters',acounters);

        console.log(atotal);

        formData.append('rmodal',0);

        debugger

        $.ajax({
            url: url,
            type: form.attr('method'),
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                debugger;
                // $('.is-invalid').removeClass('is-invalid');
                if (data.fail) {
                    str = '<ul>'
                    for (control in data.errors) {
                        // $('#' + control).addClass('is-invalid');
                        // $('#error-' + control).html(data.errors[control]);
                        str += '<li>'+data.errors[control]+'</li>';
                    }
                    str += '</ul>';
                    $(".alert.alert-danger").show();
                    $(".alert.alert-danger").html(str);
                    // scroll to top
                    window.scrollTo(0,0);
                } else {
                    // ajaxLoad(data.redirect_url, content='content_ajax', data.type, data.info);
                    window.location.href = url_ditr;
                    sessionStorage.setItem('jitinerante', JSON.stringify(data));
                    $(".alert.alert-danger").hide();
                }
                $(".loading").hide();
            },
            error: function (xhr, textStatus, errorThrown) {
                $(".loading").hide();
                alert("Error: " + errorThrown);
            }
        });

    } else {

        str = '<ul>'
        str += '<li>Las Victimas y los Agresores deben ser registrados</li>';
        str += '</ul>';
        $(".alert.alert-danger").show();
        $(".alert.alert-danger").html(str);
        // scroll to top
        window.scrollTo(0,0);

        $(".loading").css('display','none');

    }

    return false;
});


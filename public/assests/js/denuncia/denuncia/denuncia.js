// mostrar los mensajes de registro de vicima, agresor guardados en el localStorage
$(document).ready(function() {
    debugger

    $('#li_create').remove();
    $('#li_edit').remove();
    $('#parent').remove();
    $(".breadcrumb").append('<li id="parent" class="active"><i class="fa fa-balance-scale"></i> Denuncias</li>');

    if (typeof sessionStorage.victima !== 'undefined' && sessionStorage.victima != '') {
        var data = JSON.parse(sessionStorage.victima);
        if (data.status == 'success') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-success"); }
        if (data.status == 'error') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-error"); }
        $("div#box_message").removeClass('hide');
        $("div#box_message").addClass('show');
        $("div#message").text(data.info);
        sessionStorage.removeItem('victima');
    }
    if (typeof sessionStorage.agresor !== 'undefined' && sessionStorage.agresor != '') {
        var data = JSON.parse(sessionStorage.agresor);
        if (data.status == 'success') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-success"); }
        if (data.status == 'error') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-error"); }
        $("div#box_message").removeClass('hide');
        $("div#box_message").addClass('show');
        $("div#message").text(data.info);
        sessionStorage.removeItem('agresor');
    }
    if (typeof sessionStorage.cem !== 'undefined' && sessionStorage.cem != '') {
        var data = JSON.parse(sessionStorage.cem);
        if (data.status == 'success') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-success"); }
        if (data.status == 'error') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-error"); }
        $("div#box_message").removeClass('hide');
        $("div#box_message").addClass('show');
        $("div#message").text(data.info);
        sessionStorage.removeItem('cem');
    }
    if (typeof sessionStorage.denuncia !== 'undefined' && sessionStorage.denuncia != '') {
        var data = JSON.parse(sessionStorage.denuncia);
        if (data.status == 'success') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-success"); }
        if (data.status == 'error') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-error"); }
        $("div#box_message").removeClass('hide');
        $("div#box_message").addClass('show');
        $("div#message").text(data.info);
        sessionStorage.removeItem('denuncia');
    }
    if (typeof sessionStorage.familia !== 'undefined' && sessionStorage.familia != '') {
        var data = JSON.parse(sessionStorage.familia);
        if (data.status == 'success') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-success"); }
        if (data.status == 'error') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-error"); }
        $("div#box_message").removeClass('hide');
        $("div#box_message").addClass('show');
        $("div#message").text(data.info);
        sessionStorage.removeItem('familia');
    }
    if (typeof sessionStorage.remision !== 'undefined' && sessionStorage.remision != '') {
        var data = JSON.parse(sessionStorage.remision);
        if (data.status == 'success') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-success"); }
        if (data.status == 'error') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-error"); }
        $("div#box_message").removeClass('hide');
        $("div#box_message").addClass('show');
        $("div#message").text(data.info);
        sessionStorage.removeItem('remision');
    }
    if (typeof sessionStorage.fase3 !== 'undefined' && sessionStorage.fase3 != '') {
        var data = JSON.parse(sessionStorage.fase3);
        if (data.status == 'success') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-success"); }
        if (data.status == 'error') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-error"); }
        $("div#box_message").removeClass('hide');
        $("div#box_message").addClass('show');
        $("div#message").text(data.info);
        sessionStorage.removeItem('fase3');
    }
    if (typeof sessionStorage.fase4 !== 'undefined' && sessionStorage.fase4 != '') {
        var data = JSON.parse(sessionStorage.fase4);
        if (data.status == 'success') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-success"); }
        if (data.status == 'error') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-error"); }
        $("div#box_message").removeClass('hide');
        $("div#box_message").addClass('show');
        $("div#message").text(data.info);
        sessionStorage.removeItem('fase4');
    }
});

// paginadores
$(document).on('click', 'a.page-link', function (event) {
    event.preventDefault();
    ajaxLoad($(this).attr('href'));
});

var Fecha1 = moment().tz("America/Lima").format("YYYY-MM-DD");
var Fecha2 = moment().tz("America/Lima").format("YYYY-MM-DD");

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

$(document).on('submit', 'form', function (event) {
    event.preventDefault();
    debugger
    var form = $(this);
    var data = new FormData($(this)[0]);
    // cem 
    if (data.has('asistencialegal')) {
        data.set('asistencialegal', $('input[name="asistencialegal"]:checked').length);
    }
    if (data.has('psicologia')) {
        data.set('psicologia', $('input[name="psicologia"]:checked').length);
    }
    if (data.has('ministerio')) {
        data.set('ministerio', $('input[name="ministerio"]:checked').length);
    }
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
                    case 'victima':
                        sessionStorage.setItem('victima', JSON.stringify(data));
                        break;
                    case 'agresor':
                        sessionStorage.setItem('agresor', JSON.stringify(data));
                        break;
                    case 'cem':
                        sessionStorage.setItem('cem', JSON.stringify(data));
                        break;
                    case 'denuncia':
                        sessionStorage.setItem('denuncia', JSON.stringify(data));
                        break;
                    case 'familia':
                        sessionStorage.setItem('familia', JSON.stringify(data));
                        break;
                    case 'remision':
                        sessionStorage.setItem('remision', JSON.stringify(data));
                        break;
                    case 'fase3':
                        sessionStorage.setItem('fase3', JSON.stringify(data));
                        break;
                    case 'fase4':
                        sessionStorage.setItem('fase4', JSON.stringify(data));
                        break;
                }
                window.location = data.url
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            alert("Error: " + errorThrown);
        }
    });
    return false;
});

function ajaxDelete(filename, token, content) {
    debugger;
    $.ajax({
        type: 'POST',
        data: {_method: 'DELETE', _token: token},
        url: filename,
        success: function (data) {
            ajaxLoad(data.redirect_url, content='content_ajax', data.type, data.info);
        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
}

/* cantidad de filas de la tabla */
function showRow(elm) {
    var value = $(elm).val();
    var path = "{{ url('/') }}";
    var str = "/denuncia?show=" + value;
    javascript:ajaxLoad(str);
}

/* juzgado seleccionado */
function showRowC(elm) {
    var value = $(elm).val();
    var path = "{{ url('/') }}";
    var str = "/denuncia?tblcomisaria_id=" + value;
    javascript:ajaxLoad(str);
}

/* comisaria seleccionada */
function showRowJ(elm) {
    var value = $(elm).val();
    var path = "{{ url('/') }}";
    var str = "/denuncia?tblinstancia_id=" + value;
    javascript:ajaxLoad(str);
}

/* estado */
function showEstado(elm) {
    var value = $(elm).val();
    var path = "{{ url('/') }}";
    var str = "/denuncia?estado=" + value;
    javascript:ajaxLoad(str);
}

/* Intervalo de fechas */
function showIntFech(fecha1, fecha2, checked) {
    Fecha1 = fecha1;
    Fecha2 = fecha2;
    var str = "/denuncia?fecha1="+fecha1+"&fecha2="+fecha2+"&checked="+checked;
    javascript:ajaxLoad(str);
}

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

/*$(document).on('click', 'td.details-control', function () {
    debugger
    if ($(this).attr('data-toggle') == '1') {
        $(this).css({ background: 'url("/assests/img/details_close.png") no-repeat center center' });
        $(this).removeAttr('data-toggle');
        $(this).attr('data-toggle','0');
        $(this).parent('tr').next('tr.details').css({ display: 'table-row' });
    }else{
        if ($(this).attr('data-toggle') == '0') {
            $(this).css({ background: 'url("/assests/img/details_open.png") no-repeat center center' });
            $(this).removeAttr('data-toggle');
            $(this).attr('data-toggle','1');
            $(this).parent('tr').next('tr.details').css({ display: 'none' });
        }
    }
});*/

$(document).on('click', 'table.table-cell>tbody>tr', function () {
    debugger
    // alert("selected");
    if ( $(this).hasClass('selected') ) {
        $(this).removeClass('selected');
    }
    else {
        $("table.table-cell tbody").find('tr.selected').removeClass('selected');
        $(this).addClass('selected');
    }
});


// elemtentos de ajax.blade.php
// tambien se agregan cuando la vista ajax.blade.php se llama via ajax

    $('#tblcomisaria_id').select2();
    $('#tblinstancia_id').select2();
    $("input[name='intfech']").iCheck({ 
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' 
    });
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

    $('#dateRange').on('apply.daterangepicker', function (ev, picker) {
        var startDate = picker.startDate;
        var endDate = picker.endDate;
        // alert(startDate.format('YYYY-MM-DD')+" - "+endDate.format('YYYY-MM-DD'));
        if ($('input[name="intfech"]').prop('checked')) {
            showIntFech(startDate.format('YYYY-MM-DD'),endDate.format('YYYY-MM-DD'),$('input[name="intfech"]:checked').length);
        }
    });

    // event checked checkbox
    $(document).on('ifChecked', 'input[name="intfech"]', function() {
        debugger
        // alert("ifChecked");
        var fecha1 = $('#dateRange').val().split(' - ')[0].split('/')[2]+'-'+$('#dateRange').val().split(' - ')[0].split('/')[1]+'-'+$('#dateRange').val().split(' - ')[0].split('/')[0]; 
        var fecha2 = $('#dateRange').val().split(' - ')[1].split('/')[2]+'-'+$('#dateRange').val().split(' - ')[1].split('/')[1]+'-'+$('#dateRange').val().split(' - ')[1].split('/')[0];
        showIntFech(fecha1,fecha2,$('input[name="intfech"]:checked').length);
    });

    $(document).on('ifUnchecked', 'input[name="intfech"]', function() {
        debugger
        var fecha1 = $('#dateRange').val().split(' - ')[0].split('/')[2]+'-'+$('#dateRange').val().split(' - ')[0].split('/')[1]+'-'+$('#dateRange').val().split(' - ')[0].split('/')[0]; 
        var fecha2 = $('#dateRange').val().split(' - ')[1].split('/')[2]+'-'+$('#dateRange').val().split(' - ')[1].split('/')[1]+'-'+$('#dateRange').val().split(' - ')[1].split('/')[0];
        showIntFech(fecha1,fecha2,$('input[name="intfech"]:checked').length);
    });




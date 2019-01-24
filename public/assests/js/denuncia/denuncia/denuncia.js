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

    // Autoload Graphics
    var d = new Date(),
        n = d.getMonth() + 1,
        y = d.getFullYear();
    $("#anio").val(y).trigger('change');
    $("#mes").val(n).trigger('change');

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
        cache: false,
        success: function (data) {
            ajaxLoad(data.redirect_url, content='content_ajax', data.type, data.info);
        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
}

/* registrar victima */
function storeVictima() {
    event.preventDefault();
    var form = $('form#form_victima_modal');
    var data = new FormData($('form#form_victima_modal')[0]);
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
                $('#myModal1').modal('toggle');
                resetVictima();
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            alert("Error: " + errorThrown);
        }
    });
    return false;
}

/* limpiar formulario victima */
function resetVictima() {
    $('form#form_victima_modal').find('span.invalid-feedback').empty();
    $('form#form_victima_modal').find('select,input').css({"color":"#555"});

    $('form#form_victima_modal').trigger("reset");
    $("#tblprovincia_id, .tblprovincia_id").empty();
    $("#tblprovincia_id, .tblprovincia_id").append("<option value=''>Seleccione una Provincia</option>");
    $("#tbldistrito_id, .tbldistrito_id").empty();
    $("#tbldistrito_id, .tbldistrito_id").append("<option value=''>Seleccione un Distrito</option>");
    $("#tblprovincia_id").attr('disabled', 'disabled');
    $("#tbldistrito_id").attr('disabled', 'disabled');
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
            $(this).css({ background: 'url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAACjElEQVR4Aa2V30uTURjHnVBUgglCaXVTJJVLMdhQm7+1JEvJiKAggmgSQiKJl0V0E13UVf0HQZmBLcvlpqa55tqV0YoMzIhY6js0yDH11X17vuO8Sq5Zgl/48DznPD/G63nOMSmBkoUNwhYhTUgn9NUeY8z5p0wqOVXYKRwQLMJhhYV7Kpaqck2rNdskbBPMdrv9osfjcQaDwW/RaHSR0OceY8xhrqox/a3ZZmGHkO9wOB7ouj6PBGKMOcxlzcqmdDYKGZmZmSWjo6PvIYosRuDWXGj50IwTb4+hxleN5sAVvJh4jvBCGBRzWSO121UPk3EAaUKuz+d7ycTp+Wnc/nwL1d4qHBVidmjZv/npBkJzGiiv19vFWmGrcVDsvKupqeky/056VMf1j9dQOViBKo9Aa/ixdbnYcrQGWsBc1jQ2NtrZQ/VKShHM8kvdEPVN9qJsoBRl/aUoHyiJ+UpcCxJTtmfCDYoHJT2yYyOlPtcaCoUmGGwdbkVRbxGK+2y0gg2GisUvNmJCy/BVUJqm/eBIxXqpgbUtiBise12HQlc+ClwFSKRCiZH6wXpQs7OzETWn6XENa/trYemywuK0IpGsTotgRU3fcVBzouWG6pOnpqY0BhuGGpDXeUjIW7JKcfuX3tjjP9k4FBkZN4PtY+042JGzzNMcGDJ35C7tmcU++tJmjE63OpSUuLEJ62GcfXUO+59kr8rJnlOY0WfAGtYaY/PHYPv9fhdEY7++4nz/BWS17UPWY0Es2avWp3vOYOTnCCheBtaqHskJr95kZBL3AvdR2XkEex5mYbdQ+qwCd97dRTAcXHn1Moyrt16PA2tN//V8jY+Pf4cS/VWerzU9sDay1gd2Xf4F/AZqlpeB9836LwAAAABJRU5ErkJggg==") no-repeat center center' });
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



$("#anio").on("change",function () {
    // alert($("#anio").val());
    // url => denuncia/denuncia/index.blade.php
    loadGraph(url+"?anio="+$('#anio').val(),0);
});

$("#mes").on("change",function () {
    // alert($("#mes").val());
    loadGraph(url+"?anio="+$('#anio').val()+"&mes="+$('#mes').val(),1);
});

function loadGraph(url,order){
    $('.loading').show();
    // alert(url);
    $.ajax({
        type: "GET",
        url: url,
        cache: false,
        dataType: "json",
        success: function (data) {
            $('.loading').hide();
            debugger;
            if ( (order) && ($('#mes').val() != null && $('#mes').val() != '' && $('#mes').val() != '0') && ( $('#anio').val() != null && $('#anio').val() != '' && $('#anio').val() != '0') ) {
                try { 
                    graficoMensual.destroy();
                    makeChartMensual(data);
                } catch(err) {  
                    makeChartMensual(data);
                }
            }else{
                if ( ( $('#anio').val() != null && $('#anio').val() != '' && $('#anio').val() != '0' ) ) {
                    try { 
                        graficoAnual.destroy();
                        makeChartAnual(data);
                    } catch(err) {  
                        makeChartAnual(data);
                    }
                }else{
                    $("#anio").val('')
                }
            }
        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
}

// Graficos

function makeChartAnual(json) {
    if (typeof json.anio !== 'undefined') {
        var objectJSON = json;
        var maxHeight = Math.max.apply(Math,objectJSON.maxHeight);
        graficoAnual = new Highcharts.Chart({
            chart: {
                renderTo: 'graficoAnual',
                type: 'column'
            },
            title: {
                text: 'Carga por Juzgados Año ' + objectJSON.anio
            },
            xAxis: {
                type: 'category'
            },
            credits: {
                enabled: false
            },
            yAxis: {
                min: 0,
                max: maxHeight*1.3,
                title: {
                    text: 'DENUNCIAS'
                },
                visible: false

            },
            legend: {
                enabled: false
            },
            scrollbar: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y}'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.nombre}</span>: <b>{point.y}</b><br/>'
            },

            "series": [
                {
                    "name": "Juzgado",
                    "colorByPoint": true,
                    "data": objectJSON.json,
                },
            ],
        });
    }else{
        alert('undefined');
    }
}

var meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"]

function makeChartMensual(json) {
    var objectJSON = json;
    // alert(Math.max.apply(Math,objectJSON.maxHeight));
    var maxHeight = Math.max.apply(Math,objectJSON.maxHeight);
    graficoMensual = new Highcharts.Chart({
        chart: {
            renderTo: 'graficoMensual',
            type: 'column'
        },
        title: {
            text: 'Carga por Juzgados Mes ' + meses[objectJSON.mes-1]
        },
        // subtitle: {
        //     text: 'Click para ver Especialistas'
        // },
        xAxis: {
            type: 'category'
        },
        credits: {
            enabled: false
        },
        yAxis: {
            min: 0,
            max: maxHeight*1.3,
            title: {
                text: 'DENUNCIAS'
            },
            visible: false
        },
        legend: {
            enabled: false
        },
        scrollbar: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.nombre}</span>: <b>{point.y}</b><br/>'
        },

        "series": [
        {
            "name": "Juzgado",
            "colorByPoint": true,
            "data": objectJSON.json
        },
        //  grafico circular mensual        
        // {
        //     type: 'pie',
        //     name: 'Atendidos',
        //     colorByPoint: true,
        //     data: objectJSON.jsonAT,
        //     center: [725, -25],
        //     size: 100,
        //     dataLabels: {
        //       enabled: false
        //     }

        // }
        ],
        // "drilldown": {
        //     "series": objectJSON.jsonDCL
        // }
    });
}






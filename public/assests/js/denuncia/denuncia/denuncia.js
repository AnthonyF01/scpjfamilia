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
    if (typeof sessionStorage.ejecucion !== 'undefined' && sessionStorage.ejecucion != '') {
        var data = JSON.parse(sessionStorage.ejecucion);
        if (data.status == 'success') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-success"); }
        if (data.status == 'error') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-error"); }
        $("div#box_message").removeClass('hide');
        $("div#box_message").addClass('show');
        $("div#message").text(data.info);
        sessionStorage.removeItem('ejecucion');
    }
    if (typeof sessionStorage.ejecucion !== 'undefined' && sessionStorage.ejecucion != '') {
        var data = JSON.parse(sessionStorage.ejecucion);
        if (data.status == 'success') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-success"); }
        if (data.status == 'error') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-error"); }
        $("div#box_message").removeClass('hide');
        $("div#box_message").addClass('show');
        $("div#message").text(data.info);
        sessionStorage.removeItem('ejecucion');
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

    if (typeof sessionStorage.scaner !== 'undefined' && sessionStorage.scaner != '') {
        var data = JSON.parse(sessionStorage.scaner);
        if (data.status == 'success') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-success"); }
        if (data.status == 'error') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-error"); }
        $("div#box_message").removeClass('hide');
        $("div#box_message").addClass('show');
        $("div#message").text(data.info);
        sessionStorage.removeItem('scaner');
    }

    // Autoload Graphics
    var d = new Date(),
        n = d.getMonth() + 1,
        y = d.getFullYear();
    $("#anio").val(y).trigger('change');
    $("#mes").val(n).trigger('change');

});

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
    ajaxLoad('/denuncia?dni='+selectedVictima);
});

// paginadores
$(document).on('click', 'a.page-link', function (event) {
    event.preventDefault();
    ajaxLoad($(this).attr('href'));
});

if ((typeof date1 !== 'undefined' && date1 != '') && (typeof date2 !== 'undefined' && date2 != '')) {
    var Fecha1 = moment(date1).tz("America/Lima").format("YYYY-MM-DD");
    var Fecha2 = moment(date2).tz("America/Lima").format("YYYY-MM-DD");
} else {
    var Fecha1 = moment().tz("America/Lima").format("YYYY-MM-DD");
    var Fecha2 = moment().tz("America/Lima").format("YYYY-MM-DD");
}


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
    var url = form.attr("action");
    var data = new FormData($(this)[0]);

    // cem
    if (data.has('asistencialegal')) {
        data.set('asistencialegal', $('input[name="asistencialegal"]:checked').length);
    }
    if (data.has('psicologia')) {
        data.set('psicologia', $('input[name="psicologia"]:checked').length);
    }
    if (data.has('social')) {
        data.set('social', $('input[name="social"]:checked').length);
    }

    if (data.has('ministerio')) {
        data.set('ministerio', $('input[name="ministerio"]:checked').length);
    }

    if (data.has('device')) {
        data.set('device', $('input[name="device"]:checked').length);
    }

    if (data.has('itinerancia')) {
        data.set('itinerancia', $('input[name="itinerancia"]:checked').length);
    }

    // denuncia
    if (data.has('_institucion')) {
        data.set('institucion', 1);
    }
    if (data.has('_modulo')) {
        data.set('institucion', 2);
    }
    if (data.has('_fiscalia')) {
        data.set('institucion', 3);
    }
    if (data.has('_sau')) {
        data.set('institucion', 4);
    }
    if (data.has('_cem')) {
        data.set('institucion', 5);
    }

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
                    case 'ejecucion':
                        sessionStorage.setItem('ejecucion', JSON.stringify(data));
                        break;
                    case 'remision':
                        sessionStorage.setItem('remision', JSON.stringify(data));
                        break;
                    case 'fase3':
                        sessionStorage.setItem('fase3', JSON.stringify(data));
                        break;
                    case 'fase4':
                        sessionStorage.setItem('fase4', JSON.stringify(data));
                        break
                    case 'scaner':
                        sessionStorage.setItem('scaner', JSON.stringify(data));
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
// function storeVictima() {
//     var form = $('form#form_victima_modal');
//     var data = new FormData($('form#form_victima_modal')[0]);
//     var url = form.attr("action");
//     debugger;
//     $.ajax({
//         type: form.attr('method'),
//         url: url,
//         data: data,
//         cache: false,
//         contentType: false,
//         processData: false,
//         success: function (data) {
//             debugger;
//             $('.is-invalid').removeClass('is-invalid');
//             if (data.fail) {
//                 for (control in data.errors) {
//                     $('#' + control).addClass('is-invalid');
//                     $('#error-' + control).html(data.errors[control]);
//                 }
//             } else {
//                 switch(data.tab){
//                     case 'victima_modal':
//                         sessionStorage.setItem('victima_modal', JSON.stringify(data));
//                         break;
//                     case 'agresor_modal':
//                         sessionStorage.setItem('agresor_modal', JSON.stringify(data));
//                         break;
//                 }
//                 if (typeof sessionStorage.victima_modal !== 'undefined' && sessionStorage.victima_modal != '') {
//                     var data = JSON.parse(sessionStorage.victima_modal);
//                     if (data.status == 'success') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-success"); }
//                     if (data.status == 'error') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-error"); }
//                     $("div#box_message").removeClass('hide');
//                     $("div#box_message").addClass('show');
//                     $("div#message").text(data.info);
//                     sessionStorage.removeItem('victima_modal');
//                 }
//                 if (typeof sessionStorage.agresor_modal !== 'undefined' && sessionStorage.agresor_modal != '') {
//                     var data = JSON.parse(sessionStorage.agresor_modal);
//                     if (data.status == 'success') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-success"); }
//                     if (data.status == 'error') { $("div#box_message").find(".alert").removeAttr("class").attr("class","alert alert-error"); }
//                     $("div#box_message").removeClass('hide');
//                     $("div#box_message").addClass('show');
//                     $("div#message").text(data.info);
//                     sessionStorage.removeItem('agresor_modal');
//                 }
//                 $('#myModal1').modal('toggle');
//                 resetVictima();
//             }
//         },
//         error: function (xhr, textStatus, errorThrown) {
//             alert("Error: " + errorThrown);
//         }
//     });
//     return false;
// }

/* limpiar formulario victima */
// function resetVictima() {
//     $('form#form_victima_modal').find('span.invalid-feedback').empty();
//     $('form#form_victima_modal').find('select,input').css({"color":"#555"});

//     $('form#form_victima_modal').trigger("reset");
//     $("#tblprovincia_id, .tblprovincia_id").empty();
//     $("#tblprovincia_id, .tblprovincia_id").append("<option value=''>Seleccione una Provincia</option>");
//     $("#tbldistrito_id, .tbldistrito_id").empty();
//     $("#tbldistrito_id, .tbldistrito_id").append("<option value=''>Seleccione un Distrito</option>");
//     $("#tblprovincia_id").attr('disabled', 'disabled');
//     $("#tbldistrito_id").attr('disabled', 'disabled');
// }

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
    // Fecha1 = fecha1;
    // Fecha2 = fecha2;
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

function showDocumento(url,s,id,title,file_type) {
    var form=$("#form-file");
    var frame=$("#pdf-document_file");
    var span=$("#span-title");
    var button=$("#button-file");
    var modal_message=$("#modal_message");

    form[0].reset();
    button.attr('disabled','disabled');
    button.attr('title','Subir un documento PDF para realizar esta operación');

    modal_message.addClass('hide');

    if (url=='') {
        frame.html('');
        frame.removeClass('hide');
    }
    else{
        frame.html('<iframe src="'+url+'" width="100%" style="height: 450px;" frameborder="0"></iframe>');
        frame.removeClass('hide');
    }

    if (s==0) {
        span.html('<strong>Subir Documento de '+title+'</strong>');
        button.html('<span class="glyphicon glyphicon-plus"></span> Subir Documento')
                                .removeClass('btn-success')
                                .addClass('btn-primary');
    }
    else{
        span.html('<strong>Modificar Documento de '+title+'</strong>');
        button.html('<span class="glyphicon glyphicon-check"></span> Modificar Documento')
                                .removeClass('btn-primary')
                                .addClass('btn-success');
    }
    $("#form-file").attr('action',s);
    $("#form-file").data('id',id);
    $("#form-file").data('s',s);
    $("#form-file").data('file_type',file_type);
    $("#form-file").data('title',title);
    $("#showModalRegistro").modal({backdrop: 'static', keyboard: false});
}

$(document).on('click', '#button-file', function (event) {
    event.preventDefault();
    var modal_message=$("#modal_message");
    var show_message=$("#show_message");

    var documento=$("#document_file").val();
    var form=$("#form-file");
    var button=$(this);
    var id=form.data('id');
    var s=form.data('s'); //estado de si es update o insert
    var title=form.data('title');
    var file_type=form.data('file_type');

    button.html('<i class="fa fa-refresh fa-lg fa-spin"></i> Procesando');
    button.attr('disabled', 'disabled');

    if (documento) {
        $("#modal_message").addClass('hide');
        $("#show_message").html('');
        var data = new FormData(form[0]);
        data.append('file_type',file_type);
        $.ajax({
            type: 'POST',
            url: URLs+'/denucia-subir-documento/'+id,
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                debugger;
                // button.removeAttr('disabled');
                modal_message.removeClass('hide');
                form[0].reset();
                if (data.fail) {
                    modal_message.find(".alert").removeClass('alert-success').addClass('alert-warning');
                    show_message.html('');
                    for (control in data.errors) {
                        show_message.append(data.errors[control])
                    }
                    if (s==0) {
                        button.html('<span class="glyphicon glyphicon-plus"></span> Subir Documento')
                                .removeClass('btn-success')
                                .addClass('btn-primary');
                    }
                    else{
                        button.html('<span class="glyphicon glyphicon-check"></span> Modificar Documento')
                                .removeClass('btn-primary')
                                .addClass('btn-success');
                    }
                }
                else {
                    modal_message.find(".alert").removeClass('alert-warning').addClass('alert-success');
                    button.html('<span class="glyphicon glyphicon-check"></span> Modificar Documento')
                            .removeClass('btn-primary')
                            .addClass('btn-success');
                    if (s==0) {
                        var message=title+' <strong>subido</strong> exitosamente';
                        form.data('s',1);
                    }
                    else{
                        var message=title+' <strong>modificado</strong> exitosamente';
                    }
                    show_message.html(message);
                    javascript:ajaxLoad('/denuncia');
                }
            },
            error: function (xhr, textStatus, errorThrown) {
                // button.removeAttr('disabled');
                button.html('<span class="glyphicon glyphicon-check"></span> Modificar Documento')
                        .removeClass('btn-primary')
                        .addClass('btn-success');
                alert("Error: " + errorThrown);
            }
        });
    }
    else{
        $("#modal_message").removeClass('hide')
        $("#show_message").html('Seleccione el Documento Policial Para Realizar Esta Acción');
    }

});

function archivoFile(evt) {
    var files = evt.target.files; // FileList object
    var button=$("#button-file");
    var modal_message=$("#modal_message");
    var show_message=$("#show_message");
    var frame=$("#pdf-"+evt.target.name);
    if (files.length==0) {
        frame.html('');
        frame.addClass('hide');
        button.attr('disabled','disabled');
        button.attr('title','Subir un documento PDF para realizar esta operación');
        modal_message.removeClass('hide');
        modal_message.find(".alert").removeClass('alert-success').addClass('alert-warning');
        show_message.html('Seleccione el Documento Policial Para Realizar Esta Acción');
    }
    else{
        pdffile_url=URL.createObjectURL(files[0]);
        frame.html('<iframe src="'+pdffile_url +'" width="100%" style="height: 450px;" frameborder="0"></iframe>');
        frame.removeClass('hide');
        button.removeAttr('disabled');
        button.attr('title','');
        modal_message.addClass('hide');
        modal_message.find(".alert").removeClass('alert-warning').addClass('alert-success');
        show_message.html('');
    }
}

function archivoFile2(evt) {
    var files = evt.target.files; // FileList object
    var frame=$("#pdf-"+evt.target.name);
    if (files.length==0) {
        frame.html('');
        // frame.addClass('hide');
    }
    else{
        var pdffile_url=URL.createObjectURL(files[0]);
        frame.html('<iframe src="'+pdffile_url +'" width="100%" style="height: 450px;" frameborder="0"></iframe>');
        // frame.removeClass('hide');
    }
}

$("#document_file").change(function(event) {
    archivoFile(event);
});

$("#registro_file2").change(function(event) {
    archivoFile2(event);
});

$(document).on('click','.fileinput-remove-button',function (event) {
    event.preventDefault();
    var a=$(this).parent();
    var b=$(a).parent();
    var c=$(b).parent();
    var d=$(c).parent();
    var e=$(d).siblings('*');
    if ($(e).attr('for')=='registro_file2') {
        $("#pdf-registro_file2").html('');
    }
});



// Graficos

function makeChartAnual(json) {
    if (typeof json.anio !== 'undefined') {
        var objectJSON = json;
        // objectJSON.sort(function(a, b){
        //     if(a > b){

        //     }
        // });
        var maxHeight = Math.max.apply(Math,objectJSON.maxHeight);
        var x = json.json;
        x.sort(function(a, b){
            {return a.y - b.y}
        });
        graficoAnual = new Highcharts.Chart({
            chart: {
                renderTo: 'graficoAnual',
                type: 'column'
            },
            title: {
                text: 'Carga por Juzgados Año ' + objectJSON.anio,
                style: {"fontFamily":"Roboto", "fontSize":"16px", "fontWeight":"500"}
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
                },
                column:{ dataLabels: {
                    style:{
                        fontSize: '13px',
                        fontFamily: 'Roboto',
                        fontWeight: '400'
                    }
                }}
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.nombre}</span>: <b>{point.y}</b><br/>'
            },

            "series": [
                {
                    "name": "Juzgado",
                    "colorByPoint": true,
                    "data": x,
                },
            ]
        });
    }else{
        alert('undefined');
    }
}

var meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"]

function makeChartMensual(json) {
    var objectJSON = json;
    // console.log(objectJSON.json);
    // alert(Math.max.apply(Math,objectJSON.maxHeight));
    var x = json.json;
    x.sort(function(a, b){
            {return a.y - b.y}
    });
    var maxHeight = Math.max.apply(Math,objectJSON.maxHeight);
    graficoMensual = new Highcharts.Chart({
        chart: {
            renderTo: 'graficoMensual',
            type: 'column'
        },
        title: {
            text: 'Carga por Juzgados Mes ' + meses[objectJSON.mes-1],
            style: {"fontFamily":"Roboto", "fontSize":"16px", "fontWeight":"500"}
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
            },
                column:{ dataLabels: {
                    style:{
                        fontSize: '13px',
                        fontFamily: 'Roboto',
                        fontWeight: '400'
                    }
            }}
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px,font-family:roboto,font-weigth: 400;">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.nombre}</span>: <b>{point.y}</b><br/>'
        },

        "series": [
        {
            "name": "Juzgado",
            "colorByPoint": true,
            "data": x
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




// Mostrar Notificaciones

function loadMap(jsonMAP,position) {

    var map = new google.maps.Map(document.getElementById('mapa'), {
        center: new google.maps.LatLng(position.lat, position.lng),
        zoom: parseInt(position.zoom,10)
    });

    var infoWindow = new google.maps.InfoWindow;

    var colorCircle = ['#215967','#403151','#002060','#F20000','#494529','#E26B0A','#700000','#007033','#3379CD','#7030A0','#963634','#92D050','#494529','#CC9900','#009999'];
    var counter = 0;

    // var jsonMAP = [];
    // var item = {};
    // item.nombre = 'Nombre';
    // item.total = 10;
    // item.lat = -18.04661;
    // item.lng = -70.24653;
    // jsonMAP.push(item);
    // console.log(jsonMAP);

    $.each(jsonMAP, function(key, data) {
        console.log(data.lat);
        var mylatlng = new google.maps.LatLng(parseFloat(data.lat), parseFloat(data.lng));
        // var mylatlng = new google.maps.LatLng(-18.04661, -70.24653);

        // Creating a marker and putting it on the map
        var marker = new google.maps.Marker({
            position: mylatlng,
            clickable:true, 
            map:map, 
            animation:google.maps.Animation.DROP,
            // icon: {
            //     path: google.maps.SymbolPath.CIRCLE,
            //     fillOpacity: 0.5,
            //     fillColor: '#ff0000',
            //     strokeOpacity: 1.0,
            //     strokeColor: '#fff000',
            //     strokeWeight: 3.0, 
            //     scale: 20 //pixels
            // }
        });

        if (data.state == 0) {
          marker.setIcon('/assests/img/icons/red-marker2.png');
        }
        if (data.state == 1) {
          marker.setIcon('/assests/img/icons/green-marker2.png');
        }
        if (data.state == 2) {
          marker.setIcon('/assests/img/icons/blue-marker2.png');
        }

        var infowincontent = document.createElement('div');

        var strong = document.createElement('strong');
        strong.textContent = "Nombre: ";
        infowincontent.appendChild(strong);
        var text = document.createElement('text');
        text.textContent = data.nombre;
        infowincontent.appendChild(text);

        infowincontent.appendChild(document.createElement('br'));
        
        var strong = document.createElement('strong');
        strong.textContent = "Telefono: ";
        infowincontent.appendChild(strong);
        var text = document.createElement('text');
        text.textContent = data.fono;
        infowincontent.appendChild(text);

        marker.setMap(map);
        // marker.setIcon('http://maps.google.com/mapfiles/ms/icons/green-dot.png');
        marker.addListener('click', function() {
            infoWindow.setContent(infowincontent);
            infoWindow.open(map, marker);
        });

        // add circles
        /*var circle = new google.maps.Circle({
            strokeColor: colorCircle[counter],
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: colorCircle[counter],
            fillOpacity: 0.9,
            map: map,
            center: {lat: data.lat, lng: data.lon},
            radius: 500
        });
        // text to circle
        var infowincontent = document.createElement('div');
        var strong = document.createElement('strong');
        strong.textContent = data.nombre;
        infowincontent.appendChild(strong);
        infowincontent.appendChild(document.createElement('br'));
        var text = document.createElement('text');
        text.textContent = data.total;
        infowincontent.appendChild(text);
        circle.addListener('click', function() {
            infoWindow.setContent(infowincontent);
            infoWindow.open(map, circle);
        });*/

        // text inner circles
        /*var myOptions = {
            content: data.total,
            boxStyle: {
                // background: transparent,
                color: '#fff',
                textAlign: "center",
                fontSize: "9pt",
                fontWeight: 'bold',
                width: "50px"
            },
            disableAutoPan: true,
            pixelOffset: new google.maps.Size(-25, -10), // left upper corner of the label
            position: new google.maps.LatLng(data.lat,data.lon),
            closeBoxURL: "",
            isHidden: false,
            pane: "floatPane",
            zIndex: 100,
            enableEventPropagatiºon: true
        };
        var ib = new InfoBox(myOptions);

        ib.open(map);*/

        counter++;

    });
  
}

function showNotificacion(id){
    if (id != 0) {
        $.ajax({
            type: 'GET',
            url: '/denuncia/getNotificacion',
            data: { id: id },
            cache: false,
            contentType: false,
            success: function (data) {
                debugger;

                if (data.status == 'success') {

                    if (typeof data.notifications !== 'undefined' && data.notifications.length > 0) {
                        var str = '';
                        for (var i = 0; i < data.notifications.length; i++) {
                            str += '<div class="thumbnail"><div class="caption"><div class="row"><span style="float: left; margin:-4px 15px 4px 15px;" class="btn btn-outline-primary btn-xs">Mostrar</span><span style="float: right; margin:0px 15px 9px 15px;">' + moment(data.notifications[i].created_at).format('DD/MM/YYYY hh:mm') + ' hrs</span></div><div class="row"><div class="col-lg-12 col-md-12 col-ms-12 well-add-card" style="border-top: 1px solid #ccc"><h4 style="font-weight: bold">' + data.notifications[i].title + '</h4></div></div><div class="row"><div class="col-lg-12 col-md-12 col-ms-12"><p style="color: #777">' + data.notifications[i].body + '.</p></div></div><div class="row"><div class="col-lg-6 col-md-6 col-ms-6" style="border-bottom: 1px solid #ccc"><p style="margin-bottom: 5px">Latitud: ' + data.notifications[i].lat + '</p><p style="margin-bottom: 5px">Nombre: ' + data.notifications[i].nombre + '</p></div><div class="col-lg-6 col-md-6 col-ms-6" style="border-bottom: 1px solid #ccc; margin-bottom: 15px"><p style="margin-bottom: 5px">Longitud: ' + data.notifications[i].lng + '</p><p style="margin-bottom: 5px">Telefono: ' + data.notifications[i].fono + '</p></div></div><div class="row"><div class="col-lg-12 col-md-12 col-ms-12">';
                            if (data.notifications[i].state == 1) {
                                str += '<span style="border-radius: 5px; padding: 5px 10px;" class="bg-green">Atendido</span>';
                            }
                            if (data.notifications[i].state == 0) {
                                str += '<span style="border-radius: 5px; padding: 5px 10px;" class="bg-red">Pendiente</span>';
                            }
                            if (data.notifications[i].state == 2) {
                                str += '<span style="border-radius: 5px; padding: 5px 10px;" class="bg-blue">En atención</span>';
                            }
                            if (typeof data.notifications[i].name !== 'undefined' && data.notifications[i].name != null && data.notifications[i].name != '') {
                                str += '<span style="border-radius: 5px; padding: 5px 10px;" class="bg-blue">' + data.notifications[i].name + '</span>';
                            }
                            str += '</div></div></div></div>';
                        }

                        // listado de notificaciones
                        $("#style-1").html(str);

                        // generar mapa
                        loadMap(data.notifications,data.ubicacion);

                    }else{
                        $("#style-1").html("Sin notificaciones");
                        $("#style-2").html("Nada que mostrar");
                    }

                    $("#showModalNotificacion").modal({backdrop: 'static', keyboard: false});
    
                }else {

                    alert(info); 

                }

                // $("#prueba_").html(data);
            },
            error: function (xhr, textStatus, errorThrown) {
                alert(xhr.responseText);
            }
        });
    }else{
        alert("La denuncia no registra usuarios con la aplicacion instalada.");
    }
}

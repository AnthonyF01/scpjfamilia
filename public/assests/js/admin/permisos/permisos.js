$(document).ready(function() {
    $("#nivel").trigger('change');
});
// Carga todas las vistas: index, create, edit.
function ajaxLoad(filename, content, action = '', message = '') {

    // add breadcrumb
    if (typeof filename !== 'undefined' && filename != '') {
        var redirect = "javascript:ajaxLoad(\""+filename.split("permisos")[0]+"permisos"+"\")";
        if (filename.indexOf('edit') != -1) {
            $('#parent').remove();
            $(".breadcrumb").append("<li id='parent' class='active'><a href='"+redirect+"'><i class='fa fa-user'></i> Permisos</a></li><li id='li_edit' class='active'><i class='fa fa-edit'></i> Editar Permiso</li>");
        }else if (filename.indexOf('create') != -1) {
            $('#parent').remove();
            $(".breadcrumb").append("<li id='parent' class='active'><a href='"+redirect+"'><i class='fa fa-user'></i> Permisos</a></li><li id='li_create' class='active'><i class='fa fa-edit'></i> Crear Permiso</li>");
        }else {
            $('#li_create').remove();
            $('#li_edit').remove();
            $('#parent').remove();
            $(".breadcrumb").append('<li id="parent" class="active"><i class="fa fa-gears"></i> Permisos</li>');
        }
    }else{
        $('#li_create').remove();
        $('#li_edit').remove();
        $('#parent').remove();
        $(".breadcrumb").append('<li id="parent" class="active"><i class="fa fa-gears"></i> Permisos</li>');
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

$(document).on('submit', 'form#form_permiso', function (event) {
    event.preventDefault();
    var form = $(this);
    var data = new FormData($(this)[0]);
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
                ajaxLoad(data.redirect_url, content='content_ajax', data.type, data.info);
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
            $("#ModalDelete").modal('hide');
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
    var str = "/roles?show=" + value;
    javascript:ajaxLoad(str);
}

$(document).on('change','#nivel',function() {
    if (this.value==1) {
        $(".mensaje").html('El nivel de este permiso permite agrupar un conjunto de permisos');
    }
    else{
        $(".mensaje").html('Permiso en el sistema');
    }
});

$(document).on('click','#nestable_list_1 .btn-outline-secondary',function() {
    var padre=$(this).parent();
    if (padre.hasClass("dd3-content")) {
        var brother=padre.siblings('*');
        if (brother[0].tagName=='OL') {
            // brother[0].childElementCount
            if ($(this.children).hasClass('fa-minus')) {
                $(brother[0]).addClass('hide');
                $(this).html('<span class="fa fa-plus fa-lg"></span>')
            }
            else{
                $(brother[0]).removeClass('hide');
                $(this).html('<span class="fa fa-minus fa-lg"></span>')
            }
        }
    }
});

function removeThisRow(route) {
    var button=$("#button-delete");
    var token=$("input[name=_token]").val()
    button.attr('href','javascript:ajaxDelete(\''+route+'\',\''+token+'\')');
    $("#ModalDelete").modal({backdrop: 'static', keyboard: false});
}

$(document).ready(function() {
    color_print='#f7ee3aad';
});

$(document).on('click','a.fa_p',function() {
    var padre=$(this).parent();
    var abuelo=$(padre).parent();
    if (abuelo.hasClass("dd-handle")) {
        var brother=abuelo.siblings('*');
        if (brother[0].tagName=='OL') {
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

$(document).on('change','#nestable_list input',function() {
    if ($(this).hasClass('ip')) {
        var padre=$(this).parent();
        var abuelo=$(padre).parent();
        var tatarabuelo=$(abuelo).parent();
        if (tatarabuelo.hasClass("dd-handle")) {
            var brother=tatarabuelo.siblings('*');
            if (brother[0].tagName=='OL') {
                var hijos=$(brother[0]).find('input');
                if (hijos.length>0) {
                    if ($(this).is(":checked")) {
                        $.each(hijos, function(index, val) {
                            $(this).prop('checked',true);
                            if ($(this).hasClass('ip_li')) {
                                var p=$(this).parent();
                                var a=$(p).parent();
                                var t=$(a).parent();
                                var ta=$(t).parent();
                                $(ta).css('background-color', color_print);
                            }
                        });
                    }
                    else{
                        $.each(hijos, function(index, val) {
                            $(this).prop('checked',false);
                            if ($(this).hasClass('ip_li')) {
                                var p=$(this).parent();
                                var a=$(p).parent();
                                var t=$(a).parent();
                                var ta=$(t).parent();
                                $(ta).css('background-color', '');
                            }
                        });
                    }
                }
            }
        }

    }
});

$(document).on('change','#nestable_list input',function() {
    if ($(this).hasClass('ip_li')) {
        var p=$(this).parent();
        var a=$(p).parent();
        var t=$(a).parent();
        var ta=$(t).parent();
        if ($(this).is(":checked")) {
            $(this).prop('checked',true);
            $(ta).css('background-color', color_print);
        }
        else{
            $(this).prop('checked',false);
            $(ta).css('background-color', '');
        }
    }
});

function printInput() {
    var input=$('#nestable_list').find('input:checked');
    if (input.length>0) {
        $.each(input, function(index, val) {
            if ($(this).hasClass('ip_li')) {
                var p=$(this).parent();
                var a=$(p).parent();
                var t=$(a).parent();
                var ta=$(t).parent();
                $(ta).css('background-color', color_print);
            }
        });
    }

}

$(document).on('click', 'a.page-link', function (event) {
    event.preventDefault();
    ajaxLoad($(this).attr('href'));
});


// Carga todas las vistas: index, create, edit.
function ajaxLoad(filename, content, action = '', message = '') {

    // add breadcrumb
    if (typeof filename !== 'undefined' && filename != '') {
        var redirect = "javascript:ajaxLoad(\""+filename.split("roles")[0]+"roles"+"\")";
        if (filename.indexOf('edit') != -1) {
            $('#parent').remove();
            $(".breadcrumb").append("<li id='parent' class='active'><a href='"+redirect+"'><i class='fa fa-user'></i> Roles</a></li><li id='li_edit' class='active'><i class='fa fa-edit'></i> Editar Rol</li>");
        }else if (filename.indexOf('create') != -1) {
            $('#parent').remove();
            $(".breadcrumb").append("<li id='parent' class='active'><a href='"+redirect+"'><i class='fa fa-user'></i> Roles</a></li><li id='li_create' class='active'><i class='fa fa-edit'></i> Crear Rol</li>");
        }else {
            $('#li_create').remove();
            $('#li_edit').remove();
            $('#parent').remove();
            $(".breadcrumb").append('<li id="parent" class="active"><i class="fa fa-gears"></i> Roles</li>');
        }
    }else{
        $('#li_create').remove();
        $('#li_edit').remove();
        $('#parent').remove();
        $(".breadcrumb").append('<li id="parent" class="active"><i class="fa fa-gears"></i> Roles</li>');
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
                javascript:printInput();
            }
        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
}

$(document).on('submit', 'form#form_role', function (event) {
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

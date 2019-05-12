$(document).on('click', 'a.page-link', function (event) {
    event.preventDefault();
    ajaxLoad($(this).attr('href'));
});

// Carga todas las vistas: index, create, edit.
function ajaxLoad(filename, content, action = '', message = '') {

    // add breadcrumb
    if (typeof filename !== 'undefined' && filename != '') {
        var redirect = "javascript:ajaxLoad(\""+filename.split("users")[0]+"users"+"\")";
        if (filename.indexOf('edit') != -1) {
            $('#parent').remove();
            $(".breadcrumb").append("<li id='parent' class='active'><a href='"+redirect+"'><i class='fa fa-user'></i> Usuarios</a></li><li id='li_edit' class='active'><i class='fa fa-edit'></i> Editar Usuario</li>");
        }else if (filename.indexOf('create') != -1) {
            $('#parent').remove();
            $(".breadcrumb").append("<li id='parent' class='active'><a href='"+redirect+"'><i class='fa fa-user'></i> Usuarios</a></li><li id='li_create' class='active'><i class='fa fa-edit'></i> Crear Usuario</li>");
        }else {
            $('#li_create').remove();
            $('#li_edit').remove();
            $('#parent').remove();
            $(".breadcrumb").append('<li id="parent" class="active"><i class="fa fa-gears"></i> Usuarios</li>');
        }
    }else{
        $('#li_create').remove();
        $('#li_edit').remove();
        $('#parent').remove();
        $(".breadcrumb").append('<li id="parent" class="active"><i class="fa fa-gears"></i> Usuarios</li>');
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

$(document).on('submit', 'form#form_user', function (event) {
    event.preventDefault();
    var form = $(this);
    var data = new FormData($(this)[0]);
    var imagen = $('#imagen').prop('files')[0];
    data.append('imagen', imagen);
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
    var str = "/users?show=" + value;
    javascript:ajaxLoad(str);
}

function showMapSelect(lat,lng,opt,id) {
    var mapa=$("#map");
    mapa.html(''); //reset mapa

    var show_message=$("#show_message");
    var modal_message=$("#modal_message");
    var span =$("#span-title");
    var geolocalizacion=$("#form-geolocalizacion");

    var option = {lat: lat, lng: lng};
    if (opt==1) var zoom=12; else var zoom=10;

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: zoom,
        center: option,
        clickable:true
    });

    if (opt==1) {
        var infoWindow = new google.maps.InfoWindow;
        var mylatlng = new google.maps.LatLng(lat, lng);

        // Creating a marker and putting it on the map
        var marker = new google.maps.Marker({
            position: mylatlng,
            clickable:true,
            map:map,
            draggable: true,
            animation:google.maps.Animation.DROP,
        });

        marker.setIcon('/assests/img/icons/red-marker2.png');

        // var infowincontent = document.createElement('div');
        // var strong = document.createElement('strong');
        // strong.textContent = "Nombre: ";
        // infowincontent.appendChild(strong);
        // var text = document.createElement('text');
        // text.textContent = name;
        // infowincontent.appendChild(text);

        // marker.setMap(map);
        // marker.addListener('click', function(event) {
        //     infoWindow.setContent(infowincontent);
        //     infoWindow.open(map, marker);
        // });

        marker.addListener( 'dragend', function (event){
            registerPointsMap(this.getPosition().lat(),this.getPosition().lng());
        });

        map.addListener('click', function(event) {
            marker.setPosition(new google.maps.LatLng(event.latLng.lat(), event.latLng.lng()))
            registerPointsMap(event.latLng.lat(),event.latLng.lng());
        });

        show_message.html('Seleccione otro punto referencial del distrito o cuidad de pertenecia del mapa para modificar y guardar los cambios. <strong style="font-size: 14px;">Importante para la visualización de las notificaciones e instituciones</strong>');
        modal_message.find(".alert").removeClass('alert-info').addClass('alert-success');
        span.html('Modificar Ubicación del distrito o cuidad de pertenencia en el Mapa');
    }
    else{
        map.addListener('click', function(event) {
            map.setZoom(12);
            registerPointsMap(event.latLng.lat(),event.latLng.lng());
        });

        show_message.html('Seleccione un punto referencial del distrito o cuidad de pertenecia del mapa. <strong style="font-size: 14px;">Importante para la visualización de las notificaciones e instituciones</strong>');
        modal_message.find(".alert").removeClass('alert-success').addClass('alert-info');
        span.html('Registrar Ubicación del distrito o cuidad de pertenencia en el Mapa');
    }

    geolocalizacion.data("opc",{opt:opt,id:id});
    $("#showModalMapa").modal({backdrop: 'static', keyboard: false});
}

function registerPointsMap(lat,lng) {
    var token=$("input[name=_token]").val();
    var geolocalizacion=$("#form-geolocalizacion");
    var opc=geolocalizacion.data("opc");
    var route=URLs+'/users-geolocalizacion/'+opc.id;
    $.ajax({
        type: 'POST',
        data: {lat:lat,lng:lng, _token: token,opt:opc.opt},
        url: route,
        success: function (data) {
            geolocalizacion.data('opc',{})
            javascript:ajaxLoad(URLs+'/users');
            showMapSelect(parseFloat(data.lat),parseFloat(data.lng),1,data.id);
        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
}

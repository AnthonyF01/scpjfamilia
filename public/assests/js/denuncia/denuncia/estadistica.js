$(document).ready(function() {
    // add breadcrumb
    var filename = window.location.href;
    if (typeof filename !== 'undefined' && filename != '') {
        var redirect = filename.split("denuncia")[0]+"denuncia";
        if (filename.indexOf('estadistica') != -1) {
            $('#parent').remove();
            $(".breadcrumb").append("<li id='parent' class='active'><a href='"+redirect+"'><i class='fa fa-balance-scale'></i> Denuncias</a></li><li id='li_estadistica' class='active'><i class='fa fa-bar-chart'></i> Estadisticas</li>");
        }
    }else{
        $('#li_create').remove();
        $('#li_edit').remove();
        $('#parent').remove();
        $(".breadcrumb").append('<li id="parent" class="active"><i class="fa fa-balance-scale"></i> Denuncias</li>');
    }
});

// Carga todas las vistas: index, create, edit.
function ajaxLoad(filename, content, action = '', message = '') {
    debugger

    content = typeof content !== 'undefined' ? content : 'estadisticaAjax';
    $('.loading').show();
    debugger;
    $.ajax({
        type: "GET",
        url: filename,
        cache: false, // al navegar atras se muestra todo correctamente
        contentType: false,
        success: function (data) {
            debugger
            $("#" + content).html(data);
            $('.loading').hide();
        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
}

// Genera archivos pdf
function ajaxLoadPDF(filename, array, token) {
    debugger
    $('.loading').show();

    var data = new FormData();
    data.append('tblinstancia_id',$('#tblinstancia_id').val());
    data.append('tblcomisaria_id',$('#tblcomisaria_id').val());
    data.append('anio',$('#anio').val());
    data.append('mes',$('#mes').val());
    if ($('input[name=graph1]:checked').length) {
        data.append('graph', 1);
        data.append('hHTotal',hHTotal);
        data.append('vDTotal',vDTotal);
        data.append('pATotal',pATotal);
        if ($('#mes').val() == '0') {
            alert('Debe seleccionar un mes para la consulta mensual.');
            return false;
        }
    }
    if ($('input[name=graph2]:checked').length) {
        data.append('graph', 2);
        data.append('ApTotal',ApTotal);
        data.append('AlTotal',AlTotal);
        data.append('DPTotal',DPTotal);
        data.append('AJTotal',AJTotal);
        data.append('PNPTotal',PNPTotal);
        data.append('MVFTotal',MVFTotal);
        data.append('DRTotal',DRTotal);
        data.append('REMTotal',REMTotal);
    }
    if ($('input[name=graph3]:checked').length) {
        data.append('graph', 3);
        data.append('hHTotal',hHTotal);
        data.append('vDTotal',vDTotal);
        data.append('pATotal',pATotal);
    }
    if ($('input[name=graph4]:checked').length) {
        data.append('graph', 4);
        data.append('PNPTotal',PNPTotal);
        data.append('MVFTotal',MVFTotal);
        data.append('PSCEMTotal',PSCEMTotal);
        data.append('ALCEMTotal',ALCEMTotal);
        data.append('MINTotal',MINTotal);
    }

    data.append('_token',token);
    data.append('imgArr',array);

    $.ajax({
        type: "POST",
        url: filename,
        data: data, 
        xhrFields: {
          responseType: 'blob'
        },
        cache: false, // al navegar atras se muestra todo correctamente
        processData: false,
        contentType: false,
        success: function (data) {
            debugger
            $('.loading').hide();
            // var windowName = 'userConsole';
              var popUp = window.open('about:blank', "_blank", 'width=1000, height=700, left=24, top=24, scrollbars, resizable');
              if(popUp){
                  popUp.close();
              }
              if (popUp == null || typeof(popUp)=='undefined') {
                alert('Por favor deshabilite el bloqueador de ventanas emergentes y haga clic nuevamente en "Generar Reporte".');
              }else {  

                popUp = null;

                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(data);

                link.target = '_blank';
                document.body.appendChild(link);
                link.click();

              }
        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
}
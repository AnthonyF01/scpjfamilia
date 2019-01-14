$(document).ready(function() {
    // add breadcrumb
    var filename = window.location.href;
    if (typeof filename !== 'undefined' && filename != '') {
        var redirect = filename.split("denuncia")[0]+"denuncia";
        if (filename.indexOf('report') != -1) {
            $('#parent').remove();
            $(".breadcrumb").append("<li id='parent' class='active'><a href='"+redirect+"'><i class='fa fa-balance-scale'></i> Denuncias</a></li><li id='li_report' class='active'><i class='fa fa-clipboard'></i> Reportes</li>");
        }
    }else{
        $('#li_create').remove();
        $('#li_edit').remove();
        $('#parent').remove();
        $(".breadcrumb").append('<li id="parent" class="active"><i class="fa fa-balance-scale"></i> Denuncias</li>');
    }
});

// paginadores
$(document).on('click', 'a.page-link', function (event) {
    event.preventDefault();
    ajaxLoad($(this).attr('href')+'&type=list&search='+$('input#search').val()+'&tblinstancia_id='+$('#tblinstancia_id').val()+'&tdias='+$('#tdias').val()+'&tblcomisaria_id='+$('#tblcomisaria_id').val()+'&anio='+$('#anio').val()+'&mes='+$('#mes').val()+'&formalizacion='+$('input[name=formalizacion]:checked').length+'&audiencia='+$('input[name=audiencia]:checked').length+'&remision='+$('input[name=remision]:checked').length+'&denuncia='+$('input[name=denuncia]:checked').length+'&juzgado='+$('input[name=juzgado]:checked').length+'&victima='+$('input[name=victima]:checked').length+'&agresor='+$('input[name=agresor]:checked').length+(($('input[name=intfech]:checked').length)? '&fecha1='+$('#dateRange').val().split(' - ')[0].split('/')[2]+'-'+$('#dateRange').val().split(' - ')[0].split('/')[1]+'-'+$('#dateRange').val().split(' - ')[0].split('/')[0]+'&fecha2='+$('#dateRange').val().split(' - ')[1].split('/')[2]+'-'+$('#dateRange').val().split(' - ')[1].split('/')[1]+'-'+$('#dateRange').val().split(' - ')[1].split('/')[0] : '' ));
});

// Carga todas las vistas: index, create, edit.
function ajaxLoad(filename, content, action = '', message = '') {
    debugger

    content = typeof content !== 'undefined' ? content : 'reportAjax';
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
            // $("input#search").focus();
            $('.loading').hide();
            /*if (action == 'update' || action == 'store' || action == 'destroy') {
                $("div#box_message").removeClass('hide');
                $("div#box_message").addClass('show');
                $("div#message").text(message);
            }else{
                $('div#box_message').removeClass('show'); 
                $('div#box_message').addClass('hide');
            }*/
        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
}

// Genera archivos pdf
function ajaxLoadPDF(filename) {
    debugger
    $('.loading').show();
    $.ajax({
        type: "GET",
        url: filename,
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
                /*swal({
                  title: 'Aviso',
                  text: 'Por favor deshabilite el bloqueador de ventanas emergentes y haga clic nuevamente en "Generar Reporte".',
                  type: 'info',
                })*/
              }else {  

                // muestra el contenido en nueva ventana
                // popUp.focus();

                popUp = null;

                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(data);
                
                // link.download = "Dossier_" + new Date() + ".pdf";
                // link.click();

                link.target = '_blank';
                document.body.appendChild(link);
                link.click();

                // link.setAttribute("href", "http://www.google.com/");
                // link.setAttribute("target", "_blank");
                // link.appendChild(document.createTextNode("my link to google"));
                // document.getElementById("something").appendChild(link);
              }
        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
}
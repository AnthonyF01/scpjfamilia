$.datepicker.setDefaults({ 
    beforeShow: function (i) { 
        if ($(i).attr('readonly')) { return false; } 
    } 
});
$(document).find('.datepicker').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy',
}).addClass('hasDatepicker');

// Ejecuta funciones secuencialmente (usa setTimeout)
function myqueue(){ 
  var ord=[];
  var funcHash = {}; // Use a hash as you're using keys rather than indicies
  var me = $(document);//(minor)convention would be to name this $doc
  
  var plugin = {
      add: function (func, name) {
          if(!funcHash.hasOwnProperty(name)) {//name does not exist yet
              funcHash[name] = [];
              ord.unshift(name);
          }
          funcHash[name].push(func);//now just queue the function         
      },

      call: function (name) {
          me.queue("deferQueue", function () {    
              var promiseArr=[];
              var funcArr = funcHash[name];
              
              //funcArr is a hash of arrays don't use for in
              //also func was a global variable!]
              for(var i = 0; i < funcArr.length; i++){//you can use .forEach or $.each nicely here
                  promiseArr.push((function(){
                      var dfd = new jQuery.Deferred();
                      funcArr[i](dfd);
                      return dfd.promise();   
                  })());
              }
              
              //I assume you want to remove the functions after you call them so requeing the same name doesn't add to the old queue
              delete funcHash[name];

              $.when.apply($,promiseArr).then(function () {
                  console.log("Success "+name);
                  me.dequeue("deferQueue");
              }, function () {
                  console.log("Fail "+name);
              });
          });
      },

      start: function () {
          while(ord.length>0) {
              plugin.call(ord.pop());
          }
          me.dequeue("deferQueue");
      }
  };

  return plugin;
};

// Cargar Provincias y Distritos
$(document).on('change','#tbldepartamento_id, .tbldepartamento_id',function(event){ 
  if (event.target.value == '') {
    $("#tblprovincia_id, .tblprovincia_id").empty();
    $("#tblprovincia_id, .tblprovincia_id").append("<option value=''>Seleccione una Provincia</option>");
    $("#tbldistrito_id, .tbldistrito_id").empty();
    $("#tbldistrito_id, .tbldistrito_id").append("<option value=''>Seleccione un Distrito</option>");
    $("#tblprovincia_id, .tblprovincia_id").attr('disabled', 'disabled');
    $("#tbldistrito_id, .tbldistrito_id").attr('disabled', 'disabled');
  }else{
    $.get("/getProvincia/"+event.target.value+"",function(response,state){
      debugger
      $("#tblprovincia_id, .tblprovincia_id").empty();
      $("#tblprovincia_id, .tblprovincia_id").append("<option value=''>Seleccione una Provincia</option>");
      $("#tblprovincia_id, .tblprovincia_id").removeAttr('disabled');
      for (i=0; i <response.length; i++) {
        $("#tblprovincia_id, .tblprovincia_id").append("<option value='"+response[i].id+"'>"+response[i].nombre+"</option>");
      }
      $("#tbldistrito_id, .tbldistrito_id").empty();
      $("#tbldistrito_id, .tbldistrito_id").append("<option value=''>Seleccione un Distrito</option>");
      $("#tbldistrito_id, .tbldistrito_id").attr('disabled', 'disabled');
    });
  }
});

$(document).on('change','#tblprovincia_id, .tblprovincia_id',function(event){
  if (event.target.value == '') {
    $("#tbldistrito_id, .tbldistrito_id").empty();
    $("#tbldistrito_id, .tbldistrito_id").append("<option value=''>Seleccione un Distrito</option>");
    $("#tbldistrito_id, .tbldistrito_id").attr('disabled', 'disabled');
  }else{
    $.get("/getDistrito/"+event.target.value+"",function(response,state){
      debugger
      $("#tbldistrito_id, .tbldistrito_id").empty();
      $("#tbldistrito_id, .tbldistrito_id").append("<option value=''>Seleccione un Distrito</option>");
      $("#tbldistrito_id, .tbldistrito_id").removeAttr('disabled');
      for (i=0; i <response.length; i++) {
        $("#tbldistrito_id, .tbldistrito_id").append("<option value='"+response[i].id+"'>"+response[i].nombre+"</option>");
      }
    });
  }
});
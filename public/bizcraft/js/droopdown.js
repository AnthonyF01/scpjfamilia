    jQuery(document).ready(function ()
    {
            jQuery('select[name="tbldepartamento_id_vic"]').on('change',function(){
               var countryID = jQuery(this).val();
               if(countryID)
               {
                  jQuery.ajax({
                     url : 'formulario/getProvincias/' +countryID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="tblprovincia_id_vic"]').empty();
                        jQuery.each(data, function(id,name){
                           $('select[name="tblprovincia_id_vic"]').append('<option value="'+ id +'">'+ nome +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="tblprovincia_id_vic"]').empty();
               }
            });
    });
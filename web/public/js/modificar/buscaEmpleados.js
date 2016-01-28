$(document).ready(function(){
    var met = $('#main form').attr('method');
    $('#main form').on('submit',function(e){
        var id = $("#categoria").find(':selected').val();
        e.preventDefault();
       $.ajax({
            beforeSend: function(){
                
               //console.log();
               $.blockUI();
            },
            url: '/AdministracionRRHH/web/app_dev.php/postulantes/idoneos/'+id,
            type: met,
            data: $('#main form').serialize(),
            success: function(resp) {
                //debugger;
                var div = resp;
                document.getElementById("tablaEmpleados").innerHTML = div;
                $.unblockUI({
                     onUnblock: function(){} 
                 });
                //console.log(resp);
            },
            error: function (jqXHR,estado,error){
                console.log(estado);
                console.log(error);
            },
            complete: function (jqXHR, estado){
                //console.log(estado);
            }
    });
    
    });
    
    });
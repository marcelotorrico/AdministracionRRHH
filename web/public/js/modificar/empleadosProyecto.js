$(document).ready(function(){
    var met = $('#main form').attr('method');
    $('#main form').on('submit',function(e){
        var proyecto = $("#proyecto").val();
        var id = $("#categoria").find(':selected').val();
        e.preventDefault();
       $.ajax({
            beforeSend: function(){
                
               console.log(proyecto);
               $.blockUI();
            },
            url: '/AdministracionRRHH/web/app_dev.php/proyecto/empleados/agregar/'+id+'/'+proyecto,
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
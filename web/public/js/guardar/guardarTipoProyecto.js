$(document).ready(function(){
    var pet = $('#mainTipo form').attr('action');
    var met = $('#mainTipo form').attr('method');
    $('#mainTipo form').on('submit',function(e){
        e.preventDefault();
       $.ajax({
            beforeSend: function(){
               console.log();
               $('#ventanaTipoProyecto').modal('hide');
               $.blockUI();
            },
            url: pet,
            type: met,
            data: $('#mainTipo form').serialize(),
            success: function(resp) {
                actualizarTipoProyecto();
                $.unblockUI({
                     onUnblock: function(){
                         alert('El tipo de proyecto fue registrado correctamente');
                     } 
                 });
                //console.log(datos);
            },
            error: function (jqXHR,estado,error){
                //console.log(estado);
                //console.log(error);
            },
            complete: function (jqXHR, estado){
                //console.log(estado);
            }
    });
    });
    function actualizarTipoProyecto(){
        var conexion;
        if(window.XMLHttpRequest){
            conexion = new XMLHttpRequest();
        }else{
            conexion = new ActiveXObject("Microsoft.XMLHTTP");
        }
        conexion.onreadystatechange=function(){
            if(conexion.readyState==4 && conexion.status==200){
                var div = $(conexion.responseText).find('#ventTipoProyecto').html();
                document.getElementById("ventTipoProyecto").innerHTML=div;
            }
        }
        conexion.open("GET","/AdministracionRRHH/web/app_dev.php/proyecto/registro",true);
        conexion.send();
        }
    });
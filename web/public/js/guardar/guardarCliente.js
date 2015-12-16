$(document).ready(function(){
    var pet = $('#main form').attr('action');
    var met = $('#main form').attr('method');
    $('#main form').on('submit',function(e){
        e.preventDefault();
       $.ajax({
            beforeSend: function(){
               console.log();
               $('#ventanaCliente').modal('hide');
               $.blockUI();
            },
            url: pet,
            type: met,
            data: $('#main form').serialize(),
            success: function(resp) {
                actualizarCliente();
                $.unblockUI({
                     onUnblock: function(){
                         alert('El cliente fue registrado correctamente');
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
    function actualizarCliente(){
        var conexion;
        if(window.XMLHttpRequest){
            conexion = new XMLHttpRequest();
        }else{
            conexion = new ActiveXObject("Microsoft.XMLHTTP");
        }
        conexion.onreadystatechange=function(){
            if(conexion.readyState==4 && conexion.status==200){
                var div = $(conexion.responseText).find('#ventCliente').html();
                document.getElementById("ventCliente").innerHTML=div;
            }
        }
        conexion.open("GET","/AdministracionRRHH/web/app_dev.php/proyecto/registro",true);
        conexion.send();
        }
    });
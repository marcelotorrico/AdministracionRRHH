$(document).ready(function(){
    var pet = $('#mainLugar form').attr('action');
    var met = $('#mainLugar form').attr('method');
    $('#mainLugar form').on('submit',function(e){
        e.preventDefault();
       $.ajax({
            beforeSend: function(){
               console.log();
               $('#ventanaLugar').modal('hide');
               $.blockUI();
            },
            url: pet,
            type: met,
            data: $('#mainLugar form').serialize(),
            success: function(resp) {
                if (resp != 1){
                    actualizarLugar();
                    $(this).submit();
                    $.unblockUI({
                        onUnblock: function(){
                            alert('El Lugar fue registrado correctamente');
                        } 
                    });
                    $('#mtd_proyectobundle_lugar_nombre').val("");
                }else{
                    $.unblockUI({
                        onUnblock: function(){
                            alert("El Lugar ya fue registrado, por favor elija otro nombre");
                        } 
                    });    
               }
                //console.log(resp);
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
    function actualizarLugar(){
        var conexion;
        if(window.XMLHttpRequest){
            conexion = new XMLHttpRequest();
        }else{
            conexion = new ActiveXObject("Microsoft.XMLHTTP");
        }
        conexion.onreadystatechange=function(){
            if(conexion.readyState==4 && conexion.status==200){
                var div = $(conexion.responseText).find('#ventLugar').html();
                document.getElementById("ventLugar").innerHTML=div;
            }
        }
        conexion.open("GET","/AdministracionRRHH/web/app_dev.php/proyecto/registro",true);
        conexion.send();
        }
    });
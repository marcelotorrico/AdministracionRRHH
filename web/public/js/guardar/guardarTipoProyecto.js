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
                if (resp != 1){
                    actualizarTipoProyecto();
                    $(this).submit();
                    $.unblockUI({
                        onUnblock: function(){
                            alert('El tipo de proyecto fue registrado correctamente');
                        } 
                    });
                    $('#mtd_contratacionempleadosbundle_tipo_proyecto_nombre').val("");
                }else{
                    $.unblockUI({
                        onUnblock: function(){
                            alert("El tipo de proyecto ya fue registrado, por favor elija otro nombre");
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
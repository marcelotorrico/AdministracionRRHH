$(document).ready(function(){
    var pet = $('#main form').attr('action');
    var met = $('#main form').attr('method');
    $('#main form').on('submit',function(e){
        e.preventDefault();
       $.ajax({
            beforeSend: function(){
                
               console.log();
               $.blockUI();
            },
            url: pet,
            type: met,
            data: $('#main form').serialize(),
            success: function(resp) {
                //debugger;
                actualizarTipoProyecto();
                $('#mtd_categoriastrabajobundle_requisito_categoria_nombre').val("");
                $('#mtd_categoriastrabajobundle_requisito_categoria_descripcion').val("");
                $('#mtd_categoriastrabajobundle_requisito_categoria_categoria').val("");
                $.unblockUI({
                 onUnblock: function(){
                     alert('El requisito para la categoria fue registrado correctamente');
                 } 
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
    function actualizarTipoProyecto(){
        var conexion;
        if(window.XMLHttpRequest){
            conexion = new XMLHttpRequest();
        }else{
            conexion = new ActiveXObject("Microsoft.XMLHTTP");
        }
        conexion.onreadystatechange=function(){
            if(conexion.readyState==4 && conexion.status==200){
                var div = $(conexion.responseText).find('#tabla').html();
                document.getElementById("tabla").innerHTML=div;
            }
        }
        conexion.open("GET","/AdministracionRRHH/web/app_dev.php/requisito/crear",true);
        conexion.send();
        }
        
        $(".confirmarEliminacion").on("click", function(e) {

            return confirm('¿Esta seguro que quiere eliminar el requisito?');

        });
        
        $(".alertaEliminacion").on("click", function(e) {

            alert('La categoria no puede ser eliminada porque esta siendo utilizada');
            return false;
        });
    });
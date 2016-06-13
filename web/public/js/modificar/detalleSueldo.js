$(document).ready(function(){
    $(".linkdiasNoTrabajados").click(function(){
        var id = $(this).data('id');
        $("#tablaDiasNoTrabajados").empty();
        $("#tablaDiasNoTrabajados").load('/AdministracionRRHH/web/app_dev.php/sueldo/detalle/diasNoTrabajados/'+id);
    });
    $(".linkHorasExtras").click(function(){
        var id = $(this).data('id');
        $("#tablaHorasExtras").empty();
        $("#tablaHorasExtras").load('/AdministracionRRHH/web/app_dev.php/sueldo/detalle/horasExtras/'+id);
    });
    $(".linkBonoAntiguedad").click(function(){
        var id = $(this).data('id');
        $("#tablaBonoAntiguedad").empty();
        $("#tablaBonoAntiguedad").load('/AdministracionRRHH/web/app_dev.php/sueldo/detalle/bonoAntiguedad/'+id);
    });
    $(".linkDescuentos").click(function(){
        var id = $(this).data('id');
        $("#tablaDescuentos").empty();
        $("#tablaDescuentos").load('/AdministracionRRHH/web/app_dev.php/sueldo/detalle/descuentos/'+id);
    });
    $(".linkPremios").click(function(){
        var id = $(this).data('id');
        $("#tablaPremios").empty();
        $("#tablaPremios").load('/AdministracionRRHH/web/app_dev.php/sueldo/detalle/premios/'+id);
    });
    $(".confirmarEmicion").on("click", function(e) {
        var suma = 0;
        var los_cboxes = document.getElementsByName('sueldos[]'); 
        for (var i = 0, j = los_cboxes.length; i < j; i++) {
            if(los_cboxes[i].checked == true){
                suma++;
                break;
            }
        }
        if(suma == 0){
            alert('Por favor seleccione un sueldo para emitir');
            return false;
        }else{
            return confirm('¿Esta seguro que quiere emitir todos los sueldos seleccionados?');
        }
    });
    
    $("#desmarcarTodos").click(function () {
        if ($(this).is(':checked')) {
            //$("input[type=checkbox]").prop('checked', true); //todos los check
            $("#sueldosMarcados input[type=checkbox]").prop('checked', true); //solo los del objeto #diasHabilitados
        } else {
            //$("input[type=checkbox]").prop('checked', false);//todos los check
            $("#sueldosMarcados input[type=checkbox]").prop('checked', false);//solo los del objeto #diasHabilitados
        }
    });
});
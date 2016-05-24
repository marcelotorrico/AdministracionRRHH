$(document).ready(function(){
    $(".detalle").click(function(){
        var id = $(this).data('id');
        $("#tabla").empty();
        $("#tabla").load('/AdministracionRRHH/web/app_dev.php/asistencia/detalle/tabla/'+id);
    });
    
    $(".detalleAdministrativo").click(function(){
        var id = $(this).data('id');
        $("#tabla").empty();
        $("#tabla").load('/AdministracionRRHH/web/app_dev.php/asistencia/detalleAdministrativo/tabla/'+id);
    });
    
    $(".detalleFalta").click(function(){
        var id = $(this).data('id');
        $("#tablaFalta").empty();
        $("#tablaFalta").load('/AdministracionRRHH/web/app_dev.php/inasistencia/detalle/tabla/'+id);
    });
    
    $(".detalleFeriado").click(function(){
        var id = $(this).data('id');
        $("#tablaFeriado").empty();
        $("#tablaFeriado").load('/AdministracionRRHH/web/app_dev.php/feriado/detalle/tabla/'+id);
    });
    
    $(".confirmarEliminacion").on("click", function(e) {

        return confirm('¿Esta seguro que quiere eliminar la asistencia?');

    });
});
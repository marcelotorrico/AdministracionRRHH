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

        return confirm('¿Esta seguro que quiere emitir el sueldo?');

    });
});
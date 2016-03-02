$(document).ready(function(){
    $(".detalle").click(function(){
        var id = $(this).data('id');
        $("#tabla").empty();
        $("#tabla").load('/AdministracionRRHH/web/app_dev.php/asistencia/detalle/tabla/'+id);
    });
    
    $(".confirmarEliminacion").on("click", function(e) {

        return confirm('¿Esta seguro que quiere eliminar la asistencia?');

    });
});
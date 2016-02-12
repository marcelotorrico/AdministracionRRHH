$(document).ready(function(){
    $(".detalle").click(function(){
        var id = $(this).data('id');
        $("#tabla").load('/AdministracionRRHH/web/app_dev.php/asistencia/detalle/tabla/'+id);
    });
});
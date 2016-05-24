$(document).ready(function(){
    $(".feriado1").click(function(){
        var id = $(this).data('id');
        document.getElementById("idEmpleado").value = id;
    });
    $(".asistencia1").click(function(){
        var id = $(this).data('id');
        document.getElementById("idEmpleadoAsistencia").value = id;
    });
    $(".asistencia2").click(function(){
        var id = $(this).data('id');
        document.getElementById("idEmpleadoAdministrativoAsistencia").value = id;
    });
});
$(document).ready(function(){
    $(".feriado1").click(function(){
        var id = $(this).data('id');
        document.getElementById("idEmpleado").value = id;
    });
});
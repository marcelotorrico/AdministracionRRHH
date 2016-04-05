$(document).ready(function(){
    $(".feriado").click(function(){
        var id = $(this).data('id');
        document.getElementById("idEmpleado").value = id;
    });
});
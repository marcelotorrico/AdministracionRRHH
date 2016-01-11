$(document).ready(function(){
    $("#categoria").change(function(event){
        var idEmpleado = $('#categoria').data('id');
        var id = $("#categoria").find(':selected').val();
        $("#mostrarRequisitos").load('/AdministracionRRHH/web/app_dev.php/postulante/registroPerfil/requisitos/editar/'+id+'/'+idEmpleado);
    });
});

function verificar(){
    var suma = 0;
    var los_cboxes = document.getElementsByName('requisitos[]'); 
    for (var i = 0, j = los_cboxes.length; i < j; i++) {

        if(los_cboxes[i].checked == true){
            suma++;
        }
    }

    if(suma == 0){
    alert('Por lo menos debe seleccionar una casilla en los requisitos');
    return false;
    }
}
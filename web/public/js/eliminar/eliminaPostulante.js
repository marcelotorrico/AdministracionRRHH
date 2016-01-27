$(document).ready(function(){
    
    $(".confirmarEliminacion").on("click", function(e) {

        return confirm('¿Esta seguro que quiere eliminar al postulante?');

    });
    
    $(".confirmarEliminacionEmpleado").on("click", function(e) {

        return confirm('¿Esta seguro que quiere eliminar al empleado?');

    });
    
});
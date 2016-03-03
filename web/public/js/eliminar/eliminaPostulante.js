$(document).ready(function(){
    
    $(".confirmarEliminacion").on("click", function(e) {

        return confirm('¿Esta seguro que quiere eliminar al postulante?');

    });
    
    $(".confirmarEliminacionEmpleado").on("click", function(e) {

        return confirm('¿Esta seguro que quiere eliminar al empleado?');

    });
    
    $(".confirmarEliminacionProyecto").on("click", function(e) {

        return confirm('El empleado esta asignado a proyectos de la empresa. ¿Esta seguro que quiere eliminarlo?');

    });
});
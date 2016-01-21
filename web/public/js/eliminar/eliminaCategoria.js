$(document).ready(function(){
    
    $(".confirmarEliminacion").on("click", function(e) {

        return confirm('¿Esta seguro que quiere eliminar la categoria?');

    });
    $(".alertaEliminacion").on("click", function(e) {

        alert('La categoria no puede ser eliminada porque esta siendo utilizada');
        return false;
    });
});
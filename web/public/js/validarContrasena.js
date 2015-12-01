$(document).on('ready', function(){
    $("#enviar").click(function(e){
        var contrasena1 = $("#mtd_registrobundle_estudiante_contrasena_first").val();
        var contrasena2 = $("#mtd_registrobundle_estudiante_contrasena_second").val();
    
    if(contrasena1 != contrasena2){
        alert("Las contraseñas no coinciden");
        alert(contrasena1 + contrasena2);
        e.preventDefault();
    }
    });
});
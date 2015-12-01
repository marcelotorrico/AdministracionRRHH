function actualizar(){
    $("#mostrar").empty();
    var conexion;
    if(window.XMLHttpRequest){
        conexion = new XMLHttpRequest();
    }else{
        conexion = new ActiveXObject("Microsoft.XMLHTTP");
    }
    conexion.onreadystatechange=function(){
        if(conexion.readyState==4 && conexion.status==200){
            document.getElementById("cuerpo").innerHTML=conexion.responseText;
            $.getScript('/LoginSymfony/web/public/js/guardar.js');
        }
    }
    conexion.open("GET","/LoginSymfony/web/app_dev.php/estudiante/inscripcion",true);
    conexion.send();
}
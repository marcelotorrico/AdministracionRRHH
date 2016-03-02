$(document).ready(function(){
        $("#enviar").on("click", function(e) {
            
            var horaInicio = document.getElementById("horaIngresoManana");
            var horaFinal = document.getElementById("horaSalidaManana");
            var horaInicioTarde = document.getElementById("horaIngresoTarde");
            var horaFinalTarde = document.getElementById("horaSalidaTarde");
            var totalHorasNormales = document.getElementById("horasNormales");
            var totalHorasExtras = document.getElementById("horasExtras");
            if( horaInicio.value != "" && horaFinal.value != "" && horaInicioTarde.value != "" && horaFinalTarde.value != "" && totalHorasNormales.value != ""){
                var hora1 = horaInicio.value.split(":");
                var hora2 = horaFinal.value.split(":");
                var horaTarde1 = horaInicioTarde.value.split(":");
                var horaTarde2 = horaFinalTarde.value.split(":");
                var t1 = new Date();
                var t2 = new Date();
                var t3 = new Date();
                var t4 = new Date();
                
                t1.setHours(hora2[0], hora2[1]);
                t2.setHours(hora1[0], hora1[1]);
                t3.setHours(horaTarde2[0], horaTarde2[1]);
                t4.setHours(horaTarde1[0], horaTarde1[1]);
                
                t1.setHours(t1.getHours() - t2.getHours(), t1.getMinutes() - t2.getMinutes());
                t3.setHours(t3.getHours() - t4.getHours(), t3.getMinutes() - t4.getMinutes());
                var horaMañana = (t1.getHours() ? t1.getHours() : "0") + (t1.getMinutes() ? ":" + t1.getMinutes() : ":0");
                var horaTarde  = (t3.getHours() ? t3.getHours() : "0") + (t3.getMinutes() ? ":" + t3.getMinutes() : ":0");
                var horaM = horaMañana.split(":");
                var horaT = horaTarde.split(":");
                var horasTotal = parseInt(horaM[0]) + parseInt(horaT[0]);
                var minutosTotal = parseInt(horaM[1]) + parseInt(horaT[1]);
                if(minutosTotal > 59){
                    horasTotal +=1;
                    minutosTotal = minutosTotal - 60;
                }
                var horasTrabajadas = horasTotal+""+":"+minutosTotal+"";
                
                var horasNormales = totalHorasNormales.value.split(":");
                if(totalHorasExtras.value != ""){
                    var horasExtras = totalHorasExtras.value.split(":");
                    var horasTotal1 = parseInt(horasNormales[0]) + parseInt(horasExtras[0]);
                    var minutosTotal1 = parseInt(horasNormales[1]) + parseInt(horasExtras[1]);
                    if(minutosTotal1 > 59){
                        horasTotal1 +=1;
                        minutosTotal1 = minutosTotal1 - 60;
                    }
                    var horasTrabajadas1 = horasTotal1+""+":"+minutosTotal1+"";
                }else{
                    var horasTrabajadas1 = totalHorasNormales.value;
                }
                
                if(horasTrabajadas != horasTrabajadas1){
                    alert("La totalidad de las horas normales y extras son incoherentes respecto a las horas de ingreso y salida");
                    return false;
                }
            }            
	});
});
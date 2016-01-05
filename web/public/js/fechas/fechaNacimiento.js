$(document).on('ready',function(){
    $("#mtd_reclutamientobundle_empleado_fechaNacimiento").datepicker({
        firstDay: 1,
        defaultDate: new Date(1980, 00, 01),
        changeMonth: true,
        changeYear: true
     });
 });
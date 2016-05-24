$(document).on('ready',function(){
    $("#fecha").datepicker({
        //minDate: "-0D"
     }).datepicker("setDate", new Date());
     $("#fechaFeriado").datepicker({
        //minDate: "-0D"
     }).datepicker("setDate", new Date());
 });
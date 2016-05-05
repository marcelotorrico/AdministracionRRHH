$(document).on('ready',function(){
    $("#fecha").datepicker({
        //minDate: "-0D"
        //changeMonth: true,
        //changeYear: true,
        //showButtonPanel: true,
        dateFormat: 'MM yy'
     }).datepicker("setDate", new Date());
 });
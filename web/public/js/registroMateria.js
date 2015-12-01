$(document).ready(function(){
   var pet = $('#main form').attr('action');
   var met = $('#main form').attr('method');
   var mat, doc;
   
   $('#main form').on('submit',function(e){
       
       e.preventDefault();
       
       $.ajax({
           beforeSend: function(){
               mat = document.mtd_loginbundle_inscripcion.mtd_loginbundle_inscripcion_materia.value;
               doc = document.mtd_loginbundle_inscripcion.mtd_loginbundle_inscripcion_docente.value;
           },
           url: pet,
           type: met,
           //data: {materia:mat, docente:doc},
           data: $('#main form').serialize(),
           success: function(resp) {
               $('#mensaje').text('Hola Mundo');
               console.log(resp);
           },
           error: function (jqXHR,estado,error){
               $('#mensaje').text('ERROR');
               console.log(estado);
               console.log(error);
           },
           complete: function (jqXHR, estado){
               console.log(estado);
           }
        });
   });
});
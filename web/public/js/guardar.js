$(document).ready(function(){
    var pet = $('#main form').attr('action');
    var met = $('#main form').attr('method');
    var materia, docente;
    $('#main form').on('submit',function(e){
            e.preventDefault();
            //var $materia = $('#mtd_loginbundle_inscripcion_materia').val();
            //var $docente = $('#mtd_loginbundle_inscripcion_docente').val();
           $.ajax({
           beforeSend: function(){
              
           },
           url: pet,
           type: met,
           //data: "{ materia:materia, docente:docente }",
           //data: { materia:materia, docente:docente },
           data: $('#main form').serialize(),
           success: function(resp) {
               console.log('resp');
               alert('Se registro correctamente');
               $('#mtd_loginbundle_inscripcion_materia').val("");
               $('#mtd_loginbundle_inscripcion_docente').val("");
           },
           error: function (jqXHR,estado,error){
               console.log(estado);
               console.log(error);
           },
           complete: function (jqXHR, estado){
               console.log(estado);
           }
        });
    });
    });
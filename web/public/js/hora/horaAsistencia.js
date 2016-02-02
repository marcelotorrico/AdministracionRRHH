$(document).ready(function(){
    $(document).on('click', '#mtd_asistenciabundle_asistencia_horaIngresoManana', function(e) {
        
        $('.clockpicker').clockpicker()
            .find('input').change(function() {
                    console.log(this.value);
            });
            var input = $('#single-input').clockpicker({
                placement: 'bottom',
                align: 'left',
                autoclose: true,
                'default': 'now'
            });

            $('.clockpicker-with-callbacks').clockpicker({
                donetext: 'Done',
                init: function() {
                    console.log("colorpicker initiated");
                },
                beforeShow: function() {
                    console.log("before show");
                },
                afterShow: function() {
                    console.log("after show");
                },
                beforeHide: function() {
                    console.log("before hide");
                },
                afterHide: function() {
                    console.log("after hide");
                },
                beforeHourSelect: function() {
                    console.log("before hour selected");
                },
                afterHourSelect: function() {
                    console.log("after hour selected");
                },
                beforeDone: function() {
                    console.log("before done");
                },
                afterDone: function() {
                    console.log("after done");
                }
                })
            .find('input').change(function() {
                    console.log(this.value);
            });

            // Manually toggle to the minutes view
            $('#check-minutes').click(function(e) {
                    // Have to stop propagation here
                    e.stopPropagation();
                    input.clockpicker('show')
                            .clockpicker('toggleView', 'minutes');
            });
            if (/mobile/i.test(navigator.userAgent)) {
                    $('input').prop('readOnly', true);
            }        
        });

        $(document).on('click', '#mtd_asistenciabundle_asistencia_horaSalidaManana', function(e) {
        $('.clockpicker').clockpicker()
            $("#mtd_asistenciabundle_asistencia_horaSalidaManana").change(function() {

                var horaInicio = document.getElementById("mtd_asistenciabundle_asistencia_horaIngresoManana");
                var horaFinal = document.getElementById("mtd_asistenciabundle_asistencia_horaSalidaManana");
                console.log('prueba');
                if( horaInicio.value != "" && horaFinal.value != ""){
                    if((new Date(2015,1,1, parseInt(horaInicio.value.split(':')[0]), parseInt(horaInicio.value.split(':')[1]),0,0)) > ( new Date(2015,1,1, parseInt(horaFinal.value.split(':')[0]), parseInt(horaFinal.value.split(':')[1]),0,0))){
                        alert('Los horarios registrados son incoherentes');
                        document.getElementById("mtd_asistenciabundle_asistencia_horaSalidaManana").value = "";
                    }
                }
            });
            $("#mtd_asistenciabundle_asistencia_horaIngresoManana").change(function() {

                var horaInicio = document.getElementById("mtd_asistenciabundle_asistencia_horaIngresoManana");
                var horaFinal = document.getElementById("mtd_asistenciabundle_asistencia_horaSalidaManana");
                console.log('prueba');
                if( horaInicio.value != "" && horaFinal.value != ""){
                    if((new Date(2015,1,1, parseInt(horaInicio.value.split(':')[0]), parseInt(horaInicio.value.split(':')[1]),0,0)) > ( new Date(2015,1,1, parseInt(horaFinal.value.split(':')[0]), parseInt(horaFinal.value.split(':')[1]),0,0))){
                        alert('Los horarios registrados son incoherentes');
                        document.getElementById("mtd_asistenciabundle_asistencia_horaIngresoManana").value = "";
                    }
                }
            });

        var input = $('#single-input').clockpicker({
            placement: 'bottom',
            align: 'left',
            autoclose: true,
            'default': 'now'
        });

        $('.clockpicker-with-callbacks').clockpicker({
            donetext: 'Done',
            init: function() {
                console.log("colorpicker initiated");
            },
            beforeShow: function() {
                console.log("before show");
            },
            afterShow: function() {
                console.log("after show");
            },
            beforeHide: function() {
                console.log("before hide");
            },
            afterHide: function() {
                console.log("after hide");
            },
            beforeHourSelect: function() {
                console.log("before hour selected");
            },
            afterHourSelect: function() {
                console.log("after hour selected");
            },
            beforeDone: function() {
                console.log("before done");
            },
            afterDone: function() {
                console.log("after done");
            }                   
        })
        .find('input').change(function() {
                console.log(this.value);
        });

        // Manually toggle to the minutes view
        $('#check-minutes').click(function(e) {
            // Have to stop propagation here
            e.stopPropagation();
            input.clockpicker('show')
            .clockpicker('toggleView', 'minutes');
        });
        if (/mobile/i.test(navigator.userAgent)) {
            $('input').prop('readOnly', true);
        }            
    });
    
    $(document).on('click', '#mtd_asistenciabundle_asistencia_horaIngresoTarde', function(e) {
        
        $('.clockpicker').clockpicker()
            .find('input').change(function() {
                    console.log(this.value);
            });
            var input = $('#single-input').clockpicker({
                placement: 'bottom',
                align: 'left',
                autoclose: true,
                'default': 'now'
            });

            $('.clockpicker-with-callbacks').clockpicker({
                donetext: 'Done',
                init: function() {
                    console.log("colorpicker initiated");
                },
                beforeShow: function() {
                    console.log("before show");
                },
                afterShow: function() {
                    console.log("after show");
                },
                beforeHide: function() {
                    console.log("before hide");
                },
                afterHide: function() {
                    console.log("after hide");
                },
                beforeHourSelect: function() {
                    console.log("before hour selected");
                },
                afterHourSelect: function() {
                    console.log("after hour selected");
                },
                beforeDone: function() {
                    console.log("before done");
                },
                afterDone: function() {
                    console.log("after done");
                }
                })
            .find('input').change(function() {
                    console.log(this.value);
            });

            // Manually toggle to the minutes view
            $('#check-minutes').click(function(e) {
                    // Have to stop propagation here
                    e.stopPropagation();
                    input.clockpicker('show')
                            .clockpicker('toggleView', 'minutes');
            });
            if (/mobile/i.test(navigator.userAgent)) {
                    $('input').prop('readOnly', true);
            }        
        });
        
        $(document).on('click', '#mtd_asistenciabundle_asistencia_horaSalidaTarde', function(e) {
        $('.clockpicker').clockpicker()
            $("#mtd_asistenciabundle_asistencia_horaSalidaTarde").change(function() {

                var horaInicio = document.getElementById("mtd_asistenciabundle_asistencia_horaIngresoTarde");
                var horaFinal = document.getElementById("mtd_asistenciabundle_asistencia_horaSalidaTarde");
                console.log('prueba');
                if( horaInicio.value != "" && horaFinal.value != ""){
                    if((new Date(2015,1,1, parseInt(horaInicio.value.split(':')[0]), parseInt(horaInicio.value.split(':')[1]),0,0)) > ( new Date(2015,1,1, parseInt(horaFinal.value.split(':')[0]), parseInt(horaFinal.value.split(':')[1]),0,0))){
                        alert('Los horarios registrados son incoherentes');
                        document.getElementById("mtd_asistenciabundle_asistencia_horaSalidaTarde").value = "";
                    }
                }
            });
            $("#mtd_asistenciabundle_asistencia_horaIngresoTarde").change(function() {

                var horaInicio = document.getElementById("mtd_asistenciabundle_asistencia_horaIngresoTarde");
                var horaFinal = document.getElementById("mtd_asistenciabundle_asistencia_horaSalidaTarde");
                console.log('prueba');
                if( horaInicio.value != "" && horaFinal.value != ""){
                    if((new Date(2015,1,1, parseInt(horaInicio.value.split(':')[0]), parseInt(horaInicio.value.split(':')[1]),0,0)) > ( new Date(2015,1,1, parseInt(horaFinal.value.split(':')[0]), parseInt(horaFinal.value.split(':')[1]),0,0))){
                        alert('Los horarios registrados son incoherentes');
                        document.getElementById("mtd_asistenciabundle_asistencia_horaIngresoTarde").value = "";
                    }
                }
            });

        var input = $('#single-input').clockpicker({
            placement: 'bottom',
            align: 'left',
            autoclose: true,
            'default': 'now'
        });

        $('.clockpicker-with-callbacks').clockpicker({
            donetext: 'Done',
            init: function() {
                console.log("colorpicker initiated");
            },
            beforeShow: function() {
                console.log("before show");
            },
            afterShow: function() {
                console.log("after show");
            },
            beforeHide: function() {
                console.log("before hide");
            },
            afterHide: function() {
                console.log("after hide");
            },
            beforeHourSelect: function() {
                console.log("before hour selected");
            },
            afterHourSelect: function() {
                console.log("after hour selected");
            },
            beforeDone: function() {
                console.log("before done");
            },
            afterDone: function() {
                console.log("after done");
            }                   
        })
        .find('input').change(function() {
                console.log(this.value);
        });

        // Manually toggle to the minutes view
        $('#check-minutes').click(function(e) {
            // Have to stop propagation here
            e.stopPropagation();
            input.clockpicker('show')
            .clockpicker('toggleView', 'minutes');
        });
        if (/mobile/i.test(navigator.userAgent)) {
            $('input').prop('readOnly', true);
        }            
    });
});
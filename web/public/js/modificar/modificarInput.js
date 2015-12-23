$(document).ready(function(){
	$("#mtd_categoriastrabajobundle_categoria_sueldoBasico").change(function(){
            var sueldoBasico = $("#mtd_categoriastrabajobundle_categoria_sueldoBasico").val();
            var viatico = $("#mtd_categoriastrabajobundle_categoria_viatico").val();
            var premio = $("#mtd_categoriastrabajobundle_categoria_premio").val();
            var total = parseFloat(sueldoBasico) + parseFloat(viatico) + parseFloat(premio);
            $("#mtd_categoriastrabajobundle_categoria_total").val(total);
	});
        
        $("#mtd_categoriastrabajobundle_categoria_viatico").change(function(){
            var sueldoBasico = $("#mtd_categoriastrabajobundle_categoria_sueldoBasico").val();
            var viatico = $("#mtd_categoriastrabajobundle_categoria_viatico").val();
            var premio = $("#mtd_categoriastrabajobundle_categoria_premio").val();
            var total = parseFloat(sueldoBasico) + parseFloat(viatico) + parseFloat(premio);
            $("#mtd_categoriastrabajobundle_categoria_total").val(total);
	});
        
        $("#mtd_categoriastrabajobundle_categoria_premio").change(function(){
            var sueldoBasico = $("#mtd_categoriastrabajobundle_categoria_sueldoBasico").val();
            var viatico = $("#mtd_categoriastrabajobundle_categoria_viatico").val();
            var premio = $("#mtd_categoriastrabajobundle_categoria_premio").val();
            var total = parseFloat(sueldoBasico) + parseFloat(viatico) + parseFloat(premio);
            $("#mtd_categoriastrabajobundle_categoria_total").val(total);
	});
});
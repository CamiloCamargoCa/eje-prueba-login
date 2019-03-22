
$(document).ready(function (){
	$("button").click(function(){

		$.get('datos.json',function(datos){
			console.log(datos);
			$("#info").text(datos.nombre + ' ' + datos.apellido);
		});
	});
});
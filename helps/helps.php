<?php  

//validar y limpiar un campo
//campo de tipo POST
function validar_campo($campo){
	$campo = trim($campo);
	$campo = stripcslashes($campo);
	$campo = htmlspecialchars($campo);

	return $campo;
}

?>
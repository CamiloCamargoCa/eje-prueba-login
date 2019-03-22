<?php 

include '../controlador/UsuarioControlador.php';
include '../helps/helps.php';

session_start();

header('Content-type: application/json');
$resultado = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['txtNombre']) &&
		isset($_POST['txtEmail']) && 
		isset($_POST['txtUsuario']) &&  
		isset($_POST['txtPassword']) &&
		isset($_POST['txtPrivilegio'])) {


	$txtNombre = validar_campo($_POST['txtNombre']);
	$txtEmail = validar_campo($_POST['txtEmail']);
	$txtUsuario = validar_campo($_POST['txtUsuario']);
	$txtPassword = validar_campo($_POST['txtPassword']);
	$txtPrivilegio = validar_campo($_POST['txtPrivilegio']);
	
	
	if (UsuarioControlador::registrar($txtNombre,$txtEmail,$txtUsuario,$txtPassword,$txtPrivilegio)) {
		$usuario = UsuarioControlador::getUsuario($txtUsuario,$txtPassword);

		$_SESSION["usuario"] = array(
			"id" => $usuario->getId(),
			"nombre" => $usuario->getNombre(),
			"usuario" => $usuario->getUsuario(),
			"email" => $usuario->getEmail(),
			"privilegio" => $usuario->getPrivilegio(),
		);
		
		header("location:admin.php");
		}
	}  
}else{
	header("location:registro.php?error=1");
}


?>
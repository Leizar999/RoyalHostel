<?php 
	session_start();

	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/usuario.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/usuariodao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorUsuario.php");

	$filas = UsuarioDAO::getUsuario($_SESSION["login"]);

	if(isset($_POST["llegada"], $_POST["salida"], $_POST["adultos"], $_POST["children"], $_POST["servicio"])){


		$_SESSION["nombre"] = $filas->getNombre();
		$_SESSION["apellidos"] = $filas->getApellidos();
		$_SESSION["email"] = $filas->getCorreo();
		$_SESSION["telefono"] = $filas->getTelefono();
		$_SESSION["llegada"] = $_POST["llegada"];
		$_SESSION["salida"] = $_POST["salida"];
		$_SESSION["adultos"] = $_POST["adultos"];
		$_SESSION["children"] = $_POST["children"];
		$_SESSION["servicio"] = $_POST["servicio"];

		$arrival = date_format(date_create_from_format('d/m/Y', $_SESSION["llegada"]), 'Y/m/d');
		$departure = date_format(date_create_from_format('d/m/Y', $_SESSION["salida"]), 'Y/m/d');

		$fecha1 = new DateTime($arrival);
		$fecha2 = new DateTime($departure);

		$diferencia = $fecha2->diff($fecha1)->format("%a");

		$total = $_SESSION["precio"] * $diferencia . "€";

		$_SESSION["total"] = $total;
	}

	if(isset($_SESSION['login'])){
		$_SESSION["autenticado"] = true;
	} else {
		$_SESSION["autenticado"] = false;
	}

	if($_SESSION["autenticado"] == true){
		$_SESSION["exito"] = "PUEDES RESERVAR!!";
		header("location: /vista/resumen.php");
	} else {
		$_SESSION["errores"][] = "PARA HACER RESERVAS TIENES QUE ESTAR AUTENTICADO";
		header("location: " . $_SERVER['HTTP_REFERER']);
	}
?>
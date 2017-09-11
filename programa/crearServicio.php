<?php
	session_start();

	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/servicio.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/serviciodao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorServicio.php");

	if(isset($_POST["tipo"], $_POST["descripcion"], $_POST["precio"])){
		$bbdd = BD::getInstancia();
		$bbdd->establecerUTF8();
		$tipo = $bbdd->sanear($_POST["tipo"]);
		$descripcion = $bbdd->sanear($_POST["descripcion"]);
		$precio = $bbdd->sanear($_POST["precio"]);

		if($tipo != "" && 
			$descripcion != "" && 
			$precio != ""){

			$servicio = new Servicio();
			$controladorHabitacion = new ControladorServicio($servicio);
			$controladorHabitacion->leerDatosServicio($tipo, $descripcion, $precio);

			$servicioDAO = new ServicioDAO($servicio);
			$servicioDAO->insertarServicio();

			$_SESSION["exito"] = "SERVICIO CORRECTAMENTE INSERTADO: " . strtoupper($servicio->getTipo());

		}else {
			$_SESSION["errores"][] = "DEBE RELLENAR TODOS LOS CAMPOS OBLIGATORIOS";
		}
	}
	header("location: " . $_SERVER['HTTP_REFERER']);
?>
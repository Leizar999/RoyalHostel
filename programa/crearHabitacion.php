<?php
	session_start();

	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/habitacion.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/habitaciondao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorHabitacion.php");

	if(isset($_POST["tipo"], $_POST["descripcion"], $_POST["precio"], $_FILES['foto'])){
		$bbdd = BD::getInstancia();
		$bbdd->establecerUTF8();
		$tipo = $bbdd->sanear($_POST["tipo"]);
		$descripcion = $bbdd->sanear($_POST["descripcion"]);
		$precio = $bbdd->sanear($_POST["precio"]);

		if($tipo != "" && 
			$descripcion != "" && 
			$precio != ""){

			include($_SERVER["DOCUMENT_ROOT"] . "/programa/subirArchivos.php");

			$habitacion = new Habitacion();
			$controladorHabitacion = new ControladorHabitacion($habitacion);
			$controladorHabitacion->leerDatosHabitacion($tipo, $descripcion, $precio);

			$habitacionDAO = new HabitacionDAO($habitacion);
			$habitacionDAO->insertarHabitacion();

			$_SESSION["exito"] = "HABITACION CORRECTAMENTE INSERTADA: " . strtoupper($habitacion->getTipo());

		}else {
			$_SESSION["errores"][] = "DEBE RELLENAR TODOS LOS CAMPOS OBLIGATORIOS";
		}
	}
	header("location: " . $_SERVER['HTTP_REFERER']);
?>
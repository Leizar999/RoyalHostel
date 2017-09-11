<?php
/*
AUTOR: Juan Carlos Paz Delgado
MAIL: juancarlospazdelgado@gmail.com
*/

if(isset($_GET["tabla"], $_GET["valor"])){
	$tabla = $_GET['tabla'];
	$valor = $_GET['valor'];

	echo $tabla . " ";
	echo $valor . " ";

	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");

	$bbdd = BD::getInstancia();
	$bbdd->establecerUTF8();

	$borrar = false;

	switch ($tabla) {
		case 'usuario':
			include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/usuariodao.php");
			$usuarioDAO = new UsuarioDAO($valor);
			$borrar = $usuarioDAO->borrarUsuario($valor);
			break;
		case 'habitacion':
			include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/habitaciondao.php");
			$habitacionDAO = new HabitacionDAO($valor);
			$borrar = $habitacionDAO->borrarHabitacion($valor);
			break;
		case 'servicio':
			include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/serviciodao.php");
			$servicioDAO = new ServicioDAO($valor);
			$borrar = $servicioDAO->borrarServicio($valor);
			break;
	}

	if($borrar){
		echo "FILA BORRADA!";
	}else {
		echo "HA HABIDO ERRORES!";
	}
}

unset($tabla, $valor);

?>
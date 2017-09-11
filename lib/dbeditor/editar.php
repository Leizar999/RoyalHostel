<?php
/*
AUTOR: Juan Carlos Paz Delgado
MAIL: juancarlospazdelgado@gmail.com
*/

if(isset($_GET["id"], $_GET["col"], $_GET["data"], $_GET["tabla"])){
	$id = $_GET['id'];
	$col = strtolower($_GET['col']);
	$data = $_GET['data'];
	$tipo = $_GET['tabla'];

	echo $id . " ";
	echo $col . " ";
	echo $data . " ";
	echo $tipo . " ";

	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");

	$bbdd = BD::getInstancia();
	$bbdd->establecerUTF8();

	$actualizar = false;

	switch ($tipo) {
		case 'usuario':
			include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/usuariodao.php");
			$usuarioDAO = new UsuarioDAO($id);
			$actualizar = $usuarioDAO->actualizarUsuario($id, $col, $data);
			break;
		case 'habitacion':
			include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/habitaciondao.php");
			$habitacionDAO = new HabitacionDAO($id);
			$actualizar = $habitacionDAO->actualizarHabitacion($id, $col, $data);
			break;
		case 'servicio':
			include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/serviciodao.php");
			$servicioDAO = new ServicioDAO($id);
			$actualizar = $servicioDAO->actualizarServicio($id, $col, $data);
			break;
	}

	if($actualizar){
		echo "FILA ACTUALIZADA!";
	}else {
		echo "HA HABIDO ERRORES!";
	}
}

unset($id, $col, $data, $tipo);

$bbdd->cerrarConexion();

?>
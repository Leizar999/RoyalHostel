<?php
	session_start();

	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/reservadao.php");

	$bbdd = BD::getInstancia();
	$bbdd->establecerUTF8();

	$id = $_GET["id"];

	//echo "ESTO ES ID: " . $_SESSION["id"];

	$reservaDAO = new ReservaDAO($id);
	$fechas = $reservaDAO->getDias($id);

	echo json_encode($fechas);
?>
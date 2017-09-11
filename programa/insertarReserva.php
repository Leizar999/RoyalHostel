<?php

	session_start();

	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/reserva.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/reservadao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorReserva.php");


	$idHab = $_SESSION["id"];
	$tipoHab = $_SESSION["tipo"];
	$login = $_SESSION["login"];
	$llegada = 	$_SESSION["llegada"];
	$salida = $_SESSION["salida"];
	$adultos = $_SESSION["adultos"];
	$children = $_SESSION["children"];
	$servicio = $_SESSION["servicio"];
	$pago = str_replace("€", "", $_SESSION["total"]);

	$bbdd = BD::getInstancia();
	$bbdd->establecerUTF8();

	$reserva = new Reserva();
	$controladorReserva = new ControladorReserva($reserva);
	$controladorReserva->leerDatosReserva($idHab, $tipoHab, $login, $llegada, $salida, $adultos, $children, $servicio, $pago);

	$habitacionDAO = new ReservaDAO($reserva);
	$habitacionDAO->insertarReserva();

	header("Location: enviarReserva.php");
?>
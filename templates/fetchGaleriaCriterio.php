<?php 

	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/habitacion.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/habitaciondao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorHabitacion.php");

	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/reserva.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/reservadao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorReserva.php");

	$tipo = $_POST["tipo"];
	$llegada = $_POST["llegada"];
	$salida = $_POST["salida"];

	$filas = HabitacionDAO::getHabitaciones();
	$fila = HabitacionDAO::fetchHabitacion($filas);

	$filasReserva = ReservaDAO::getReservasFechas($salida, $tipo);
	$filaReserva = ReservaDAO::fetchReserva($filasReserva);

	//echo $tipo;
	//echo $llegada;
	//echo $salida;
?>

<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/head.php");?>
</head>
<body>
	<!-- Zona de header -->
	<div class="container-fluid">

		<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/header.php");?>

		<!-- Zona de nav-->

		<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/navigation.php");?>

		<!-- Zona de main -->

		<main id="main" class="jumbotron col-sm-9">
		
			<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/fetchGaleriaWhile.php"); ?>
		</main>
			
		<!-- Zona del aside -->

		<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/aside.php");?>

		<!-- Zona del pie -->

		<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/footer.php");?>
	</div>
</body>
</html>
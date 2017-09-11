<?php 

	session_start();

	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/habitacion.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/habitaciondao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorHabitacion.php");

	$filas = HabitacionDAO::getHabitacion($_SESSION["id"]);
	$fila = HabitacionDAO::fetchHabitacion($filas);

	$dir = @scandir($_SERVER["DOCUMENT_ROOT"] . "/img/galeria/" . $fila["id"]);
	$img = "/img/galeria/" . $fila["id"] . "/" . $dir[2];

	$cuantos = count($dir);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/head.php");?>
	<script src="/js/main.js.php"></script>
</head>
<body>
	<!-- Zona de header -->
	<div class="container-fluid">

		<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/header.php");?>

		<!-- Zona de nav-->

		<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/navigation.php");?>

		<!-- Zona de main -->

		<main id="main">
			<div class="row">

				<!-- Zona del aside -->

					<div class="wrapper col-sm-12">
						<div class="sidebar-wrapper">
							<div id="formulario-aside" class="panel panel-default">
							    <div class="panel-heading"><h4>RESUMEN</h4></div>
							    <div class="panel-body">
									<form action="" method="post" id="formulario-resumen">
										<div class="row form-group text-center">
											
											<div class="col-sm-12">
												<div class="row form-group">
													<div class="col-sm-1">
														<label for="tipo">TIPO</label>
													</div>

													<div class="col-sm-12">
														<input type="text" class="form-control" id="tipo" value="<?php echo $_SESSION["tipo"]; ?>" disabled>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-1">
														<label for="llegada">LLEGADA</label>
													</div>
													<div class="col-sm-12">
														<input class="form-control datepicker" type="text" value="<?php echo $_SESSION["llegada"]; ?>" name="llegada" disabled>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-1">
														<label for="salida">SALIDA</label>
													</div>
													<div class="col-sm-12">
														<input class="form-control datepicker" type="text" value="<?php echo $_SESSION["salida"]; ?>" name="salida" disabled>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-1">
														<label for="salida">PRECIO</label>
													</div>
													<div class="col-sm-12">
														<input class="form-control datepicker" type="text" name="salida" value="<?php echo $_SESSION["precio"]; ?>" disabled>
													</div>
												</div>


												<div class="row form-group">
													<div class="col-sm-1">
														<label for="adultos">ADULTOS</label>
													</div>
													<div class="col-sm-12">
														<input class="form-control" type="text" name="adultos" value="<?php echo $_SESSION["adultos"]; ?>" disabled>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-1">
														<label for="childs">NIÑOS</label>
													</div>
													<div class="col-sm-12">
														<input class="form-control" type="text" name="childs" value="<?php echo $_SESSION["children"]; ?>" disabled>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-1">
														<label for="servicio">SERVICIO</label>
													</div>
													<div class="col-sm-12">
														<input class="form-control" type="text" name="servicio" value="<?php echo $_SESSION["servicio"]; ?>" disabled>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-1">
														<label for="total">TOTAL</label>
													</div>
													<div class="col-sm-12">
														<input class="form-control" type="text" name="total" value="<?php echo $_SESSION["total"]; ?>" disabled>
													</div>
												</div>
												
												<div class="row form-group">
													<div id="paypal-button"></div>
												</div>
											</div>
										</div>
									</form>
							    </div>
							</div>
						</div>
					</div>
			</div>
			
		</main>

		<!-- Zona del pie -->

		<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/footer.php");?>
	</div>
</body>
</html>
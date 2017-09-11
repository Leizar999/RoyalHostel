<?php 

	session_start();

	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/habitacion.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/habitaciondao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorHabitacion.php");

	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/servicio.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/serviciodao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorServicio.php");

	$filas = HabitacionDAO::getHabitacion($_GET["hab"]);
	$fila = HabitacionDAO::fetchHabitacion($filas);

	$filas2 = ServicioDAO::getServicios();
	//$fila2 = ServicioDAO::fetchServicio($filas2);

	$_SESSION["id"] = $_GET["hab"];
	$_SESSION["tipo"] = $fila["tipo"];
	$_SESSION["precio"] = $fila["precio"];

	$dir = @scandir($_SERVER["DOCUMENT_ROOT"] . "/img/galeria/" . $fila["id"]);
	$img = "/img/galeria/" . $fila["id"] . "/" . $dir[2];

	$cuantos = count($dir);
?>

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

		<main id="main" class="jumbotron">
			<div class="row">
				<!-- Habitación -->

			    <div class="col-sm-12">
		            <div class="panel panel-default text-center">
		            	<div class="panel-heading"><h4><?php echo strtoupper($_SESSION["tipo"]); ?></h4></div>
			            <div class="panel-body text-center">
			            	<img src="<?php echo $img ?>" alt="Habitación <?php echo $fila["tipo"]; ?>" class="img-responsive img-rounded">

			            	<div class="panel-default-overlay-up">
								<?php echo $fila["descripcion"]; ?>
							</div>
		            	</div>
		            </div>
		        </div>

				<!-- Zona del formulario -->

				<div class="wrapper">
					<div class="sidebar-wrapper">
						<div id="formulario-reserva" class="panel panel-default">
						    <div class="panel-body">
								<form action="/programa/crearReserva.php" method="POST">
									<div class="row form-group text-center">
										
										<div class="col-sm-12">
											<div class="row form-group">
												<div class="col-sm-1">
													<label for="tipo">TIPO</label>
												</div>

												<div class="col-sm-12">
													<input type="text" class="form-control" name="tipo" id="<?php echo $fila["id"]; ?>" value="<?php echo strtoupper($_SESSION["tipo"]); ?>" disabled>
												</div>
											</div>

											<div class="row form-group">
												<div class="col-sm-1">
													<label for="llegada">LLEGADA</label>
												</div>
												<div class="col-sm-12">
													<input class="form-control datepicker" id="llegada" type="text" name="llegada" required>
												</div>
											</div>

											<div class="row form-group">
												<div class="col-sm-1">
													<label for="salida">SALIDA</label>
												</div>
												<div class="col-sm-12">
													<input class="form-control datepicker" id="salida" type="text" name="salida" required>
												</div>
											</div>

											<div class="row form-group">
												<div class="col-sm-1">
													<label for="salida">PRECIO</label>
												</div>
												<div class="col-sm-12">
													<input class="form-control" value="<?php echo strtoupper($_SESSION["precio"]); ?>" disabled>
												</div>
											</div>


											<div class="row form-group">
												<div class="col-sm-1">
													<label for="adultos">ADULTOS</label>
												</div>
												<div class="col-sm-12">
													<input class="form-control" type="number" id="adultos" min="1" max="6" name="adultos" value="1" required>
												</div>
											</div>

											<div class="row form-group">
												<div class="col-sm-1">
													<label for="childs">NIÑOS</label>
												</div>
												<div class="col-sm-12">
													<input class="form-control" type="number" id="children" min="0" max="8"  name="children" value="0" required>
												</div>
											</div>

											<div class="row form-group">
												<div class="col-sm-1">
													<label for="servicio">SERVICIO</label>
												</div>
												<div class="col-sm-12">

													<?php 
														echo "<select class='form-control' name='servicio' id='servicio' required>";
														    echo "<option value='ninguno'>NINGUNO</option>";

														while($data = mysqli_fetch_row($filas2)) {

														    echo "<option value='$data[0]'>$data[1] PRECIO: $data[3]</option>";
														}
														echo "</select>";
													?>													
												</div>													
											</div>
										</div>
											
											<div class="row form-group">
												<button type="submit" class="btn btn-primary btn-lg">IR A RESERVAS</button>
											</div>
										</div>
									</div>
								</form>
						    </div>
						</div>
					</div>
				</div>
			</div>

			<?php for($i = 3; $i < $cuantos; $i++): ?>

			<?php $imgs = "/img/galeria/" . $fila["id"] . "/" . $dir[$i]; ?>

		    <div class="col-sm-4">
	            <div class="panel panel-primary">
	            	<div class="panel-body">
	            		<img src="<?php echo $imgs; ?>" alt="Habitación <?php echo $fila["tipo"]; ?>" class="img-responsive img-rounded">

		            	<div class="panel-default-overlay-up">
			            	<h3><?php echo strtoupper($fila["tipo"]); ?></h3>
							<?php echo $fila["descripcion"]; ?>
						</div>
	            	</div>
	            </div>
	        </div>

			<?php endfor; ?>

		</main>

		<!-- Zona del pie -->

		<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/footer.php");?>
	</div>
</body>
</html>
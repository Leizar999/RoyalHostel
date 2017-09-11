<?php 

	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/habitacion.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/habitaciondao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorHabitacion.php");

	$filas = HabitacionDAO::getHabitaciones();
	$fila = HabitacionDAO::fetchHabitacion($filas);
?>

<?php while($fila): ?>

<?php 
	$img = "/img/default/nodisponible.jpg";

	if($dir = @scandir($_SERVER["DOCUMENT_ROOT"] . "/img/galeria/" . $fila["id"])){
		if(isset($dir[3])){
			$img = "/img/galeria/" . $fila["id"] . "/" . $dir[3];
		}
	}
?>

<div class="col-sm-6">
	<div class="panel panel-default">
		<div class="panel-heading"><h4><?php echo strtoupper($fila["tipo"]); ?></h4></div>
		<div class="panel-body">
			<img src="<?php echo $img; ?>" alt='Habitación <?php echo $fila["tipo"]; ?>' class="img-responsive img-rounded">

        	<div class="panel-default-overlay-up">
            	<?php echo $fila["descripcion"]; ?>
			</div>
		</div>
		<button class="btn btn-primary btn-block reservar" id="<?php echo $fila["id"]; ?>">RESERVAR</button>
	</div>
</div>

<?php $fila = HabitacionDAO::fetchHabitacion($filas); ?>
<?php endwhile; ?>
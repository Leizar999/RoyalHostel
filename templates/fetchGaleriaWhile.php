<?php while($filaReserva): ?>

<?php 
	$img = "/img/default/nodisponible.jpg";

	if($dir = @scandir($_SERVER["DOCUMENT_ROOT"] . "/img/galeria/" . $filaReserva["idHab"])){
		if(isset($dir[3])){
			$img = "/img/galeria/" . $filaReserva["idHab"] . "/" . $dir[3];
		}
	}
?>

<div class="col-sm-6">
	<div class="panel panel-default">
		<div class="panel-heading"><h4><?php echo strtoupper($filaReserva["tipoHab"]); ?></h4></div>
		<div class="panel-body">
			<img src="<?php echo $img; ?>" alt='Habitación <?php echo $filaReserva["tipoHab"]; ?>' class="img-responsive img-rounded">

		</div>
		<button class="btn btn-primary btn-block reservar" id="<?php echo $filaReserva["idHab"]; ?>">RESERVAR</button>
	</div>
</div>

<?php $filaReserva = ReservaDAO::fetchReserva($filasReserva); ?>
<?php endwhile; ?>
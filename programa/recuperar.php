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

		<main id="main" class="text-center">
		    <div class="row">
		        <div class="col-xs-12 col-sm-12 col-md-12">
		    		<form role="form" action="programa/verificarEmail.php" method="POST">
		    			<div class="col-md-9">
		    				<h2>Resetear contraseña</h2>
		    				<p>Introduzca la dirección de correo y recibirá un link para cambiar la contraseña.</p>	
		    			</div>

		    			<div class="form-group col-md-9">
		    				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Dirección de correo" tabindex="4">
		    			</div>
		    			<div class="row">
		    				<div class="col-xs-12 col-md-3"><button type="submit" class="btn btn-success btn-block btn-lg">Recuperar</button></div>
		    			</div>
		    		</form>
		    	</div>
		    </div>
		</main>

		<!-- Zona del pie -->

		<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/footer.php");?>
	</div>
</body>
</html>
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
		
				<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/fetchGaleria.php"); ?>
		</main>
			
		<!-- Zona del aside -->

		<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/aside.php");?>

		<!-- Zona del pie -->

		<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/footer.php");?>
	</div>
</body>
</html>
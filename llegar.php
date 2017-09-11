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

		<main id="main" class="col-sm-9 jumbotron">

			<!-- Mapa de google -->

			<div class="col">
			    <div class="col-sm-12 google-maps img-rounded">
		            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3034.53803203592!2d-3.6906738847022154!3d40.485484079357136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422965e5ee301d%3A0xcb69d121fea0e505!2sCalle+de+San+Dacio%2C+28034+Madrid%2C+Espa%C3%B1a!5e0!3m2!1ses!2sde!4v1495571603876" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		        </div>
			</div>

			<!-- Mapa de google -->

			<div class="col">
			    <div class="col-sm-12 img-rounded text-center">
		            <h1>¿CÓMO LLEGAR?</h1>

		            <h2>Nos encontramos en el paseo de San Ignacio al lado del metro Begoña y cercanos al cercanías Ramón y Cajal</h2>
		            
					<h2><b>HORARIO DE INVIERNO:</b> <br>De 08.00-19.00 <br><br><b>HORARIO DE VERANO:</b> <br>De 08.00 - 21.00 <br><br><b>TELÉFONO:</b><br><a href="tel:+34622016587">622 016 587</a></h2>
		        </div>
			</div>
		</main>

		<!-- Zona del aside -->

		<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/aside.php");?>

		<!-- Zona del pie -->

		<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/footer.php");?>
	</div>
</body>
</html>
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
			<div id="carousel-example-generic" class="carousel slide col-sm-12" data-ride="carousel">
				<div class="row">
					<!-- Indicadores -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
					
					<!-- Wrapper para las imágenes -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="./img/slider/recepcion.jpg" alt="Recepción">
							<div class="carousel-caption">
								<h3>¡EL MEJOR SITIO PARA ALOJARSE EN VACACIONES!</h3>
							</div>
						</div>
						<div class="item">
							<img src="./img/slider/restaurante.jpg" alt="Restaurante">
							<div class="carousel-caption">
								<h3>SERVICIO DE RESTAURANTE CON ALTA CALIDAD</h3>
							</div>
						</div>
						<div class="item">
							<img src="./img/slider/lavanderia.jpg" alt="Lavandería">
							<div class="carousel-caption">
								<h3>LAVANDERÍA Y TINTORERÍA A TU SERVICIO</h3>
							</div>
						</div>
					</div>

					<!-- Controles -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>				
				</div>
			</div> 
			<!-- Frase destacada -->

			<div class="row">
			    <div class="col-sm-12">
		            <blockquote class="quote-card blue-card">
		              <h3>UN SITIO ESPECTACULAR AL ALCANCE DE TODOS LOS BOLSILLOS</h3>
		        
		             <cite>
		              RoyalHostel.es
		            </cite>
		          </blockquote>
		        </div>
			</div>

			<!-- Habitación individual -->

			<div class="row">
				<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/fetchGaleriaInicio.php"); ?>
		    </div>
		</main>

		<!-- Zona del aside -->

		<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/aside.php");?>

		<!-- Zona del pie -->

		<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/footer.php");?>
	</div>
</body>
</html>
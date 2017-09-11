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

			<!-- Gerencia -->

			<div class="col">
			    <div class="container col-sm-4">
		            <div class="panel panel-default">
		            	<div class="panel-heading"><h4>GERENCIA</h4></div>
		            	<div class="panel-body">
		            		<img src="img/personal/gerencia.jpg" alt="Gerencia" class="img-responsive img-rounded">
		            	</div>
		            	<div class="panel-footer">
		            		<h5>JOHN DOE</h5>
		            	</div>
		            </div>
		        </div>
			</div>

			<!-- Administrador -->

			<div class="col">
			    <div class="container col-sm-4">
		            <div class="panel panel-default">
		            	<div class="panel-heading"><h4>ADMINISTRACIÓN</h4></div>
		            	<div class="panel-body">
		            		<img src="img/personal/administracion.jpg" alt="Administración" class="img-responsive img-rounded">
		            	</div>
		            	<div class="panel-footer">
		            		<h5>MARKUS QWERTY</h5>
		            	</div>
		            </div>
		        </div>
			</div>

			<!-- Recepción -->

			<div class="col">
			    <div class="container col-sm-4">
		            <div class="panel panel-default">
		            	<div class="panel-heading"><h4>RECEPCIÓN</h4></div>
		            	<div class="panel-body">
		            		<img src="img/personal/recepcion.jpg" alt="Recepcionista" class="img-responsive img-rounded">
		            	</div>
		            	<div class="panel-footer">
		            		<h5>ADARA FUGIT</h5>
		            	</div>
		            </div>
		        </div>
			</div>

			<!-- Frase destacada -->

			<div class="row">
			    <div class="container col-sm-12">
		            <blockquote class="quote-card blue-card">
		            	<h3>NOSOTROS</h3>
		              	<p>Nuestra máxima es la satisfacción del cliente, para ello
						disponemos de todo tpo de instalaciones en nuestro hostel.
						Desde WI-FI de alta velocidad, hasta servicio de comida
						directo a la habitaciones.</p>

						<p>Ofrecemos dormitorios compartdos con y sin baño de 3 a
						5 camas, y excelentes habitaciones privadas (individuales y
						dobles) por si preferes algo más de tranquilidad.</p>
		             	<cite>
		             		<b>¡Te esperamos!</b>
		            	</cite>
		          </blockquote>
		        </div>
			</div>

			<!-- Cocina -->

			<div class="col">
			    <div class="container col-sm-4">
		            <div class="panel panel-default">
		            	<div class="panel-heading"><h4>COCINA</h4></div>
		            	<div class="panel-body">
		            		<img src="img/personal/cocina.jpg" alt="Cocina" class="img-responsive img-rounded">
		            	</div>
		            	<div class="panel-footer">
		            		<h5>PAOLO RAVIOLLI</h5>
		            	</div>
		            </div>
		        </div>
			</div>

			<!-- Restaurante -->

			<div class="col">
			    <div class="container col-sm-4">
		            <div class="panel panel-default">
		            	<div class="panel-heading"><h4>RESTAURANTE</h4></div>
		            	<div class="panel-body">
		            		<img src="img/personal/restaurante.jpg" alt="Restaurante" class="img-responsive img-rounded">
		            	</div>
		            	<div class="panel-footer">
		            		<h5>JACK DANIEL'S</h5>
		            	</div>
		            </div>
		        </div>
			</div>

			<!-- Limpieza -->

			<div class="col">
			    <div class="container col-sm-4">
		            <div class="panel panel-default">
		            	<div class="panel-heading"><h4>LIMPIEZA</h4></div>
		            	<div class="panel-body">
		            		<img src="img/personal/limpieza.jpg" alt="Limpieza" class="img-responsive img-rounded">
		            	</div>
		            	<div class="panel-footer">
		            		<h5>ROBERTO BLEACH</h5>
		            	</div>
		            </div>
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
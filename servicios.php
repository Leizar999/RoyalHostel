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

			<!-- Servicio de comidas -->

			<div class="col">
			    <div class="container col-sm-12">
		            <div class="panel panel-default">
		            	<div class="panel-body">
		            		<div style="background-color: #2AA9E0; height: 34rem; margin-right: 0" class="container col-sm-2 img-rounded">
		            			<h4><b>COMIDAS</b></h4>
		            			<h4>Proporcionamos una gran oferta de desayunos, comidas y cenas para nuestros clientes, todo ello y mucho más lo encontrarás en la zona restaurante</h4>
		            		</div>
							<div class="container col-sm-10">
								<img src="img/servicios/comidas.jpg" alt="Servicio de comida" class="img-responsive img-rounded">
							</div>
		            	</div>
		            </div>
		        </div>
			</div>

			<!-- Servicio de restaurante -->

			<div class="col">
			    <div class="container col-sm-12">
		            <div class="panel panel-default">
		            	<div class="panel-body">
							<div class="container col-sm-10">
								<img src="img/servicios/restaurante.jpg" alt="Servicio de restaurante" class="img-responsive img-rounded">
							</div>
							<div style="background-color: #2AA9E0; height: 34rem; margin-right: 0" class="container col-sm-2 img-rounded">
		            			<h4><b>RESTAURANTE</b></h4>
		            			<h4>Ofrecemos servicio de restaurante, al contratar se obtendrá acceso ilimitado a dicha zona, con consumiciones incluídas.</h4>
		            		</div>
		            	</div>
		            </div>
		        </div>
			</div>

			<!-- Servicio de lavandería -->

			<div class="col">
			    <div class="container col-sm-12">
		            <div class="panel panel-default">
		            	<div class="panel-body">
		            		<div style="background-color: #2AA9E0; height: 34rem; margin-right: 0" class="container col-sm-2 img-rounded">
		            			<h4><b>LAVANDERÍA</b></h4>
		            			<h4>Con nuestro servicio de lavandería podrás lavar tu ropa si estás mucho tempo con nostros, y la recibirás también planchada.</h4>
		            		</div>
							<div class="container col-sm-10">
								<img src="img/servicios/lavanderia.jpg" alt="Servicio de lavandería" class="img-responsive img-rounded">
							</div>
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
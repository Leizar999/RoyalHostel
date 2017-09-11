<?php session_start(); ?>

<html>
    <head>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/templates/head.php" ?>
    </head>

    <body>
		<table id="tabla-resumen" class="table table-striped table-bordered table-list">
		  	<thead>
		    <tr>
		    	<th style="background-color: grey;color:white;">NOMBRE: <?php echo $_SESSION["nombre"]; ?></th>
		    	<th style="background-color: grey;color:white;">APELLIDOS: <?php echo $_SESSION["apellidos"]; ?></th>
		    	<th style="background-color: grey;color:white;">DNI: <?php echo $_SESSION["dni"]; ?></th>
		    	<th style="background-color: grey;color:white;">EMAIL: <?php echo $_SESSION["email"]; ?></th>
		    	<th style="background-color: grey;color:white;">TELÉFONO: <?php echo $_SESSION["telefono"]; ?></th>

		    </tr>
		    <tr>
		        <th>TIPO DE HABITACIÓN</th>
		        <th>LLEGADA</th>
		        <th>SALIDA</th>
		        <th>SERVICIO</th>
		        <th>PRECIO TOTAL</th>
		    </tr> 
			</thead>
			<tbody>
				<?php
					date_default_timezone_set("Europe/Madrid");
					$fechaActual = date("d-m-Y H:i:s");

					echo "<tr>";
					echo "<td>" . $_SESSION["tipo"] . "</td>";
					echo "<td>" . $_SESSION["llegada"] . "</td>";
					echo "<td>" . $_SESSION["salida"] . "</td>";
					echo "<td>" . $_SESSION["servicio"] . "</td>";
					echo "<td>" . $_SESSION["total"] . "</td>";
					echo "</tr>";
				?>
				<tr>
					<td style="font-family: courier; text-align: center; font-weight: bold;" colspan="5">FECHA: <?php echo $fechaActual; ?></td>
				</tr>
			</tbody>
		</table>
		<div style="text-align: center; font-weight: bold; width: 60rem;" class="center-block alert alert-info alert-dismissable fade in">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <h4 id="timer"></h4>
		</div>
		<script src="/js/creationpdf.js"></script>

	<?php
		$_SESSION["exito"] = "LA RESERVA SE HA REALIZADO CORRECTAMENTE!";
	?>
</body>
</html>
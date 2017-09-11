<!DOCTYPE html>
<html lang="es">
<head>
	<title>El mejor hotel de Europa | Royal Hostel</title>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/head.php");?>
</head>

<body>
	<main>
		<form action="/programa/crearServicio.php" method="POST" enctype="multipart/form-data">
			<div class="row form-group">
				<div class="col-sm-1">
					<label for="tipo">Tipo</label>
				</div>

				<div class="col-sm-11">
					<select class="form-control" name="tipo" id="tiposervicio">
						<option value="restaurante">RESTAURANTE</option>
						<option value="lavanderia">LAVANDERÍA</option>
						<option value="comida">COMIDA</option>
					</select>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-1">
					<label for="descripcion">Descripción</label>
				</div>
				<div class="col-sm-11">
					<textarea class="form-control editor" name="descripcion" id="descripcionhabitacion" required></textarea>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-1">
					<label for="precio">Precio</label>
				</div>

				<div class="col-sm-11">
					<input class="form-control" type="number" name="precio" id="preciohabitacion" min="20" max="2000" required>
				</div>
			</div>

			<div class="row form-group col-sm-12 text-center">
				<button type="submit" class="btn btn-primary btn-lg">INSERTAR SERVICIO</button>
			</div>
		</form>
	</main>
</body>
</html>
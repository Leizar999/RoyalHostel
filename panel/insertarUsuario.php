<!DOCTYPE html>
<html lang="es">
<head>
	<title>El mejor hotel de Europa | Royal Hostel</title>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/head.php");?>
</head>
<body>
	<div class="container-fluid">
		<main>
			<form action="/programa/crearUsuario.php" method="post">
				<div class="row form-group">
					<div class="col-sm-1">
						<label for="usuario">Usuario</label>
					</div>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="login" id="usuario" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-1">
						<label for="pass">Contraseña</label>
					</div>
					<div class="col-sm-11">
						<input class="form-control" type="password" name="pass" id="pass" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-1">
						<label for="correo">Correo</label>
					</div>
					<div class="col-sm-11">
						<input class="form-control" type="email" name="correo" id="correo" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-1">
						<label for="nombre">Nombre</label>
					</div>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="nombre" id="nombre" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-1">
						<label for="apellidos">Apellidos</label>
					</div>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="apellidos" id="apellidos" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-1">
						<label for="dni">DNI</label>
					</div>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="dni" id="dni" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-1">
						<label for="telefono">Teléfono</label>
					</div>
					<div class="col-sm-11">
						<input class="form-control" type="number" name="telefono" id="telefono" min="0" maxlength="9" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-1">
						<label for="direccion">Dirección</label>
					</div>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="direccion" id="direccion" required>
					</div>
				</div>
				<div class="row form-group col-sm-12 text-center">
					<button type="submit" class="btn btn-primary btn-lg">CREAR CUENTA</button>
				</div>
			</form>
		</main>
	</div>
</body>
</html>
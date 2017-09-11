<?php 

	session_start();

	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/usuario.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/usuariodao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorUsuario.php");

	$filas = UsuarioDAO::getUsuario($_SESSION["login"]);
?>

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

		<main id="main">
			<div class="row">

				<!-- Zona del aside -->

					<div class="wrapper col-sm-12">
						<div class="sidebar-wrapper">
							<div id="formulario-aside" class="panel panel-primary">
							    <div class="panel-heading text-center"><h1><?php echo $filas->getLogin(); ?></h1></div>
							    <div class="panel-body">
									<form action="" method="post" id="formulario-resumen">
										<div class="row form-group text-center">
											
											<div class="col-sm-12">
												<div class="row form-group">
													<div class="col-sm-1">
														<label for="login">USUARIO</label>
													</div>

													<div class="col-sm-12">
														<input type="text" class="form-control" id="login" value="<?php echo $filas->getLogin(); ?>" disabled>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-1">
														<label for="pass">CONTRASEÑA</label>
													</div>
													<div class="col-sm-12">
														<input class="form-control" type="text" value="<?php echo $filas->getPass(); ?>" name="pass" disabled>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-1">
														<label for="email">CORREO</label>
													</div>
													<div class="col-sm-12">
														<input class="form-control" type="text" value="<?php echo $filas->getCorreo(); ?>" name="email" disabled>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-1">
														<label for="dni">DNI</label>
													</div>
													<div class="col-sm-12">
														<input class="form-control" type="text" name="dni" value="<?php echo $filas->getDni(); ?>" disabled>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-1">
														<label for="nombre">NOMBRE</label>
													</div>
													<div class="col-sm-12">
														<input class="form-control" type="text" name="nombre" value="<?php echo $filas->getNombre(); ?>" disabled>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-1">
														<label for="apellidos">APELLIDOS</label>
													</div>
													<div class="col-sm-12">
														<input class="form-control" type="text" name="apellidos" value="<?php echo $filas->getApellidos(); ?>" disabled>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-1">
														<label for="direccion">DIRECCIÓN</label>
													</div>
													<div class="col-sm-12">
														<input class="form-control" type="text" name="direccion" value="<?php echo $filas->getDireccion(); ?>" disabled>
													</div>
												</div>
											<button class="btn btn-primary" id="editar-perfil">EDITAR PERFIL</button>
											</div>
										</div>
									</form>
							    </div>
							</div>
						</div>
					</div>
			</div>
			
		</main>

		<!-- Zona del pie -->

		<?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/footer.php");?>
	</div>
</body>
</html>
<header class="jumbotron">
	<div class="container">
		<div class="col-md-10">
			<a href="/index.php" style="text-decoration: none;"><h1 id="titulo">ROYAL HOSTEL</h1></a>
		</div>

		<div id="social" class="col-md-2">
			<a href="https://www.facebook.com/profile.php?id=100017510495153"><img src="/img/social/facebook.png" alt="Facebook"></a>
			<a href="https://twitter.com/royalhostelesp"><img src="/img/social/twitter.png" alt="Twitter"></a>
			<a href="https://www.instagram.com/royalhostelesp/"><img src="/img/social/instagram.png" alt="Instagram"></a>

			<div class="row">
				<?php if(isset($_SESSION['login'])): ?>
					<a class="login" href="/vista/perfilUsuario.php" style="text-decoration:none"><?php echo $_SESSION['login'] . "<br>"; ?></a>
				  	<a class="login" href="/programa/logout.php" style="text-decoration:none">Logout</a>
				<?php else: ?>
					<a href="#" class="login" id="link-login" data-toggle="modal" data-target="#login-modal" style="text-decoration: none;">Login</a>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="loginmodal-container">
				<h1>Iniciar sesión</h1><br>
				<form action="/programa/access.php" method="post">
					<input type="text" name="login" placeholder="Nombre de usuario">
					<input type="password" name="pass" placeholder="Contraseña">
					<input type="submit" class="login loginmodal-submit" value="Login">
				</form>
				
				<div class="login-help">
					<a href="/programa/insertarUsuario.php">Registrarse</a> - <a href="programa/recuperar.php">Contraseña olvidada</a>
				</div>
			</div>
		</div>
	</div>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/vista/errores.php");?>
</header>

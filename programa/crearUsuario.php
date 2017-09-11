<?php
	session_start();

	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/usuario.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/usuariodao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorUsuario.php");

	if(isset($_POST["login"], $_POST["pass"], $_POST["correo"], $_POST["nombre"], $_POST["apellidos"], $_POST["dni"], $_POST["telefono"], $_POST["direccion"])){
		$bbdd = BD::getInstancia();
		$bbdd->establecerUTF8();
		$login = $bbdd->sanear($_POST["login"]);
		$pass = $bbdd->sanear($_POST["pass"]);
		$correo = $bbdd->sanear($_POST["correo"]);
		$nombre = $bbdd->sanear($_POST["nombre"]);
		$apellidos = $bbdd->sanear($_POST["apellidos"]);
		$dni = $bbdd->sanear($_POST["dni"]);
		$telefono = $bbdd->sanear($_POST["telefono"]);
		$direccion = $bbdd->sanear($_POST["direccion"]);

		if($login != "" && 
			$pass != "" && 
			$correo != "" && 
			$nombre != "" && 
			$apellidos != "" && 
			$dni != "" && 
			$telefono != "" && 
			$direccion != ""){

			$usuario = new Usuario();
			$controladorUsuario = new controladorUsuario($usuario);
			$controladorUsuario->leerDatosCompletos($login, $pass, $correo, $nombre, $apellidos, $dni, $telefono, $direccion);

			$usuarioDAO = new usuarioDAO($usuario);

			$comprobarMail = $usuarioDAO->checkEmail($correo);
			$comprobarUsuario = $usuarioDAO::getUsuario($login);
			
			if($comprobarMail[0] == true){
				$_SESSION["errores"][] = "EL CORREO: " . $correo . " \rYA EXISTE!";
				header("location: " . $_SERVER['HTTP_REFERER']);
			} elseif($comprobarUsuario->getLogin() == $login) {
				$_SESSION["errores"][] = "EL USUARIO: " . $login . " \rYA EXISTE!";
				header("location: " . $_SERVER['HTTP_REFERER']);
			} else {
				$usuarioDAO->insertarUsuario();
				$_SESSION["exito"] = "CUENTA CORRECTAMENTE CREADA: " . strtoupper($usuario->getLogin());

				include($_SERVER["DOCUMENT_ROOT"] . "/lib/mailsystem/bienvenidaUsuario.php");
				header("Location:../");
			}

		}else {
			$_SESSION["errores"][] = "DEBE RELLENAR TODOS LOS CAMPOS OBLIGATORIOS";
		}
	}
?>
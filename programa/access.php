<?php
	session_start();

	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/usuario.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/usuariodao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorUsuario.php");

	if(isset($_POST["login"], $_POST["pass"])){
		$bbdd = BD::getInstancia();
		$bbdd->establecerUTF8();
		$login = $bbdd->sanear($_POST["login"]);
		$pass = $bbdd->sanear($_POST["pass"]);

		$usuario = new Usuario();
		$controladorUsuario = new controladorUsuario($usuario);
		$controladorUsuario->leerDatosLogin($login, $pass);

		$usuarioDAO = new usuarioDAO($usuario);

		if($usuarioDAO->checkLogin()){
			$_SESSION["exito"] = "LOGIN CORRECTO! BIENVENIDO: \r" . strtoupper($usuario->getLogin());
			$_SESSION["login"] = $usuario->getLogin();
			$_SESSION["nombre"] = $usuario->getNombre();
			$_SESSION["apellidos"] = $usuario->getApellidos();
			$_SESSION["email"] = $usuario->getCorreo();
			$_SESSION["telefono"] = $usuario->getTelefono();
			//echo "dentro";
		}else{
			$_SESSION["errores"][] = "EL USUARIO Y CONTRASEÑA NO COINCIDEN!";
			//echo "fuera";
		}
	}
	header("location: " . $_SERVER['HTTP_REFERER']);
?>
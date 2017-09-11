<?php 
session_start();

include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/usuariodao.php");

	if(isset($_POST["email"])){
		$bbdd = BD::getInstancia();
		$bbdd->establecerUTF8();
		$email = $bbdd->sanear($_POST["email"]);
		$usuarioDAO = new usuarioDAO("");

		$valores = $usuarioDAO->checkEmail($email);

		if($valores[0]){
			$_SESSION["exito"] = "SE HA ENVIADO UN CORREO A: $email";
			include($_SERVER["DOCUMENT_ROOT"] . "/lib/mailsystem/recuperarPass.php");
			header("Location:../");
		}else{
			$_SESSION["errores"][] = "NO EXISTE NINGÚN CORREO CON EL NOMBRE DE: $email";
			header("location: " . $_SERVER['HTTP_REFERER']);
		}
	}
 ?>
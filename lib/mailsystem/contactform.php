<?php

session_start();

require $_SERVER["DOCUMENT_ROOT"] . '/lib/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->CharSet = "UTF-8";
//$mail->SMTPDebug = 3;                               	// Enable verbose debug output

$mail->isSMTP();                                      	// Configurar mailer para usar SMTP
$mail->Host = 'smtp.1and1.es';		  					// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               	// Activar autentificación SMTP
$mail->Username = 'contacto@royalhostel.es';          	// Usuario SMTP
$mail->Password = 'Maba1187';                         	// Contraseña SMTP
$mail->SMTPSecure = 'tls';                            	// Activar encriptación TLS, `ssl` también es aceptada
$mail->Port = 587;                                    	// Puerto para conectarse por TCP

$mail->setFrom('contacto@royalhostel.es', 'Contacto footer');
$mail->addAddress('juancarlos@royalhostel.es', 'Juan Carlos Paz Delgado');     		// Añadir destinatario
$mail->addAddress('juancarlospazdelgado@gmail.com', 'Juan Carlos Paz Delgado');     // Name is optional

$mail->addReplyTo('', 'Information');

//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Nombre es opcional
$mail->isHTML(true);

//Coger variables del formulario:

if(isset($_POST['nombre'], $_POST['email'], $_POST['comentario'])){
	$name = $_POST['nombre'];
	$email = $_POST['email'];
	$message = $_POST['comentario'];


	if(!trim($name) == "" || !trim($email) == "" || !trim($message) == ""){
		// Set email format to HTML

		$mail->Subject = 	'Formulario de contacto';
		$mail->Body    = 	"<style type='text/css'>
								.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;margin:0px auto;}
								.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;border-top-width:1px;border-bottom-width:1px;}
								.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;border-top-width:1px;border-bottom-width:1px;}
								.tg .tg-baqh{text-align:center;vertical-align:top}
								.tg .tg-j0tj{background-color:#D2E4FC;text-align:center;vertical-align:top}
								@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}</style>
								<div class='tg-wrap'>
								<table class='tg' style='undefined;table-layout: fixed; width: 971px'>
								<colgroup>
									<col style='width: 500px'>
									<col style='width: 500px'>
								</colgroup>
								  <tr>
								    <th class='tg-baqh'>NOMBRE</th>
								    <th class='tg-baqh'>EMAIL</th>
								  </tr>
								  <tr>
									<td align='center'>$name</td>
									<td align='center'>$email</td>
								  </tr>
								  <tr>
								    <td class='tg-j0tj' colspan='2'>MENSAJE<br></td>
								  </tr>
								  <tr>
								    <td class='tg-yw4l' colspan='2' align='center'>$message</td>
								  </tr>
								</table></div>
								<b><p>Esto es un mensaje autogenerado por el sistema de correo de royalhostel.es.</p></b><br>";
		$mail->AltBody = 'Esto es un mensaje autogenerado por el sistema de correo de royalhostel.es.';

		if(!$mail->send()) {
			$_SESSION["errores"][] = "DEBES RELLENAR TODOS LOS CAMPOS";
		} else {
			$_SESSION["exito"] = "MENSAJE ENVIADO, MUCHAS GRACIAS! ";
		}
	} else {
		$_SESSION["errores"][] = "DEBES RELLENAR TODOS LOS CAMPOS";
	}
} else {
	$_SESSION["errores"][] = "INTENTO DE HACKEO DETECTADO!";
}

header("location: " . $_SERVER['HTTP_REFERER']);

?>

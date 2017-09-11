<?php

session_start();

//echo "dentro del mailer";

require $_SERVER["DOCUMENT_ROOT"] . '/lib/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->CharSet = "UTF-8";
//$mail->SMTPDebug = 3;                               	// Enable verbose debug output

$mail->isSMTP();                                      	// Configurar mailer para usar SMTP
$mail->Host = 'smtp.1and1.es';		  					// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               	// Activar autentificación SMTP
$mail->Username = 'contacto@royalhostel.es';          	// usuario SMTP
$mail->Password = 'Maba1187';                         	// contraseña SMTP
$mail->SMTPSecure = 'tls';                            	// Activar encriptación TLS, `ssl` también es aceptada
$mail->Port = 587;                                    	// Puerto para conectarse por TCP

$mail->setFrom('contacto@royalhostel.es', 'Bienvenido a RoyalHostel.es');
$mail->addAddress($correo, $nombre);     				// Añadimos destinatario
$mail->addAddress('juancarlospazdelgado@gmail.com', 'Juan Carlos Paz Delgado');     // Nombre es opcional

$mail->addReplyTo('', 'Information');
//$mail->addCC('');
//$mail->addBCC('bcc@example.com');                    // Poner formato HTML al email

//$mail->addAttachment($_SERVER["DOCUMENT_ROOT"] . '/reservas/reserva.pdf');         // Añadir adjuntos
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Nombre es opcional
$mail->isHTML(true);  

$mail->Subject = 'Bienvenido a RoyalHostel.es';
$mail->Body    = 'Muchísimas gracias por registrarse en nuestra web, esperamos que todos los servicios sean de su agrado, para cualquier consulta puede enviarnos un mail a <a href="mailto:contacto@royalhostel.es">contacto@royalhostel.es</a>';
$mail->AltBody = 'Muchísimas gracias por registrarse en nuestra web, esperamos que todos los servicios sean de su agrado, para cualquier consulta puede enviarnos un mail a <a href="mailto:contacto@royalhostel.es">contacto@royalhostel.es</a>';

if(!$mail->send()) {
    echo 'El mensaje no ha podido ser enviado.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Mensaje enviado!';
}

//Reseteamos todos los valores de la sesión

$_SESSION["id"] = "";
$_SESSION["tipo"] = "";
$_SESSION["llegada"] = 	"";
$_SESSION["salida"] = "";
$_SESSION["adultos"] = "";
$_SESSION["children"] = "";
$_SESSION["servicio"] = "";
$_SESSION["total"] = "";

?>
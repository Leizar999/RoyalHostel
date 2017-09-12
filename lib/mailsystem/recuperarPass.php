<?php

session_start();

require $_SERVER["DOCUMENT_ROOT"] . '/lib/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->CharSet = "UTF-8";
//$mail->SMTPDebug = 3;                               	// Enable verbose debug output

$mail->isSMTP();                                      	// Configurar mailer para usar SMTP
$mail->Host = '';		  			                            // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               	// Activar autentificación SMTP
$mail->Username = '';          				                  // Usuario SMTP
$mail->Password = '';                         		      // Contraseña SMTP
$mail->SMTPSecure = 'tls';                            	// Activar encriptación TLS, `ssl` también es aceptada
$mail->Port = 587;                                    	// Puerto para conectarse por TCP

$mail->setFrom('', 'Contacto footer');
$mail->addAddress('', '');     				// Añadir destinatario
$mail->addAddress('', '');     				// Name is optional

$mail->addReplyTo('', 'Information');
//$mail->addCC('');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);

$mail->Subject = 	'Recuperar contraseña RoyalHostel.es';
$mail->Body    = 	'Tu login es: ' . $valores[1] . ' <br>La contraseña de tu cuenta es: ' . $valores[2] . '';
$mail->AltBody = 'Esto es un mensaje autogenerado por el sistema de correo de royalhostel.es.';
$mail->send();

header("location: " . $_SERVER['HTTP_REFERER']);
?>

<?php

session_start();

require $_SERVER["DOCUMENT_ROOT"] . '/lib/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->CharSet = "UTF-8";
//$mail->SMTPDebug = 3;                               	// Enable verbose debug output

$mail->isSMTP();                                      	// Set mailer to use SMTP
$mail->Host = 'smtp.1and1.es';		  					// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               	// Enable SMTP authentication
$mail->Username = 'contacto@royalhostel.es';          	// SMTP username
$mail->Password = 'Maba1187';                         	// SMTP password
$mail->SMTPSecure = 'tls';                            	// Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    	// TCP port to connect to

$mail->setFrom('admin@royalhostel.es', 'Recuperar contraseña');
$mail->addAddress($email, $email);   												// Add a recipient
$mail->addAddress('juancarlospazdelgado@gmail.com', 'Juan Carlos Paz Delgado');     // Name is optional

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

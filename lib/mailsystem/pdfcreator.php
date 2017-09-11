<?php

	echo "dentro del script";
	if(!empty($_POST['data'])){
		$data = base64_decode($_POST['data']);
	//print_r($data);
	file_put_contents($_SERVER["DOCUMENT_ROOT"] . "/reservas/reserva.pdf", $data );
	} else {
		echo "No Data Sent";
	}
	//exit();

	include $_SERVER["DOCUMENT_ROOT"] . '/lib/mailsystem/phpmailer.php';
?>
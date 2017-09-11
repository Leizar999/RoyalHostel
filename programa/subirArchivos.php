<?php

$id = HabitacionDAO::recogerUltimoId();

$idNuevo = (intval($id) + 1);

// Preparando variables para subir el archivo.

$dir = $_SERVER["DOCUMENT_ROOT"] . "/img/galeria/" . $idNuevo . "/"; //Directorio con último id.

// Cuando el directorio no está vacío:
function borrar_directorio($dir){

	mkdir($dir);

	if ($manejador = opendir($dir)){
	    while (false !== ($file = readdir($manejador))) {
	        if ($file != "." && $file != "..") {

				if(is_dir($dir.$file)){
					if(!@rmdir($dir . $file)){ // Si el directorio está vacío, lo borramos.
					
	                borrar_directorio($dir . $file .'/'); // Si hay archivos los borramos.
					}
				} else {
	               @unlink($dir . $file);
				}
	        }
	    }
	    closedir($manejador);

		@rmdir($dir);
	}
}

$remove_directory = borrar_directorio($dir);

mkdir($dir);

$destino = $dir;
$ruta = "/img/galeria/" . $idNuevo . basename($_FILES["foto"]["name"][0]);
$uploadOk = 1;
$total = count($_FILES['foto']['name']);
$permitido =  array('jpg', 'jpeg', 'png');

$count = 0; //Prevengo repetir nombres.

$similar = false; //Prevenir nombres con el mismo significado.

// Comprobar si es un archivo o es otra cosa.
for($i = 0; $i < $total; $i++){

$objetivo = $destino . basename($_FILES["foto"]["name"][$i]);
$tipoArchivo = pathinfo($objetivo,PATHINFO_EXTENSION);

	if(isset($_POST["submit"])) {
	    $check = filesize($_FILES["foto"]["tmp_name"][$i]);
	    if($check !== false) {
	        echo " File type:  - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	    	$_SESSION["errores"][] = "EL ARCHIVO NO ES UNA IMAGEN";
	        $uploadOk = 0;
	    }
	}

	// Comprobamos el tamaño que no sea superior a 1MB.
	if ($_FILES["foto"]["size"][$i] > 1000000) {
	   	$_SESSION["errores"][] = "EL ARCHIVO ES DEMASIADO GRANDE, MÁXIMO 1MB";
  		$uploadOk = 0;
	}
	// Permitir solo ciertos formatos
	if(!in_array($tipoArchivo,$permitido) && $count <= 1 && !$similar) {
		$_SESSION["errores"][] = "LO SENTIMOS SOLO PDF, DOC O DOCX SON PERMITIDOS";
	    $uploadOk = 0;
	    $count ++;
	    $similar = true;
	}
	// Comprobar si $uploadOK está a cero en errores.
	if ($uploadOk == 0 && $count <= 1 && !$similar) {
		$_SESSION["errores"][] = "LO SENTIMOS TU ARCHIVO NO HA SIDO SUBIDO";
  		$count ++;
  		$similar = true;

	// Si todo está bien, subimos el archivo.
	} else {
	    if (move_uploaded_file($_FILES["foto"]["tmp_name"][$i], $objetivo)) {
	        echo "El archivo " . basename( $_FILES["foto"]["name"][$i]) . " ha sido subido.";
	    } else {

			$_SESSION["errores"][] = "DEBE RELLENAR TODOS LOS CAMPOS OBLIGATORIOS";
	    }
	}
}

?>
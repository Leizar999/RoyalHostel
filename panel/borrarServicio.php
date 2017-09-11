<h1>SELECCIONA UN SERVICIO A BORRAR</h1>

<?php
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/servicio.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/serviciodao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorServicio.php");

	$filas = ServicioDAO::getServicios();

	echo "<select id='servicio' class='form-control'>";

	while($data = mysqli_fetch_row($filas)) {

	    echo "<option value='$data[0]'>$data[1]: $data[2] - PRECIO: $data[3]</option>";
	}
	echo "</select>";
?>

<br>
<div class="col-sm-12 text-center">
	<button class="btn btn-primary" id="borrar">ELIMINAR</button>
</div>

<script src="/js/admin.js"></script>

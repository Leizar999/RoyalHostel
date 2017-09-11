<h1>SELECCIONA UN USUARIO A BORRAR</h1>

<?php
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/usuario.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/usuariodao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorUsuario.php");

	$filas = UsuarioDAO::getUsuarios();

	echo "<select id='usuario' class='form-control'>";

	while($data = mysqli_fetch_row($filas)) {

	    echo "<option value='$data[0]'>$data[0]</option>";
	}
	echo "</select>";
?>

<br>
<div class="col-sm-12 text-center">
	<button class="btn btn-primary" id="borrar">ELIMINAR</button>
</div>

<script src="/js/admin.js"></script>

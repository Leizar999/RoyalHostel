<?php
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/usuario.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/usuariodao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorUsuario.php");

	$filas = UsuarioDAO::getUsuarios();

	echo "<table id='usuario' class='table table-striped table-bordered table-list'>
	<tr>
	<th class='text-center'>LOGIN</th>
	<th class='text-center'>PASS</th>
	<th class='text-center'>CORREO</th>
	<th class='text-center'>DNI</th>
	<th class='text-center'>NOMBRE</th>
	<th class='text-center'>APELLIDOS</th>
	<th class='text-center'>DIRECCION</th>
	<th class='text-center'>TELEFONO</th>";

	while($data = mysqli_fetch_row($filas)) {

	    echo "<tr>";
	    echo "<td class='text-center xedit'>$data[0]</td>";
	    echo "<td class='text-center xedit'>$data[1]</td>";
	    echo "<td class='text-center xedit'>$data[2]</td>";
	    echo "<td class='text-center xedit'>$data[3]</td>";
	    echo "<td class='text-center xedit'>$data[4]</td>";
	    echo "<td class='text-center xedit'>$data[5]</td>";
	    echo "<td class='text-center xedit'>$data[6]</td>";
	    echo "<td class='text-center xedit'>$data[7]</td>";
	    echo "</tr>";
	}
	echo "</table>";
?>

<script src="/js/admin.js"></script>

<?php
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/habitacion.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/habitaciondao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorHabitacion.php");

	$filas = HabitacionDAO::getHabitaciones();

	echo "<table id='habitacion' class='table table-striped table-bordered table-list'>
	<tr>
	<th class='text-center'>ID</th>
	<th class='text-center'>TIPO</th>
	<th class='text-center'>DESCRIPCION</th>
	<th class='text-center'>PRECIO</th>";

	while($data = mysqli_fetch_row($filas)) {

	    echo "<tr>";
	    echo "<td class='text-center xedit'>$data[0]</td>";
	    echo "<td class='text-center xedit'>$data[1]</td>";
	    echo "<td class='text-center xedit'>$data[2]</td>";
	    echo "<td class='text-center xedit'>$data[3]</td>";
	    echo "</tr>";
	}
	echo "</table>";
?>

<script src="/js/admin.js"></script>

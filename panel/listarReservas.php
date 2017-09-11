<?php
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/bd.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/modelo/reserva.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/dao/reservadao.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/controlador/controladorReserva.php");

	$filas = ReservaDAO::getReservas();

	echo "<table id='reserva' class='table table-striped table-bordered table-list'>
	<tr>
	<th class='text-center'>ID</th>
	<th class='text-center'>IDHAB</th>
	<th class='text-center'>TIPOHAB</th>
	<th class='text-center'>LOGIN</th>
	<th class='text-center'>LLEGADA</th>
	<th class='text-center'>SALIDA</th>
	<th class='text-center'>ADULTOS</th>
	<th class='text-center'>NIÑOS</th>
	<th class='text-center'>SERVICIO</th>
	<th class='text-center'>PAGO</th>";

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
	    echo "<td class='text-center xedit'>$data[8]</td>";
	    echo "<td class='text-center xedit'>$data[9]</td>";
	    echo "</tr>";
	}
	echo "</table>";
?>

<script src="/js/admin.js"></script>
<?php
/*
CREATOR: Juan Carlos Paz Delgado
MAIL: juancarlospazdelgado@gmail.com
*/

include("connect.php");

	$id = $_GET['id'];
	$mode = $_GET['mode'];

	echo $id . " ";
	echo $mode;

	if($mode == "dbeditor"){
		//mysqli_query($con, "DELETE FROM products WHERE id='$id'");
		echo ' DBEDITOR';
	} else {
		//mysqli_query($con, "DELETE FROM requirements WHERE id='$id'");
		echo ' REQUIREMENTS';
	}

	//unset($mode);
?>
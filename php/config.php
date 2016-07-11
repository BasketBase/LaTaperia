<?php
	$db_server="localhost";
	$db_name="lataperia";
	$db_user="root";
	$db_pass="";

	$con=mysqli_connect($db_server, $db_user, $db_pass, $db_name) or die("Error al conectar a la base de datos.");
?>
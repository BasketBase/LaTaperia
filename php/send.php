<?php
	$texto=$_POST["text"];

	echo mail("soporte@basketbaseweb.com", "La Taperia", $texto);
?>
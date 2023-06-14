<?php
		try {
		  $conexion = mysqli_connect("localhost","root","","hospital2");
		  mysqli_set_charset($conexion,"utf8");
		} catch (\Exception $e) {
		  echo "FALLO AL CONECTARSE A LA BASE DE DATOS";
		}
?>

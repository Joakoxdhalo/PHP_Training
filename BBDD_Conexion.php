<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BBDD Conection</title>
</head>
<body>
	<?php
		$db_host = "localhost";
		$db_nombre = "usuarios";
		$db_usuario = "root";
		$db_contra = "";
		$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
		$query = "select * from datospersonales";
		$resultados = mysqli_query($conexion, $query);
		$fila = mysqli_fetch_row($resultados);
		echo $fila[0] . " ";
		echo $fila[1] . " ";
		echo $fila[3] . " ";

	?>
</body>
</html>
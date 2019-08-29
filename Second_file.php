<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$nombre="Juan";
		$edad=18;
		print "Así concateno un string con una variable con un valor en PHP " . $edad;
		print "<br> Aunque también podríamos concatenar la variable al final del string, de esta forma $edad <br><i><u><b><center> y como vemos, se interpreta HTML en los prints</center></b></u></i>";
		print 'Comillas simples = escríbame tal cual: $edad <br>';
		echo "Esto lo admite echo :<br>";
		echo $nombre, $edad;
		MyFunction();
		// MySecondFunction();
		StaticValueIncrement();
		StaticValueIncrement();
		StaticValueIncrement();
		StaticValueIncrement();

	?>
	
	<?php
		function MyFunction(){
			global $nombre;
			echo "Declarando una variable global " . $nombre . "<br>";
			include ("Un_Archivo.php");
		}

		function StaticValueIncrement(){
			static $TheVar = 0;
			$TheVar++;
			echo $TheVar . "<br>";
		}

		// Al llamar "Un_Archivo.php" mediante require e include, instancio 2 veces la función que hay dentro y se genera error
		/*
		function MySecondFunction(){
			require ("Un_Archivo.php");
		}
		*/
	?>
</body>
</html>
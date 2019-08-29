<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$My_var = "Vieron, no se afectó";
		echo "<br> external print<br>";
		
		function try_to_change_var(){
			$My_var = "Esto no afecta la variable externa<br>";
			echo $My_var;
		}

		try_to_change_var();
		echo $My_var . "<br>";
	?>
</body>
</html>
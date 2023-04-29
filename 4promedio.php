<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
</head>
<body>
	<?php
	if(isset($_POST["nota1"]) && isset($_POST["nota2"]) && isset($_POST["nota3"])) {
		$nota1 = $_POST["nota1"];
		$nota2 = $_POST["nota2"];
		$nota3 = $_POST["nota3"];
		$promedio = ($nota1 + $nota2 + $nota3) / 3;
		echo "<h2>El promedio del alumno es: $promedio</h2>";
		if($promedio >= 13) {
			echo "<h3>El alumno está aprobado.</h3>";
		} else {
			echo "<h3>El alumno está reprobado.</h3>";
		}
	} else {
		echo "<h2>Error: todos los campos son obligatorios.</h2>";
	}
	?>
</body>
</html>

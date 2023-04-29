<!DOCTYPE html>
<html>
<head>
	<title>Resultados</title>
</head>
<body>
	<?php
	if(isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["numero3"]) && isset($_POST["numero4"])) {
		$num1 = $_POST["numero1"];
		$num2 = $_POST["numero2"];
		$num3 = $_POST["numero3"];
		$num4 = $_POST["numero4"];
		$suma = $num1 + $num2;
		$producto = $num3 * $num4;
		echo "<h2>Resultados:</h2>";
		echo "<p>La suma de los dos primeros números es: $suma</p>";
		echo "<p>El producto del tercer y cuarto número es: $producto</p>";
	} else {
		echo "<h2>Error: todos los campos son obligatorios.</h2>";
	}
	?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Resultados</title>
</head>
<body>
	<?php
	if(isset($_POST["numero1"]) && isset($_POST["numero2"])) {
		$num1 = $_POST["numero1"];
		$num2 = $_POST["numero2"];
		if($num2 != 0) {
			if($num1 > $num2) {
				$suma = $num1 + $num2;
				$diferencia = $num1 - $num2;
				echo "<h2>Resultados:</h2>";
				echo "<p>La suma de los dos números es: $suma</p>";
				echo "<p>La diferencia de los dos números es: $diferencia</p>";
			} else {
				$producto = $num1 * $num2;
				$division = $num1 / $num2;
				echo "<h2>Resultados:</h2>";
				echo "<p>El producto de los dos números es: $producto</p>";
				echo "<p>La división del primer número respecto al segundo es: $division</p>";
			}
		} else {
			echo "<h2>Error: el segundo número no puede ser cero.</h2>";
		}
	} else {
		echo "<h2>Error: todos los campos son obligatorios.</h2>";
	}
	?>
</body>
</html>

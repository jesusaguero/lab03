<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
</head>
<body>
	<?php
	if(isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["num3"])) {
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$num3 = $_POST["num3"];
		if($num1 > $num2 && $num1 > $num3) {
			echo "<h2>El número mayor es: $num1</h2>";
		} elseif($num2 > $num3) {
			echo "<h2>El número mayor es: $num2</h2>";
		} else {
			echo "<h2>El número mayor es: $num3</h2>";
		}
	} else {
		echo "<h2>Error: todos los campos son obligatorios.</h2>";
	}
	?>
</body>
</html>

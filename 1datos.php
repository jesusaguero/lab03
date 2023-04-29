<!DOCTYPE html>
<html>
<head>
	<title>Datos ingresados</title>
</head>
<body>
	<?php
	if(isset($_POST["nombre"]) && isset($_POST["email"])) {
		$nombre = $_POST["nombre"];
		$email = $_POST["email"];
		echo "<h2>Datos ingresados:</h2>";
		echo "<p>Nombre: $nombre</p>";
		echo "<p>Email: $email</p>";
	} else {
		echo "<h2>Error: todos los campos son obligatorios.</h2>";
	}
	?>
</body>
</html>

<?php

$servername = "localhost";
$database = "tlouprueba";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $databasename) or die("<h2>no se encuentra el servidor</h2>");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<form action="registrar.php" method="POST">
		
		<label>usuario</label>
		<input name="usuario" type="text" required>
		<label for="">contraseña</label>
		<input type="password" required>
		<input name="contraseña" type="submit" name="" id="">

	</form>
	
</body>
</html>
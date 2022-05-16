<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['nombre'];
	 $second_name = $_POST['apellidos'];
	 $email = $_POST['email'];
	 $password = $_POST['contraseña'];

	 
	 $sql = "INSERT INTO registro (nombre,apellidos,email,contraseña) 
	 VALUES ('$first_name','$second_name','$email','$password')";
	 if (mysqli_query($conn, $sql)) {
		echo "<script> window.location='registrado.html'</script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
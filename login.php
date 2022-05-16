<?php

include("database.php");

$email = $_POST['email'];
$contraseña = $_POST['password'];

if(isset ($_POST['login']))

{


   $query=mysqli_query ($conn, "SELECT * FROM registro WHERE email='$email' AND contraseña= '$contraseña'");
   $nr = mysqli_num_rows($query);

  if ($nr==1) {
        echo "<script>window.location='logeado.html' </script>";
    
  }
    else
      {
        echo "<script> window.location='nologeado.html'</script>";
      }


}


?>
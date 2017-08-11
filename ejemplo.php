<?php

require_once ('conexion.php')

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$telefono = $_POST['tel'];
$password = $_POST['password'];
 
$sql = "SELECT * FROM concat(T.fk_lada,T.telefono) as telefono, P.contrasena
from personal P, telefonos T
where P.fk_telefono = T.id_telefono"

$result = $conexion->query($sql);

echo $sql."<br>";

if ($result->num_rows > 0) {     
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);
 if ($password == $row['password']) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['tel'] = $telefono;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['telefono'];
    echo "<br><br><a href=menu.php>Panel de Control</a>"; 

 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='login.html'>Volver a Intentarlo</a>";
 }
 mysqli_close($conexion); 
 ?>

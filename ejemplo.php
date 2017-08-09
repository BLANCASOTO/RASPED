<?php
$conexion = new mysqli($server, $user, $pass, $db;

if ($conexion->connect_error) {

 die("La conexion no fue exitosa: " . $conexion->connect_error);
}

$tel = $_POST['tel'];
$password = $_POST['password'];
$sql = "select P.id_personal, contac(t.fk_lada,T.telefono) as telefono, P.contrasena 
  from personal P, telefonos T
  where P.fk_telefono = T.id_telefono and"
  $telefono = concat(T.fk_lada_T.telefono) and
  $contrasena = P.contrasena;"
$result = $conexion->query($sql);
if ($result->num_rows > 0) {     
 }

 $row = $result->fetch_array(MYSQLI_ASSOC);
 if (password_verify($password, $row['password'])) { 

   $_SESSION['loggedin'] = true;
    $_SESSION['password'] = $contrasena;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
  echo "Bienvenido! " . $_SESSION['username'];

    echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 
 } else { 

   echo "Username o Password estan incorrectos.";
echo "<br><a href='menu.html'>Volver a Intentarlo</a
 }
 mysqli_close($conexion);
 ?>

?php
  //conexion
  $server = "bmsyhziszmhf61g1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306";
  $user = "jiwornjvhyvd1y91";
  $pass = "w8o8wmj01z4hw4pz";
  $bd = "wkwxn90mtdsft056";
?>

	<?php
	require_once ('conexion.php')

	$conexion = mysql_connect($server,$user,$pass,$bd);

if ($conexion->connect_error) {

 die("La conexion falló: " . $conexion->connect_error);

}

$telefono = $_REQUEST['tel'];
$contrasena = $_REQUEST['contrasena'];


	$password = md5($password);
	$query = 
"select P.id_personal, concat(T.fk_lada,T.telefono) as telefono, P.contrasena
from personal P, telefonos T
where P.fk_telefono = T.id_telefono and
telefono = concat(T.fk_lada,T.telefono) and
contrasena = P.contrasena";

$result = $conexion->query($sql);


if ($result->num_rows > 0) {     

 }
 $row = $result->fetch_array(MYSQLI_ASSOC);

 if (password_verify($password, $row['password'])) { 

  
   $_SESSION['loggedin'] = true;

    $_SESSION['username'] = $username;

    $_SESSION['start'] = time();

    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

 

    echo "Bienvenido! " . $_SESSION['username'];

    echo "<br><br><a href=menu.php>Panel de Control</a>"; 

} else { 

   echo "Username o Password estan incorrectos.";

 

   echo "<br><a href='login.html'>Volver a Intentarlo</a>";

 }

 mysqli_close($conexion);
46
 ?>

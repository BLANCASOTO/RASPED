<?php
require_once('conexion.php');

//creamos la conexion
$conexion = mysqli_connect($server,$user,$pass,$bd) or die("error conexion");

//solicitamos las variables
$telefono = $_REQUEST['tel'];
$pass = $_REQUEST['pass'];

//generamos la consulta
$contrasena = md5($contrasena);

$query = "select P.id_personal, concat(T.fk_lada,T.telefono) as telefono, P.contrasena
from personal P, telefonos T
where P.fk_telefono = T.id_telefono"
;
			
//formato de datos utf8 (espanol)
mysqli_set_charset($conexion,"utf8");

//ejecutar la consulta
if(!$result = mysqli_query($conexion, $query)){ 
	die();
}

//ciclo while para extraer los datos y almacenarlos en el arreglo
while($row = mysqli_fetch_array($result)){

		
//concentracion de registros por columna 
 
$telefono=$row['tel'];
$pass=$row['pass'];
	
if ($contrasena=$pass)}
	{
	else {h1<error de datos>
}	
header('Location:menu.php');		
		{}//while


//cierre de conexion
$close = mysqli_close($conexion) or die("error en desconexion");

//creacion e impresion del objeto JSON
$json = json_encode($arraydatos);
echo $json;

?>

<?php
require_once('conexion.php');

//creamos la conexion
$conexion = mysqli_connect($server,$user,$pass,$bd) or die("error conexion");

//solicitamos las variables
$nombre_personal = $_REQUEST['nombre'];
$contrasena = $_REQUEST['contrasena'];

//generamos la consulta
$contrasena = md5($contrasena);

$query =  "select n.nombre_usuario as nombre_usuario, P.contrasena
from personal P,
where id_personal = T.id_personal; = '$contrasena'";
			
//formato de datos utf8 (espanol)
mysqli_set_charset($conexion,"utf8");

//ejecutar la consulta
if(!$result = mysqli_query($conexion, $query)) die();



//creacion del array contenedor de registros
$arraydatos = array();

//ciclo while para extraer los datos y almacenarlos en el arreglo
while($row = mysqli_fetch_array($result)){

	
	
//concentracion de registros por columna 
 
$nombre_personal=$row['nombre'];
$contrasena=$row['contrasena'];
	
//poblacion del arreglo
$arraydatos[]=array('nombre'=>$nombre_personal,'contrasena'=>$contrasena);
		
}//while

//cierre de conexion
$close = mysqli_close($conexion) or die("error en desconexion");

//creacion e impresion del objeto JSON
$json = json_encode($arraydatos);
echo $json;

?>

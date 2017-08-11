<?php
require_once('conexion.php');

//creamos la conexion
$conexion = mysqli_connect($server,$user,$pass,$bd) or die("error conexion");

//solicitamos las variables
$telefono = $_REQUEST['tel'];
$contrasena = $_REQUEST['contrasena'];

//generamos la consulta
$contrasena = md5($contrasena);

$query = "select concat(T.fk_lada,T.telefono) as telefono, P.contrasena
from personal P, telefonos T

where P.fk_telefono = T.id_telefono";

//formato de datos utf8 (espanol)
mysqli_set_charset($conexion,"utf8");

//ejecutar la consulta
if(!$result = mysqli_query($conexion, $quey)) die();

//creacion del array contenedor de registros
$arraydatos = array();

//ciclo while para extraer los datos y almacenarlos en el arreglo
while($row = mysqli_fetch_array($result)){

//concentracion de registros por columna 
 
$telefono=$row['telefono'];
$contrasena=$row['contrasena'];

/*header("location:/menu.php"); */	
	
//poblacion del arreglo
$arraydatos[]=array('telefono'=>$telefono,'contrasena'=>$contrasena);

}//while

			

/*
 
//cierre de conexion
$close = mysqli_close($conexion) or die("error en desconexion");
*/
//creacion e impresion del objeto JSON
$json = json_encode($arraydatos);
echo $json;

?>

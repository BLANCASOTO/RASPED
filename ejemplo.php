<?php
	require_once ('conexion.php')

	$conexion = mysql_connect($server,$user,$pass,$bd);

	$tel = $_REQUEST['tel'];
	$password = $REQUEST['password'];

	$password = md5($password);
	

$sql2=mysql_query("
select P.id_personal, concat(T.fk_lada,T.telefono) as telefono, P.contrasena
from personal P, telefonos T
where P.fk_telefono = T.id_telefono;

if ($f2=mysql_fetch_array($sql2)){
	if($contrasena==$f2['password']){
	echo '<script>alert("Bienvenido administrador")</script>';
	echo "<script>"location.href= '/menu.php</scrip'>
	}







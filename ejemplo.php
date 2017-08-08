<?php
	require_once ('conexion.php')

	$conexion = mysql_connect($server,$user,$pass,$bd);

	$tel = $_REQUEST['tel'];
	$password = $REQUEST['password'];

	$password = md5($password);
	

$sql2=mysql_query("select * from personal where contrasena = $password");
if ($f2=mysql_fetch_array($sql2)){
	if($password==$f2['password']){
	echo '<script>alert("Bienvenido administrador")</script>';
	echo "<script>"location.href= '/menu.php</scrip'>
	}







	<?php
	require_once ('conexion.php')

	$conexion = mysql_connect($server,$user,$pass,$bd);
	$tel = $_REQUEST['tel'];
	$password = $REQUEST['password'];

	$password = md5($password);
	$query = 
	"select P.id_personal, contac(t.fk_lada,T.telefono) as telefono, P.contrasena 
	from personal P, telefonos T
	where P.fk_telefono = T.id_telefono and
	$telefono = concat(T.fk_lada_T.telefono) and
	$contrasena = P.contrasena;"
	$resul_query = mysql_query($conexion,$query);
	mysql_set_charset ($conexion,"utf8");

	$registro =  false;
	$arreglo = array();
	while (row=myqsl_fetch_array($resul_query))
		{
			$registro = true;
			header("location:/menu.php"); 
}
$close = mysql _close($conexion)
?> 

	

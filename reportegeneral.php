require_once ('conexion.php');
$q = "SELECT * FROM Tabla1 ORDER BY campo1 DESC";
$rs = mysql_query($q);
while ($row = mysql_fetch_array($rs)) {
		echo '<p>'.$row['campo1'].'</p>';
}
Desconectar($link);



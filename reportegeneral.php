require_once ('conexion.php');
$q = "SELECT * FROM personal ORDER BY nombre_personal DESC";
$rs = mysql_query($q);
while ($row = mysql_fetch_array($rs)) {
		echo '<p>'.$row['nombre_personal'].'</p>';
}
Desconectar($link);



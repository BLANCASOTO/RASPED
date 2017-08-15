<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: 	#00bc97;	
}
</style>

<CENTER>
<MARQUEE    WIDTH=40% BGCOLOR=#B2DFDB BEHAVIOR=alternate> <FONT FACE=arial COLOR=#9E9E9E SIZE=6> Reporte diario
</CENTER>
</MARQUEE> 

</head>
<body>
<MARQUEE BEHAVIOR=alternate>
<p style="text-align: left; "> <img src="https://image.ibb.co/jKFd9k/RASPED_BM_icono_Tarjetas.png " alt="imagen 3" width="25%">
</MARQUEE>
       <table>
  <tr>
    <th>Dia</th>
    <th>Nombre</th> 
    <th>Hora</th>
  </tr>
    </body>
    <?php
   require_once ('conexion.php');
      // conexión
   $conexion = mysqli_connect($server, $user, $pass,$bd) 
   or die("Error de conexion  de la base de datos");
   
   //consulta
   $sql = "select P.id_personal, concat(C.fk_sede,C.cupo) as cupo, R.id_retardos, P.nombre_personal, P.apellido_m, P.apellido_p,
   F.fecha, R.hr_entrada, R.hr_comida_i, R.hr_comida_f, R.hr_salida
   from personal P, retardos R, fechas F, cupos C
   where R.fk_personal = P.id_personal and
   R.fk_fecha = F.id_fecha and
   P.fk_cupo = C.id_cupo;";
   mysqli_set_charset($conexion, "utf8"); 
   
 	$result_query = mysqli_query($conexion, $sql)) die();  
   while($row = mysqli_fetch_array($result)) { 
      
      $Dia = $row['Dia'];
      $Nombre = $row['Nombre'];
      $Hora = $row['Hora'];
      
      echo"<tr>";
      echo "<tr>"$Dia</th>";
      echo"<tr>$Nombre</th>";
      echo "<tr>$Hora</th>";
      echo"</tr>"
          ?>
         </table>
   </html>

<?php
   
   require_once ('conexion.php');
   $result;
   
   // conexión
   $conexion = mysqli_connect($server, $user, $pass,$bd) 
   or die("error en la base de datos");
   
   //consulta
   $sql = "select P.id_personal, concat(C.fk_sede,C.cupo) as cupo, R.id_retardos, P.nombre_personal, P.apellido_m, P.apellido_p,
   F.fecha, R.hr_entrada, R.hr_comida_i, R.hr_comida_f, R.hr_salida
   from personal P, retardos R, fechas F, cupos C
   where R.fk_personal = P.id_personal and
   R.fk_fecha = F.id_fecha and
   P.fk_cupo = C.id_cupo;";

   $result = $conn->query($sql);
   $rows = $result->fetchAll();
<!--
   <!DOCTYPE html>
   <html lang="en">
    <head>

   <meta charset="utf-8"/>
   <title>Query data sending on ID</title>
</head>   
  
 <body>
      <table border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
      </tr>
    </thead>
    <tbody>
    <?php
      foreach ($rows as $row) {
    ?>
      <tr>
        <td><a href="menu.php?id=<?php echo $row['id_personal']; ?>"><?php echo $row['id_personal']; ?></a></td>
        <td><?php echo $row['dia']; ?></td>
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['hora']; ?></td>
      </tr>
    <?php } 
?>
    </tbody>
  </table>
</html>
-->




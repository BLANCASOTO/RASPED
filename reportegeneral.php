<?php
   
   require_once ('conexion.php');
   
   // conexión
   $conexion = mysqli_connect($server, $user, $pass,$bd) 
   or die("Ha sucedido un error en la conexion de la base de datos");
   
   //consulta
   $sql = "select P.id_personal, concat(C.fk_sede,C.cupo) as cupo, R.id_retardos, P.nombre_personal, P.apellido_m, P.apellido_p,
   F.fecha, R.hr_entrada, R.hr_comida_i, R.hr_comida_f, R.hr_salida
   from personal P, retardos R, fechas F, cupos C
   where R.fk_personal = P.id_personal and
   R.fk_fecha = F.id_fecha and
   P.fk_cupo = C.id_cupo;";
   mysqli_set_charset($conexion, "utf8"); 
   
   //ejecución de la consulta
   if(!$result = mysqli_query($conexion, $sql)) die();
   
   //se crea un array
   $reporte = array();
   
   //recoleccion de datos mediante un ciclo while(mientras haya registros)
   while($row = mysqli_fetch_array($result)) { 
       $id_personal=$row['id_personal'];
       $cupo=$row['cupo'];
       $id_retardos=$row['id_retardos'];
       $nombre_personal=$row['nombre_personal'];
       $apellido_m=$row['apellido_m'];
       $apellido_p=$row['apellido_p'];
       $fecha=$row['fecha'];
       $hr_entrada=$row['hr_entrada'];
       $hr_comida_i=$row['hr_comida_i'];
       $hr_comida_f=$row['hr_comida_f'];
       $hr_salida=$row['hr_salida'];
       $reporte[] = array('id_personal'=> $id_personal,'cupo'=>$cupo, 'id_retardos'=> $id_retardos, 'nombre_personal'=> $nombre_personal, 'apellido_m'=> $apellido_m, 'apellido_p'=> $apellido_p,
                           'fecha'=> $fecha, 'hr_entrada'=> $hr_entrada, 'hr_comida_i'=> $hr_comida_i, 'hr_comida_f'=> $hr_comida_f, 'hr_salida'=> $hr_salida,  );
   }
 ?>

<!DOCTYPE html>
<html>
<head>
<style>

body {
    background-color: 	#00bc97;	

}      
    table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
   
}
th, td {
    padding: 10px;
    text-align: center;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: #4DD0E1;
    color: white;
    ALIGN=center;
       
}

 
</head>
 </style>

<body>
 <CENTER>
<MARQUEE    WIDTH=40% BGCOLOR=#B2DFDB BEHAVIOR=alternate> <FONT FACE=arial COLOR=#9E9E9E SIZE=6> Reporte diario
</CENTER>
</MARQUEE> 

    </MARQUEE>
   

<table id="t01">
  <tr>
    <th>Dia</th>
    <th>Nombre</th> 
    <th>Hora</th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
     <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
     <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
     <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
     <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
     <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
     <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
     <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
    
     <MARQUEE BEHAVIOR=alternate>
<p style="text-align: left; "> <img src="https://image.ibb.co/jKFd9k/RASPED_BM_icono_Tarjetas.png " alt="imagen 3" width="25%">
</MARQUEE>
    </body>
    


 


 
</html>

<?php
   include("conexion.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $telefono = mysqli_real_escape_string($db,$_POST['tel']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT concat(T.fk_lada,T.telefono) as telefono, P.contrasena
from personal P, telefonos T
where P.fk_telefono = T.id_telefono
";

      
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("telefono");
         $_SESSION['login.php'] = $telefono;
         
         header("location: ingresar.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>









 ?>
\\

<!DOCTYPE html>
<html>
<h1 style="color:#E0E0E0;"> Anadir a un nuevo usuario </h1>
<head>
<style>
body {
    background-color:#006064;

	}

	

</style>
</head>
<body>
	
	
     <!-- Formulario Agregar Usuario -->
      <h4>Insertar Personal</h4>
            
      <form action="/content/insertar_personal.php" method="post">
      
        <!-- Primer fila -->
        <table class="table">
          <tr>
            <td><!-- Nombre Personal -->
              <input type="text" name="nombre_personal" id="nombre_personal" class="form-control" placeholder="Nombre" required>
            </td>
            <td><!-- Apellido Paterno -->
              <input type="text" name="apellido_p" id="apellido_p" class="form-control" placeholder="Apellido Paterno" required>
            </td>
            <td><!-- Apellido Materno -->
              <input type="text" name="apellido_m" id="apellido_m" class="form-control" placeholder="Apellido Materno" required>
            </td>
          </tr>
        </table>

        <!--Segunda fila -->
        <table class="table">
          <tr>
            <!-- <td>Contraseña 
              <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="contrasena" required>
            </td> -->
          </tr>
        </table>

        <!-- Tercera fila -->
        <table class="table">
          <tr>
            <td><!-- Lada -->
              <input type="number" min="1" max="999" name="lada" id="lada" class="form-control" placeholder="lada" required>
            </td>   
            <td><!-- Telefono -->
              <input type="number" min="1" max="99999999" name="telefono" id="telefono" class="form-control" placeholder="telefono" required>
            </td>    
            <td><!-- Sede -->
              <input type="number" min="1" max="99" name="sede" id="sede" class="form-control" placeholder="sede" required>
            </td>    
            <td><!-- Cupo -->
              <input type="number" min="1" max="999999" name="cupo" id="cupo" class="form-control" placeholder="cupo" required>
            </td>
          </tr>
        </table>

        <!-- Cuarta fila -->
        <table class="table">
          <tr>
            <td><!-- Tipos de Usuario -->
              <label for="sel1">tipo de usuario</label>
              <select class="form-control" id="sel1">

		      
		      <input type="Submit" name="enviar" value="Agregar integrante">
		      
                <?php
                //pedir datos de base de datos
                require_once ('conexion.php');
                //Creamos la conexión
                $conexion = mysqli_connect($server, $user, $pass,$bd) 
                or die("Ha sucedido un error inexperado en la conexion de la base de datos");
                //generamos la consulta
                $sql = "SELECT hr_nombre from horarios";
                //estándar de codificación Unicode Transformation 8 bits para compatibilidad ASCII
                mysqli_set_charset($conexion, "utf8");
                //arrojar error de consulta en caso de serlo asi
                if(!$result = mysqli_query($conexion, $sql)) die();
                //extraccion de registros mediante un ciclo while
                while($row = mysqli_fetch_array($result)){
                //extraccion y almacenamiento
                $horario = $row['hr_nombre'];
                //impresion de registro en formato html
                echo "<option>" . $horario . "</option>";
              }
              ?>

            </select>
          </td>
          <td><!-- Puestos-->
            <label for="sel1">Puesto</label>
            <select class="form-control" id="sel1">

              <?php
              //generamos la consulta
              $sql = "SELECT nombre_puesto from puestos";
              //arrojo de error al ejecutar del query o consulta en caso de serlo
              if(!$result = mysqli_query($conexion, $sql)) die();
              //extraccion de registros por un ciclo
              while($row = mysqli_fetch_array($result)){ 
              //amacenamiento de registro
              $puesto = $row['nombre_puesto'];
              //impresion de registro en formato html
              echo "<option>" . $puesto . "</option>";
            }
            //desconeccion de la base de datos
            $close = mysqli_close($conexion) or die('Error: '.mysqli_error());
            ?>

          </select>
        </td>
      </tr>
    </table>

    <!-- Quinta fila -->
    <table class="table">
      <tr align="center">
        <td>
		
          <button type="submit" class="btn btn-primary">Insertar</button>
        </td>
      </tr>
    </table>
  </form>	
		
	
<img src="https://image.ibb.co/h9rcNF/tarjetas.jpg" alt="Mountain View" style="float:right;width:30%;height:30%;"
<p style="text-align: float:left; "></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>

<!--sdfghjkl -->

button {
 border: none;
 background: #0092a7;
 color: #f2f2f2;
 padding: 10px;
 font-size: 18px;
 border-radius: 20px;
 position: relative;
 box-sizing: border-box;
 transition: all 500ms ease;
}

button:hover {
 background: rgba(0,0,0,0);
 color: #0092a6;
 box-shadow: inset 0 0 0 3px #0092a6;
}



.button {
  border-radius: 50%;
  background-color: #29B6F6;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 1s;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}




.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}



div.complete {
 border: none;
 height:100%;
 width:100%;
 background: #0092a6;
 color: #f2f2f2;
 padding: 10%;
 font-size: 18px;
 position: fixed;
 box-sizing: border-box;
 transition: all 500ms ease;
}


div.complete:before {
 content:'';
 position: fixed;
 top: 85%;
 left: 0px;
 width: 100%;
 height: 15%;
 background: rgba(255,255,255,0.3);
 transition: all 2s ease;
}

.circleBase {
    border-radius: 50%;
}

.log {
	margin-right:true;
	margin-left: auto;
	padding: 10%;
    width: 30%;
    height: 30%;
    background: #eceff1;
    color: #607d8b;
    border: 0px;
}

table, td {
    border: 0px;
    border-collapse: collapse;
}

</style>
</head>
<body>
<MARQUEE BEHAVIOR=alternate>

<FONT FACE=arial COLOR=black SIZE=8>
Esta pagina solo es para usuarios registrados
</MARQUEE> 
  <div class="complete">
  <img src="https://image.ibb.co/m80VqQ/user_darks.png" alt="Mountain View" style="float:left;width:250px;height:60%;">

  	<div class="circleBase log">
		
		
  		<form action ="ejemplo.php" method= "post"  align = "center">
  			<p>Nombre
  <input id = "nombre_personal" name = "nombre_personal" type="nombre" required>
		  </p>
		  <p>Contraseña
  <input id = "contrasena" name = "contrasena" type="password" required>
		  </p>
		  <p>&nbsp;</p>
		  <button class="button"><span>Ingresar </span></button>
            
	  </form>
    </div>
  </div>
</body>
</html>

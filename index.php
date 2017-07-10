<!DOCTYPE html>
<HTML leng="es">
  <head>
    <link href="contens/css/bootstrap.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ingresa</title>
  </head>
  <body background = "https://image.ibb.co/cRhdnv/rasped_con_nombre.jpg">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
    
    <!--no permite el zoom-->

ctx.beginPath();
               ctx.arc(75,75,50,0,Math.PI*2,true);
<canvas id="myCanvas" width="250" height="300"
style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.</canvas>

<p><button onclick="myCanvas()">Try it</button></p>

<script>
function myCanvas() {
    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    var img = document.getElementById("scream");
    ctx.drawImage(img,10,10);
}
   
    <img src="https://image.ibb.co/cRhdnv/rasped_con_nombre.jpg" class="img-responsive" alt="Imagen responsive">
    <p>
      ingresa a un nuevo usuario 
    </p>
  </body>
</HTML>

<!DOCTYPE html>
<HTML leng="es">
  <head>
    <link href="contens/css/bootstrap.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ingresa</title>
    <style>
      //css   
      #test {
        /* Este es un comentario en CSS */
           /*  width: 200px;
            height:200px;
            margin: 0px auto;
        */

        
        

body{

background: "https://image.ibb.co/eY4cLF/background.jpg" no-repeat center center fixed;
        
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
 
           
           
           
           
         }
      </style>
      <script type="text/javascript">
         function dibujaForma(){
            // Toma el elemento canvas usando el DOm
           
            var canvas = document.getElementById('mycanvas');
           lienzo.fillStyle="rgb(#26C6DA)";

            // Asegurate de no ejecutar  canvas en navegadores qe no lo soporten
            if (canvas.getContext){
               // usa getContext para empezar al dibujar en el canvas
               var ctx = canvas.getContext('2d');

               // Dibuja Formas
               ctx.beginPath();
               ctx.arc(200,75,50,0,Math.PI*2,true);  // Circulo exterior
              // lienzo.fillStyle="rgb(#2EC8D5)";
               lienzo.strokeStyle="rgb(0,0,255)";
              
               
               ctx.stroke();
            } else {
               alert('Necesitas Safari o Firefox 1.5+ para ver esta demo.');
            }
         }
      </script>
  </head>
  <!--
   /* <body id="test" onload="dibujaForma();" background = "https://image.ibb.co/eY4cLF/background.jpg">
    
      <canvas id="mycanvas"></canvas>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">  <!--no permite el zoom-->
  
  
<!-- imagen en la nube https://image.ibb.co/eY4cLF/background.jpg-->
  </body>
</HTML>


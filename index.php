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

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">  <!--no permite el zoom-->
   
     <style>
         #test {
            width: 100px;
            height:100px;
            margin: 0px auto;
         }
      </style>
      <script type="text/javascript">
         function dibujaForma(){
            // Toma el elemento canvas usando el DOM
            var canvas = document.getElementById('mycanvas');

            // Asegurate de no ejecutar el canvas en navegadores que no lo soporten
            if (canvas.getContext){
               // usa getContext para empezar al dibujar en el canvas
               var ctx = canvas.getContext('2d');

               // Dibuja Formas
               ctx.beginPath();
               ctx.arc(75,75,50,0,Math.PI*2,true);  // Circulo exterior
              
               
               ctx.stroke();
            } else {
               alert('Necesitas Safari o Firefox 1.5+ para ver esta demo.');
            }
         }
      </script>
  </body>
</HTML>

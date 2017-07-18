<!DOCTYPE HTML>
<html>
<head>

<script type="text/javascript">
function retornarLienzo(x) {
  var canvas = document.getElementById(x);
  if (canvas.getContext) {
    var lienzo = canvas.getContext("2d");   
    return lienzo;
  } else
    return false;
}

function dibujar() {
  var lienzo=retornarLienzo("lienzo1");
  if (lienzo) {
    lienzo.fillStyle="rgb(255,0,0)";
    lienzo.strokeStyle="rgb(0,0,255)";
    lienzo.lineWidth=5;
    lienzo.beginPath();
    lienzo.moveTo(150,10);
    lienzo.lineTo(10,290);
    lienzo.lineTo(290,290);
    lienzo.lineTo(150,10);
    lienzo.fill();
    lienzo.stroke();    
  }
}
  
             <div><div>¡Soy un círculo!
           
           .circulo {
     width: 100px;
     height: 100px;
     -moz-border-radius: 50%;
     -webkit-border-radius: 50%;
     border-radius: 50%;
     background: #5cb85c;
    
}
   </div></div>  
  
  
  
  
  
  
  
  
  
  
//intent
</script>

</head>
<body onLoad="dibujar()">
<canvas id="lienzo1" width="300" height="300">
Su navegador no permite utilizar canvas.
</canvas>
</body>
</html>

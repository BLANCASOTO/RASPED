<!DOCTYPE html>
<html>
<body>

<p>Image to use:</p>
<img id="RASPED" src="https://image.ibb.co/cRhdnv/rasped_con_nombre.jpg" alt="HJFCXGMJFXHM" width="220" height="277">

<p>Canvas to fill:</p>
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
</script>

</body>
</html>

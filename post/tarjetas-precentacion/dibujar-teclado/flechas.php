<?php
require '../tarjeta.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Farol herramientas</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Allerta' rel='stylesheet' type='text/css'><!--Esta etiqueta es para traer la tipografía allerta-->
    <link rel="stylesheet" href="cssflechas.css"/><!--Esta estiqueta está llamando a el css-->
  </head>
  <body class="bod">
  <div> <?php menu('../'); ?> </div>
      <nav class="menu"> <!-- menu -->
        <ul>
          <li>
            <a href="../pagina-libre.php">Home</a>
          </li><!--
          <li>
            <a href="#guitarras">Guitarras</a>
          </li>
          <li>
            <a href="dibujar-teclado/flechas.html">herramientas</a>
	  </li>-->
        </ul>
      </nav>
      <div class="body">
    <div class="cajita">
      <h1>Este es un lienzo de dibujo que se usa con las flechas</h1>
      <canvas class="lienzo" width="300" height="300" id="area_de_dibujo"></canvas>
      <p>Mueve las flechas del teclado para dibujar</p>
      <script src="eventos.js"></script>
    </div>
    <div class="cajita">
        <h2>Este es un cajero automatico</h2>
        <p>
          <img src="../images/cajero.gif" />
        </p>
        <p>
          <input type="number" id="dinero" />
          <input type="button" value="Extraer" id="extraer" />
        </p>
        <p id="resultado"></p>
        <script src="cajero.js">
        </script>      
    </div>
    </div>
  </body>
</html>



<?php 
require '../tarjeta.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cajero automatico</title>
  </head>
  <body>
  <div> <?php menu('../'); ?> </div>
    <p>
      <img src="cajero.gif" />
    </p>
    <p>
      <input type="number" id="dinero" />
      <input type="button" value="Extraer" id="extraer" />
    </p>
    <p id="resultado"></p>
    <script src="cajero.js">
    </script>
  </body>
</html>

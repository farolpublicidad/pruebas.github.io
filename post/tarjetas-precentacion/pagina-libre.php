<?php 
require 'tarjeta.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Invie - tus mejores guitarras!!</title><!--Este es el título que va en el tab-->
    <meta charset="utf-8"/><!--Estó indiqua cual es la tipográfía aceptada en este caso se acepta la ñ-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Allerta' rel='stylesheet' type='text/css'><!--Esta etiqueta es para traer la tipografía allerta-->
    <link rel="stylesheet" href="dibujar-teclado/invie.css"/><!--Esta estiqueta está llamando a el css-->
  </head>
  <body>
    <div>
      </div>
      <header id="header" class="header contenedor"> <!-- header -->
      <figure class="logotipo"> <!-- logotipo -->
      <img src="images/invie.png" width="186" height="60" alt="Invie logotipo"/>
    </figure>
    <nav class="menu"> <!-- menu -->
    <?php menu('') ;?>
        <!-- <ul>
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="#guitarras">Guitarras</a>
          </li>
          <li>
            <a href="dibujar-teclado/flechas.html">herramientas</a>
          </li>
        </ul> -->
      </nav>
    </header>
    <section id="portada" class="portada "> <!-- portada -->
      <div class="contenedor">
        <h1 class="titulo">Guitarras inviesibles</h1><!-- titulo -->
        <h3 class="title-a">Sé la estrella de rock que siempre quisiste ser</h3><!-- resumen -->
        <button>Conoce mas</button><!-- boton -->
      </div>
    </section>
    <section id="guitarras" class="guitarras contenedor"> <!-- guitarras -->
      <h2>Nuestra guitarras</h2><!-- titulo -->
      <article class="guitarra"> <!-- guitarra 1 -->
        <img class="derecha" src="images/invie-acustica.png" alt="Guitarra Invie Acustica" width="350"/>
        <div class="contenedor-guitarra-a">
          <h3 class="title-b">Invie Acustica</h3>
          <ol>
            <li>Estilo vintage</li>
            <li>Madera pura</li>
            <li>Incluye estuche invisible de aluminio</li>
          </ol>
        </div>
      </article>
      <article class="guitarra"> <!-- guitarra 2 -->
        <img class="izquierda" src="images/invie-classic.png" alt="Guitarra Invie Classic" width="350"/>
        <div class="contenedor-guitarra-b">
          <h3 class="title-b">Invie Classic</h3>
          <ol>
            <li>Estilo vintage</li>
            <li>Liviana</li>
            <li>Inicia tu camino como Rockstar</li>
          </ol>
        </div>
      </article>
    </section>
  </body>
</html>

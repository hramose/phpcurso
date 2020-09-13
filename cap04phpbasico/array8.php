<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Usando list()</title>
    </head>
    <body>
      <h1>Usando list()</h1>
      <?php
      $colores = [ "rojo", "verde", "amarillo" ];
      list( $color1 , $color2, $color3 ) = $colores;
      print_r( $colores );
      ?>
    </body>
</html>

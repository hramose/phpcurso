<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Argumentos variables</title>
    </head>
    <body>
        <h1>Argumentos variables</h1>
        <?php
        function concatena(...$palabras){
          $resultado = "";
          foreach($palabras as $palabra){
            $resultado .= $palabra." ";
          }
          return $resultado;
        }
        echo concatena( "Libro","de","PHP","y","MySQL");
        echo concatena( "Anaya","Multimedia");
        ?>
    </body>
</html>

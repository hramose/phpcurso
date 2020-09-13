<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Búsqueda en un array</title>
    </head>
    <body>
        <h1>Búsqueda en un array</h1>
        <?php
        $colores = array ( "rojo", "verde", "amarillo", "azul");
        if ( in_array ( "rojo", $colores ) ) {
          echo "Se ha encontrado el valor rojo";
        } else {
          echo "No se ha encontrado";
        }
        ?>
    </body>
</html>

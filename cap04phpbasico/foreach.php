<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>foreach</title>
    </head>
    <body>
        <h1>foreach</h1>
        <?php
        $ciudades = array( "Badajoz", "Mérida", "Cáceres", "Plasencia" );
        foreach ( $ciudades as $indice => $valor ) {
          echo "$indice:: El valor es $valor<br />";
        }
        ?>
    </body>
</html>

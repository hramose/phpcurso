<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Funciones con tipo definido</title>
    </head>
    <body>
        <h1>Funciones con tipo definido</h1>
        <?php
        function sumaEnteros(int $sumando1, int $sumando2): int{
          return $sumando1 + $sumando2;
        }
        echo "La suma de 3 y 4 es igual a: ".sumaEnteros(3,4);
        ?>
    </body>
</html>

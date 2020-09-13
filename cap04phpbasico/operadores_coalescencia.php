<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Operador de coalescencia nulo</title>
    </head>
    <body>
        <h1>Operador de coalescencia nulo</h1>
        <?php
          $nombreUsuario = $usuario ?? "anónimo";
          echo $nombreUsuario;
        ?>
    </body>
</html>

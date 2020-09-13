<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Constantes de tipo array</title>
    </head>
    <body>
        <h1>Constantes de tipo array</h1>
        <?php
        define('ANIMALES', [
          'perro',
          'gato',
          'pájaro'
        ]);
        echo ANIMALES[1]; // muestra "gato"
        ?>
    </body>
</html>

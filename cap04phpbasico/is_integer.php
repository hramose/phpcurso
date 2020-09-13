<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comprobar entero</title>
    </head>
    <body>
        <h1>Comprobar entero</h1>
        <?php
        $numero_entero = 0;
        if (is_integer($numero_entero)) {
            echo "numero_entero es del tipo integer";
        }
        ?>
    </body>
</html>

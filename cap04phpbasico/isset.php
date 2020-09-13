<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>isset() - unset()</title>
    </head>
    <body>
        <h1>isset() - unset()</h1>
        <?php
        $Nombre = "Francisco González";
        if (isset($Nombre)) {
            echo "¡El nombre existe!<br>";
        }
        //Podemos comprobar qué pasa si liberamos la variable $Nombre
        unset($Nombre);
        if (isset($Nombre)) {
            echo "¡El nombre existe!<br>";
        } else {
            echo "¡El nombre ya no existe!<br>";
        }
        ?>
    </body>
</html>

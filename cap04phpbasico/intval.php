<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Convertir a entero</title>
    </head>
    <body>
        <h1>Convertir a entero</h1>
        <?php
        //Conversión de un tipo string a un integer
        $cadena = "232";
        echo "El tipo de la variable cadena es " . gettype($cadena) . "<br>";
        $numero = intval($cadena);
        echo "el numero es $numero";
        ?>
    </body>
</html>

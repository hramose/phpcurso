<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Variables variables</title>
    </head>
    <body>
        <h1>Variables variables</h1>
        <?php
        $variable = "hola";
        $$variable = "mundo";
        //Las dos líneas siguientes producen la misma salida
        echo "$variable ${$variable}<br>";
        echo "$variable $hola<br>";
        ?>
    </body>
</html>

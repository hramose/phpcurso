<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Parámetros por defecto</title>
    </head>
    <body>
        <h1>Parámetros por defecto</h1>
        <?php
        function capitales($Pais, $Capital = "Madrid", $habitantes = "muchos") {
            return "La capital de $Pais es $Capital y tiene $habitantes habitantes.<br>";
        }
        echo capitales("España");
        echo capitales("Portugal", "Lisboa");
        echo capitales("Francia", "Paris", "muchísimos");
        ?>
    </body>
</html>

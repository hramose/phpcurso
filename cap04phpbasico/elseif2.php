<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>elseif</title>
    </head>
    <body>
        <h1>elseif</h1>
        <?php
        $dia = 4;
        if ($dia == 1) {
            echo "El día es Lunes";
        } elseif ($dia == 2) {
            echo "El día es Martes";
        } elseif ($dia == 3) {
            echo "El día es Miércoles";
        } elseif ($dia == 4) {
            echo "El día es Jueves";
        }
        ?>
    </body>
</html>

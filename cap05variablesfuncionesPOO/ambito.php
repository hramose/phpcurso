<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ámbito de las variables</title>
    </head>
    <body>
        <h1>Ámbito de las variables</h1>
        <?php
        $pi = 3.14;
        function valor_pi() {
            if (!isset($pi)) {
                $pi = pi();
            }
            return $pi;
        }
        echo valor_pi();
        ?>
    </body>
</html>

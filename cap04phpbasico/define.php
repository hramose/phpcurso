<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Constante definida?</title>
    </head>
    <body>
        <h1>Constante definida?</h1>
        <?php
        define("TITULO", "PHP y MySQL");
        if (defined("TITULO")) {
            echo "El título del libro es: " . TITULO;
        }
        ?>
    </body>
</html>

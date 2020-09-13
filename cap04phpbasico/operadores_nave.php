<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Operador nave espacial</title>
    </head>
    <body>
        <h1>Operador nave espacial</h1>
        <?php
        // Enteros
        echo "Enteros<br/>";
        echo 1 <=> 1; // 0
        echo "<br/>";
        echo 1 <=> 2; // -1
        echo "<br/>";
        echo 2 <=> 1; // 1
        echo "<br/><br/>";

        // Flotantes
        echo "Flotantes<br/>";
        echo 1.5 <=> 1.5; // 0
        echo "<br/>";
        echo 1.5 <=> 2.5; // -1
        echo "<br/>";
        echo 2.5 <=> 1.5; // 1
        echo "<br/><br/>";

        // Cadenas
        echo "Cadenas<br/>";
        echo "a" <=> "a"; // 0
        echo "<br/>";
        echo "a" <=> "b"; // -1
        echo "<br/>";
        echo "b" <=> "a"; // 1
        ?>
    </body>
</html>

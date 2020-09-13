<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Asignación con corchetes</title>
    </head>
    <body>
        <h1>Asignación con corchetes</h1>
        <?php
        $mi_array = [ 23, 45, 76, 23, 65 ];
        print_r($mi_array);
        echo "<br/><br/>";
        $mi_array = [ "cero" => 23, "uno" => 45, 2 => 76];
        print_r($mi_array);
        ?>
    </body>
</html>

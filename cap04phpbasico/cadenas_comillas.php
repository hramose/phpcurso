<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Cadenas de caracteres. Comillas</h1>
        <?php
        //Secuencias de escape
        $cadena1 = 'Aquí se pueden añadir comillas "dobles"<br>';
        $cadena2 = "Aquí se pueden añadir comillas 'simples'<br>";
        //$cadena3 = "Esta cadena da errores por las comillas "dobles"<br>";
        $cadena4 = "Esta cadena no da errores por las comillas \"dobles\"<br>";
        echo $cadena1;
        echo $cadena2;
        //echo $cadena3;
        echo $cadena4;
        ?>
    </body>
</html>

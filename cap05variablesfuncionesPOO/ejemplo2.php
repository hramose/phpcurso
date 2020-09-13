<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo de clases 2</title>
    </head>
    <body>
        <h1>Ejemplo de clases 2</h1>
        <?php
        require_once("clases2.php");
        $luisMiguel = new PersonaEspaña("Luis Miguel", "Cabezas", "Granado", "04510533A");
        $luisMiguel->setNombre("Luis Miguel");
        $luisMiguel->setApellidos("Cabezas", "Granado");
        if ($luisMiguel::comprobarDni("04510533A")) {
            $luisMiguel->setDni("04510533A");
        }
        ?>
        <h1>
            Datos de <?=
        $luisMiguel->getNombre()
        . " "
        . $luisMiguel->getApellidos();
        ?>
        </h1>
        ID: <?= $luisMiguel->getDni(); ?>
        <br/>
        <?php
        cambiaNombre($luisMiguel, "Pedro");
        echo $luisMiguel->getNombre();
        ?>
    </body>
</html>

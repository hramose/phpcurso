<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Creando una sesión con datos</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
        <script src = "bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Creando una sesión con datos</h1>
            <div class="col-md-12 well">
                <?php
                    $_SESSION["nombre"] = "Guillermo González";
                    $_SESSION["profesion"] = "Astronauta";
                ?>
                Datos de sesión creados.
            </div>
            <div class="col-md-12 well">
                <div class="span12">
                    <a href='consultarSesion.php'>Consultar datos de sesión</a>
                </div>
            </div>
        </div>
    </body>
</html>

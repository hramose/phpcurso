<?php
session_start(); // Accedemos a la sesión
$_SESSION = array(); // Nos aseguramos de eliminar los datos de la sesión
session_regenerate_id(TRUE); // Forzamos a regenerar la cookie de sesión
session_destroy(); // Eliminamos la sesión
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Eliminando una sesión</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
        <script src = "bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Eliminando una sesión</h1>
            <div class="col-md-12 well">
                <?="Ya no existe la sesión."?>
            </div>
            <div class="col-md-12 well">
                <div class="span12">
                    <a href='crearSesion.php'>Crear sesión</a>
                </div>
                <div class="span12">
                    <a href='crearSesionConDatos.php'>Crear sesión con datos</a>
                </div>
            </div>
        </div>
    </body>
</html>

<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Creando una sesión</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
        <script src = "bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Creando una sesión</h1>
            <div class="col-md-12 well">
                <?php echo "El identificador de la sesión es: ".session_id();?>
            </div>
            <div class="col-md-12 well">
                <div class="span12">
                    <a href='eliminarSesion.php'>Destruir Sesión</a>
                </div>
            </div>
        </div>
    </body>
</html>

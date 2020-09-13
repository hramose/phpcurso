<?php
require_once "Sesion.php";
require_once "Usuario.php";
$sesion = new Sesion();
$usuario = new Usuario();
$usuario->login();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Comprobando el usuario</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
        <script src = "bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Acceso permitido</h1>
            <div class="col-md-12 well">
                Nombre: <?=$_SESSION["nombre"]?>
            </div>
            <div class="col-md-12 well">
                Apellidos: <?=$_SESSION["apellido"]?>
            </div>
            <div class="col-md-12 well">
                Perfil: <?=$_SESSION["perfil"]?>
            </div>
            <div class="col-md-12 well">
                Teléfono: <?=$_SESSION["telefono"]?>
            </div>
            <div class="col-md-12 well">
                <div class="span12">
                    <a href='logout.php'>Salir</a>
                </div>
            </div>
        </div>
    </body>
</html>

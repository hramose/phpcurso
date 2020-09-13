<?php setcookie("color_fondo","red");?>
<?php setcookie("color_texto","black",time()+60);?>
<?php setcookie("columnas",3);?>
<?php setcookie("filas",4);?>
<!DOCTYPE html>
<html>
    <head>
        <title>Crear Cookies</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
        <script src = "bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Creando Cookies</h1>
            <div class="col-md-12 well">
                <div class="col-md-12">Creada cookie 'color_fondo' con valor 'red'</div>
                <div class="col-md-12">Creada cookie 'color_texto' con valor 'black' que expira en 60 seg.</div>
                <div class="col-md-12">Creada cookie 'columnas' con valor 3</div>
                <div class="col-md-12">Creada cookie 'filas' con valor 4</div>
            </div>
            <div class="col-md-12 well">
                <div class="col-md-12">
                    <a href='consultarCookies.php'>Consultar cookies</a>
                </div>
                <div class="col-md-12">
                    <a href='eliminarCookies.php'>Eliminar cookies</a>
                </div>
            </div>
        </div>
    </body>
</html>

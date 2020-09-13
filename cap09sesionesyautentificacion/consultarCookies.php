<!DOCTYPE html>
<html>
    <head>
        <title>Consultando Cookies</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
        <script src = "bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Consultando Cookies</h1>
            <div class="col-md-12 well">
                <?php foreach($_COOKIE as $cookieNombre=>$cookieValor):?>
                    <div class="span12">Cookie '<?=$cookieNombre?>' con valor <?=$cookieValor?> </div>
                <?php endforeach;?>
            </div>
            <div class="col-md-12 well">
                <div class="span12">
                    <a href='crearCookies.php'>Crear cookies</a>
                </div>
                <div class="span12">
                    <a href='eliminarCookies.php'>Eliminar cookies</a>
                </div>
            </div>
        </div>
    </body>
</html>

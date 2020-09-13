<!DOCTYPE html>
<html>
    <head>
        <title>Nuevo Contacto Array</title>
        <meta charset = "utf-8">
    		<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    		<meta name = "viewport" content = "width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "http://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src = "bootstrap/js/bootstrap.min.js"></script>
        <script src = "jquery.validate.min.js"></script>
        <script src = "messages_es.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Nuevo Contacto Array</h1>
            <?php $contacto =  $_POST['contacto'];?>
            <div class="col-md-12 well">
                Nuevo Contacto: <?php echo $contacto['nombre'];?>
            </div>
            <div class="col-md-12 well">
                Correo electrónico: <?php echo $contacto['email'];?>
            </div>
            <div class="col-md-12 well">
                Métodos de Pago:
                <?php
                    $metodosPago = $_POST['metodosPago'];
                    foreach($metodosPago as $metodoPago){
                        echo "[$metodoPago]";
                    }
                ?>
            </div>
        </div>
    </body>
</html>

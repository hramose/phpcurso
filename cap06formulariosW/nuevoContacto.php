<!DOCTYPE html>
<html>
    <head>
      <title>Formulario Simple</title>
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
          <h1>Formulario Simple</h1>
          <div class="col-md-12 well">
              Nuevo Contacto ($_POST): <?= $_POST['nombre']?>
          </div>
          <div class="col-md-12 well">
              Nuevo Contacto ($_REQUEST): <?= $_REQUEST['nombre']?>
          </div>
        </div>
    </body>
</html>

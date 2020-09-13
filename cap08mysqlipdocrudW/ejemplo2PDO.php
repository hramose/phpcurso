<!DOCTYPE html>
<html>
    <head>
      <title>Ejemplo 2 con PDO</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
      <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
      <script src = "bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
      <div class="container">
        <h1>Ejemplo 2 con PDO controlar si la conexion se ha realizado corrctamente.</h1>
        <div class="col-md-12 well">
          <?php
            try {
              require_once("configuracion.php");
              $base_datos_PDO = new PDO("mysql:host=$servidor;dbname=$base_datos; charset=utf8", $usuario, $pass);
              echo "Éxito al intentar la conexión con MySQL";
            } catch (PDOException $e) {
              echo "Hubo algún error al intentar la conexión con MySQL";
              print_r($e);
            }
        ?>
        </div>
      </div>
    </body>
</html>

  <!DOCTYPE html>
<html>
  <head>
    <title>Ejemplo 1 con PDO</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
    <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src = "bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h1>Ejemplo 1 con PDO select * from usuarios , usar foreach echo</h1>
      <div class="col-md-12 well">
        <?php
          require_once "configuracion.php" );
          $base_datos_PDO = new PDO ( "mysql:host=$servidor;dbname=$base_datos; charset=utf8", $usuario, $pass );
          $resultado = $base_datos_PDO->query ( "select * from usuarios" );
          foreach ( $resultado as $row ) {
            echo $row['nombre'] . " " . $row['apellidos'] . '<br/>';
          }
        ?>
      </div>
    </div>
  </body>
</html>

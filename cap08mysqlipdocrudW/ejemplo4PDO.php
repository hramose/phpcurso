<!DOCTYPE html>
<html>
    <head>
      <title>Ejemplo 4 con PDO</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
      <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
      <script src = "bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
      <div class="container">
        <h1>Ejemplo 4 con PDO mostrar todos los registros de la tabla usuarios de la bd compras con las siguientes usando ->query ->fetch y print_r</h1>
        <div class="col-md-12 well">
          <pre><?php
            require_once("configuracion.php");
            $base_datos_PDO = new PDO("mysql:host=$servidor;dbname=$base_datos; charset=utf8", $usuario, $pass);
            $resultado = $base_datos_PDO->query("select * from usuarios");
            while ($fila = $resultado->fetch(PDO::FETCH_BOTH)) {
              print_r($fila);
            }
          ?>
        </pre>
      </div>
    </div>
  </body>
  </html>
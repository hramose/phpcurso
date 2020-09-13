<!DOCTYPE html>
<html>
    <head>
        <title>Insertar una fila</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
        <script src = "bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
      <div class="container">
        <h1>Insertar una fila</h1>
        <div class="col-md-12 well">
          <?php
            require_once("clase_mysqli.php");
            $servidor = "localhost";
            $usuario = "root";
            $pass = "";
            $base_datos = "compras";
            $insertar = "INSERT INTO usuarios (nombre, apellidos) VALUES ('Cristina', 'Pérez Burgos')";
            $usuario = new Servidor_Base_Datos($servidor, $usuario, $pass, $base_datos);
            $usuario->consulta($insertar);
          ?>
          Fila insertada
        </div>
      </div>
    </body>
</html>

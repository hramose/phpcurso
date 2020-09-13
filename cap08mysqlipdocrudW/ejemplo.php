<!DOCTYPE html>
<html>
    <head>
        <title>Conexión mediante una clase</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
        <script src = "bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
      <div class="container">
        <h1>Conexión mediante una clase</h1>
        <div class="col-md-12 well">
          <?php
            $servidor = "localhost";
            $usuario = "root";
            $pass = "";
            $base_datos = "compras";
            //Primero se añade el fichero que contiene la clase
            require_once("clase_mysqli.php");
            $usuario = new Servidor_Base_Datos($servidor, $usuario, $pass, $base_datos);
            $usuario->consulta("select * from usuarios");
            while ($fila = $usuario->extraer_registro()) {
                foreach ($fila as $indice => $valor) {
                    echo "$indice: $valor<br/>";
                }
                echo "<br/>";
            }
          ?>
        </div>
      </div>
    </body>
</html>

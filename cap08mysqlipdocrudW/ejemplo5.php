<!DOCTYPE html>
<html>
    <head>
      <title>Contar filas</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
      <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
      <script src = "bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
      <div class="container">
        <h1>Contar filas</h1>
        <div class="col-md-12 well">
          <?php
            require_once("clase_mysqli.php");
            $servidor = "localhost";
            $usuario = "root";
            $pass = "";
            $base_datos = "compras";
            $usuario = new Servidor_Base_Datos($servidor, $usuario, $pass, $base_datos);
            $consulta = "select count(*) as numero_filas from usuarios";
            $usuario->consulta($consulta);
            $fila = $usuario->extraer_registro();
            $numero_filas = $fila["numero_filas"];
            $consulta = "select * from usuarios";
            $usuario->consulta($consulta);
            echo "El número de filas es: $numero_filas<br/>";
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

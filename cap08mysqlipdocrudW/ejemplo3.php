<!DOCTYPE html>
<html>
    <head>
        <title>Actualizar una fila</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
        <script src = "bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
      <div class="container">
        <h1>Actualizar una fila</h1>
        <div class="col-md-12 well">
          <?php
            require_once("clase_mysqli.php");
            $servidor = "localhost";
            $usuario = "root";
            $pass = "";
            $base_datos = "compras";
            $consulta = "SELECT idusuario FROM usuarios WHERE nombre='Pablo'";
            $iusuario = new Servidor_Base_Datos($servidor, $usuario, $pass, $base_datos);
            $iusuario->consulta($consulta);
            $fila = $iusuario->extraer_registro();
            $idusuario = $fila["idusuario"];
            $actualizar = "UPDATE usuarios SET cuenta = 9999 WHERE idusuario = '$idusuario' ";
            $iusuario->consulta($actualizar);
          ?>
          Fila actualizada
        </div>
      </div>
    </body>
</html>

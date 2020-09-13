<!DOCTYPE html>
<html>
    <head>
        <title>Eliminar una fila</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
        <script src = "bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
      <div class="container">
        <h1>Eliminar una fila</h1>
        <div class="col-md-12 well">
          <?php
            require_once("clase_mysqli.php");
            $servidor = "localhost";
            $usuario = "root";
            $pass = "";
            $base_datos = "compras";
            $consulta = "SELECT idusuario FROM usuarios WHERE idusuario=1";
            $iusuario = new Servidor_Base_Datos($servidor, $usuario, $pass, $base_datos);
            $iusuario->consulta($consulta);
            $fila = $iusuario->extraer_registro();
            $idusuario = $fila["idusuario"];
            $borrar = "DELETE FROM usuarios WHERE idusuario = '$idusuario'";
            $iusuario->consulta($borrar);
          ?>
          Fila eliminada
        </div>
      </div>
    </body>
</html>

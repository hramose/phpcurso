<!DOCTYPE html>
<html>
  <head>
      <title>Ejemplo 9 con PDO</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
      <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
      <script src = "bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h1>Ejemplo 9 con PDO actualizar los siguiente registro con idusuario=1 idusuario=2 y idusuario=3 la tabla usuarios de la bd compras con las siguientes usando  ->prepare ->beginTransaction ->bindValue ->execute ->commit ->roolBack y echo capturando los siguientes errores: error de conexion con la bd, error en la actualizacion</h1>
      <div class="col-md-12 well">
        <?php
        require_once("configuracion.php");
        try {
            $base_datos_PDO = new PDO("mysql:host=$servidor;dbname=$base_datos;charset=utf8", $usuario, $pass);
        } catch (PDOException $e) {
            echo "Imposible conectar con la base de datos";
            exit;
        }
        try {
            $base_datos_PDO->beginTransaction();
            $sql = "update usuarios set cuenta = 0 where id = :id";
            $sentencia = $base_datos_PDO->prepare($sql);
            $sentencia->bindValue(":id", 1);
            $sentencia->execute();
            $sentencia->bindValue(":id", 2);
            $sentencia->execute();
            $sentencia->bindValue(":id", 3);
            $sentencia->execute();
            $base_datos_PDO->commit();
            echo "Filas actualizadas";
        } catch (PDOException $e) {
            $base_datos_PDO->rollBack();
            echo "Hubo algún error en la transacción " . $e->getMessage();
        }
        ?>
      </div>
    </div>
  </body>
</html>

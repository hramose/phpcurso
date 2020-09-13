  <!DOCTYPE html>
<html>
  <head>
      <title>Ejemplo 8 con PDO</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
      <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
      <script src = "bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h1>Ejemplo 8 con PDO borrar el siguiente registro con idusuario>1 la tabla usuarios de la bd compras con las siguientes usando ->prepare ->bindValue ->execute ->rowCount y echo</h1>
      <div class="col-md-12 well">
        <?php
          require_once("configuracion.php");
          $base_datos_PDO = new PDO("mysql:host=$servidor;dbname=$base_datos;charset=utf8", $usuario, $pass);
          $sql = "delete from usuarios where idusuario > :idusuario";
          $sentencia = $base_datos_PDO->prepare($sql);
          $sentencia->bindValue(":idusuario", 1);
          $sentencia->execute();
          echo "Número de filas borradas: " . $sentencia->rowCount();
        ?>
      </div>
    </div>
  </body>
</html>

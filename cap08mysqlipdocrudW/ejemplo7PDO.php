<!DOCTYPE html>
<html>
    <head>
      <title>Ejemplo 7 con PDO</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
      <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
      <script src = "bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
      <div class="container">
        <h1>>Ejemplo 7 con PDO insertar el siguiente registro nombre:'Carlos' apellidos:'Alvarez' cuenta: 3342 de la tabla usuarios de la bd compras con las siguientes usando ->prepare ->bindValue ->execute ->lastInsertId y print_r</h1>
        <div class="col-md-12 well">
          <?php
            require_once("configuracion.php");
            $base_datos_PDO = new PDO("mysql:host=$servidor;dbname=$base_datos;charset=utf8", $usuario, $pass);
            $sql = "insert into usuarios(nombre, apellidos, cuenta) values(:nombre, :apellidos, :cuenta)";
            $sentencia = $base_datos_PDO->prepare($sql);
            $sentencia->bindValue(":nombre", 'Carlos');
            $sentencia->bindValue(":apellidos", 'Álvarez');
            $sentencia->bindValue(":cuenta", 3342);
            $sentencia->execute();
            echo "El último id es " . $base_datos_PDO->lastInsertId();
          ?>
        </div>
      </div>
    </body>
  </html>

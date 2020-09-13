<!DOCTYPE html>
<html>
  <head>
      <title>Ejemplo 10 con PDO crear una rutina </title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
      <script src = "http://code.jquery.com/jquery-3.1.1.min.js" ></script>
      <script src = "bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h1>Ejemplo 10 con PDO crear una rutina(seleccionas la bd en phpmyadmin más y le das a rutinas, debemos de seleccionar procedimiento porque todas las funciones devuelven por defecto las consultas sql y enviamos 0 parametros) </h1>
      <div class="col-md-12 well">
        <pre><?php
        require_once("configuracion.php");
        $base_datos_PDO = new PDO("mysql:host=$servidor;dbname=$base_datos;charset=utf8", $usuario);
        $resultado = $base_datos_PDO->query('call obtener_usuarios()');
        $filas = $resultado->fetchAll();
        print_r($filas);
        ?>
        </pre>
      </div>
    </div>
  </body>
</html>

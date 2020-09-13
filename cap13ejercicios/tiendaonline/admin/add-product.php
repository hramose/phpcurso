
<?php
include "../configs/config.php";
include "../configs/funciones.php";
$mysqli = connect();
//Mucha atencion!! El redirect solo se puede poner antes del header por definicion y no puedes redirijir sobre la misma pagina pq se queda en bucle.
if (check_admin() == "nologed") redir("login.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->

    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

 <body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index.php">
          <h1 class="tm-site-title mb-0">Product Admin</h1>
        </a>
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="far fa-file-alt"></i>
                <span> Reports <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Daily Report</a>
                <a class="dropdown-item" href="#">Weekly Report</a>
                <a class="dropdown-item" href="#">Yearly Report</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="products.php">
                <i class="fas fa-shopping-cart"></i> Products
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="accounts.php">
                <i class="far fa-user"></i> Accounts
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-cog"></i>
                <span> Settings <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Billing</a>
                <a class="dropdown-item" href="#">Customize</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <?php
              if (!isset($_SESSION['id'] ))
              {
              echo '<a class="nav-link d-block" href="login.php">Login</a>';
              }
              else echo '<a class="nav-link d-block" href="logout.php"><b>' . $_SESSION['username'] . ' ,Logout</b></a>';
            
            ?>
            </li>
                
          </ul>
        </div>
      </div>
    </nav>


<?php

//check_admin();

if(isset($enviar)){

  $name = (string) clear($name);
  $price = (float) clear($price);
  $oferta = (int) clear($oferta);
//Esto es importante para quitar los warning
  $imagen = (string) "";
  $descargable = (string) "";
  $id_categoria = (int) clear($id_categoria);

  if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
    //comprobamos el codigo de producto que es unico pero no tenemos ccodigo producto. Por el id no se puede hacer.
    $imagen = $_FILES['imagen']['name'];
    move_uploaded_file($_FILES['imagen']['tmp_name'], "../productos/".$imagen);
  }

  if(is_uploaded_file($_FILES['descargable']['tmp_name'])){
    $descargable = $_FILES['descargable']['name'];
    move_uploaded_file($_FILES['descargable']['tmp_name'], "../descargable/".$descargable);
  }

 $mysqli->query("INSERT INTO productos (price,imagen,name,id_categoria, oferta,descargable) VALUES ($price,'$imagen','$name', $id_categoria,$oferta,'$descargable')");
  alert("Producto agregado",1, "?p=agregar_producto");
  //redir("?p=agregar_producto");
}

?>


    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-12 tm-block-col">
        <!--<div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">-->
          <div class="tm-bg-primary-dark tm-block tm-block-products">

        <h2 class="tm-block-title d-inline-block">Edit Product</h2>





<form method="get" action="" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Nombre del producto"/>
  </div>


  <div class="form-group">
    <input type="text" class="form-control" name="price" placeholder="Precio del producto"/>
  </div>


  <label>Imagen del producto</label>

  <div class="form-group">
    <input type="file" class="form-control" name="imagen" title="Imagen del producto" placeholder="Imagen del producto"/>
  </div>

  <div class="form-group">

    <select name="categoria" required class="form-control">
      <option value="">Seleccione una categoria</option>
      <?php
        $q = $mysqli->query("SELECT * FROM categorias ORDER BY categoria ASC");

        while($r=mysqli_fetch_array($q)){
          ?>
            <option value="<?=$r['id']?>"><?=$r['categoria']?></option>
          <?php
        }
      ?>
    </select>

  </div>

  <div class="form-group">
    <select name="oferta" class="form-control">
      <option value="0">0% de Descuento</option>
      <option value="5">5% de Descuento</option>
      <option value="10">10% de Descuento</option>
      <option value="15">15% de Descuento</option>
      <option value="20">20% de Descuento</option>
      <option value="25">25% de Descuento</option>
      <option value="30">30% de Descuento</option>
      <option value="35">35% de Descuento</option>
      <option value="40">40% de Descuento</option>
      <option value="45">45% de Descuento</option>
      <option value="50">50% de Descuento</option>
      <option value="55">55% de Descuento</option>
      <option value="60">60% de Descuento</option>
      <option value="65">65% de Descuento</option>
      <option value="70">70% de Descuento</option>
      <option value="75">75% de Descuento</option>
      <option value="80">80% de Descuento</option>
      <option value="85">85% de Descuento</option>
      <option value="90">90% de Descuento</option>
      <option value="95">95% de Descuento</option>
      <option value="99">99% de Descuento</option>
    </select>
  </div>

  <div class="form-group">
    <label>¿Tiene algun archivo de descarga?</label>
    <input class="form-control" type="file" name="descargable"/>
  </div>


  <div class="form-group">
    <button type="submit" class="btn btn-success" name="enviar" value="true"><i class="fa fa-check"></i> Agregar Producto</button>
  </div>

</form>

</div>
</div>
</div>
</div>


    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2018</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
        </div>
    </footer> 

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
  </body>
</html>

<?php
include "../configs/config.php";
include "../configs/funciones.php";
$id = clear($id);
//Mucha atencion!! El redirect solo se puede poner antes del header por definicion y no puedes redirijir sobre la misma pagina pq se queda en bucle.
if (check_admin() == "nologed") redir("login.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Edit Product - Dashboard Admin Template</title>
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


$mysqli = connect();







$q = $mysqli->query("SELECT * FROM productos WHERE id = '$id'");
$rq = mysqli_fetch_array($q);
  $imagen = (string) $rq['imagen'];
  $descargable = (string) $rq['descargable'];
//No hace falta recorrer el bucle solo tenemos un resultado

if(isset($enviar)){
  if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
    //Puede ser cualquier archivo con nombres diferentes del producto.
    $imagen = $_FILES['imagen']['name'];
      //quitar archivo viejo
   borrararchivo("../productos/".$rq['imagen']);
    move_uploaded_file($_FILES['imagen']['tmp_name'], "../productos/".$imagen);
  }

  if(is_uploaded_file($_FILES['descargable']['tmp_name'])){
    //Puede ser cualquier archivo con nombres diferentes del producto.
   $descargable = $_FILES['descargable']['name'];
   //quitar archivo viejo
   borrararchivo("../descargable/".$rq['descargable']);
    move_uploaded_file($_FILES['descargable']['tmp_name'], "../descargable/".$descargable);
  }





  $mysqli->query("UPDATE productos SET name = '$name',price = $price,id_categoria = $id_categoria, oferta = $oferta, imagen = '$imagen', descargable='$descargable' WHERE id = $id");
  alert ('actualizado correctamente',1,'products.php');

}

?>








    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-12 tm-block-col">
        <!--<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">-->
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Edit Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" method="post" class="tm-edit-product-form" enctype="multipart/form-data">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Product Name
                    </label>
                    <input
                      id="name"
                      name="name"
                      type="text"
                      value=<?=$rq['name']?>
                      class="form-control validate"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <textarea                    
                      class="form-control validate tm-small"
                      rows="5"
                      required
                    >Lorem ipsum dolor amet gentrify glossier locavore messenger bag chillwave hashtag irony migas wolf kale chips small batch kogi direct trade shaman.</textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Category</label
                    >
                    <select class="custom-select tm-select-accounts" name="id_categoria" id="category">
                        
      <option value="">Seleccione una categoria</option>
      <?php
        $q = $mysqli->query("SELECT * FROM categorias ORDER BY categoria ASC");

        while($r=mysqli_fetch_array($q)){
          ?>
            <option <?php if($rq['id_categoria'] == $r['id']) { echo "selected"; } ?>  value="<?=$r['id']?>"><?=$r['categoria']?></option>
          <?php
        }
      ?>
                    </select>
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="expire_date"
                            >Expire Date
                          </label>
                          <input
                            id="expire_date"
                            name="expire_date"
                            type="text"
                            value="22 Oct, 2020"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="stock"
                            >Units In Stock
                          </label>
                          <input
                            id="stock"
                            name="price"
                            type="text"
                            value=<?=$rq['price']?>
                            class="form-control validate"
                          />
                        </div>
                          <div class="form-group mb-3 col-xs-12 col-sm-6">
    <select name="oferta" class="custom-select tm-select-accounts">
      <option <?php if($rq['oferta'] == 0) { echo "selected"; }?> value="0">0% de Descuento</option>
      <option <?php if($rq['oferta'] == 5) { echo "selected"; }?> value="5">5% de Descuento</option>
      <option <?php if($rq['oferta'] == 10) { echo "selected"; }?> value="10">10% de Descuento</option>
      <option <?php if($rq['oferta'] == 15) { echo "selected"; }?> value="15">15% de Descuento</option>
      <option <?php if($rq['oferta'] == 20) { echo "selected"; }?> value="20">20% de Descuento</option>
      <option <?php if($rq['oferta'] == 25) { echo "selected"; }?> value="25">25% de Descuento</option>
      <option <?php if($rq['oferta'] == 30) { echo "selected"; }?> value="30">30% de Descuento</option>
      <option <?php if($rq['oferta'] == 35) { echo "selected"; }?> value="35">35% de Descuento</option>
      <option <?php if($rq['oferta'] == 40) { echo "selected"; }?> value="40">40% de Descuento</option>
      <option <?php if($rq['oferta'] == 45) { echo "selected"; }?> value="45">45% de Descuento</option>
      <option <?php if($rq['oferta'] == 50) { echo "selected"; }?> value="50">50% de Descuento</option>
      <option <?php if($rq['oferta'] == 55) { echo "selected"; }?> value="55">55% de Descuento</option>
      <option <?php if($rq['oferta'] == 60) { echo "selected"; }?> value="60">60% de Descuento</option>
      <option <?php if($rq['oferta'] == 65) { echo "selected"; }?> value="65">65% de Descuento</option>
      <option <?php if($rq['oferta'] == 70) { echo "selected"; }?> value="70">70% de Descuento</option>
      <option <?php if($rq['oferta'] == 75) { echo "selected"; }?> value="75">75% de Descuento</option>
      <option <?php if($rq['oferta'] == 80) { echo "selected"; }?> value="80">80% de Descuento</option>
      <option <?php if($rq['oferta'] == 85) { echo "selected"; }?> value="85">85% de Descuento</option>
      <option <?php if($rq['oferta'] == 90) { echo "selected"; }?> value="90">90% de Descuento</option>
      <option <?php if($rq['oferta'] == 95) { echo "selected"; }?> value="95">95% de Descuento</option>
      <option <?php if($rq['oferta'] == 99) { echo "selected"; }?> value="99">99% de Descuento</option>
    </select>
  </div>
                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-edit mx-auto">
                  <img src="<?='../productos/'. $rq['imagen']?>" alt="Product image" class="img-fluid d-block mx-auto">
            
                </div>
                <div class="custom-file mt-3 mb-3">
          
                  <input type="file" class="btn btn-primary btn-block mx-auto" name="imagen" title="Imagen del producto" placeholder="Imagen del producto"/>

                   <input type="file" class="btn btn-primary btn-block mx-auto" name="descargable" title="Imagen descargable" placeholder="Imagen descargable"/>
                </div>

                <input type="hidden" name="id" value="<?=$id?>"/>
              </div>
              <div class="col-12">
                <button type="submit" name= "enviar" class="btn btn-primary btn-block text-uppercase">Update Now</button>
              </div>
            </form>
            </div>
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
        $("#expire_date").datepicker({
          defaultDate: "10/22/2020"
        });
      });
    </script>
  </body>
</html>

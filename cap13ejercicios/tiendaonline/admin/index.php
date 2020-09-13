<?php
include "../configs/config.php";
include "../configs/funciones.php";




if (check_admin() == "loged") redir("dashboard.php");
	else redir("login.php");
  ?>

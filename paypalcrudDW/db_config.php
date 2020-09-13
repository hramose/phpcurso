<?php

define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "paypal");



$connect = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD,DB_DATABASE) or die("Database Connection Error");
//mysqli_select_db(DB_DATABASE) or ("Database Selection Error");
?>
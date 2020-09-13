<?php
//$soap_servidor = new SoapServer("http://localhost/servicioweb/soapleerbd.wsdl");
$soap_servidor = new SoapServer("http://localhost:8080/fulgencio\3serviciowebbiblioteca\soapleerbd.wsdl");
function numerolibrosautor($idautor)
{
    $host_mysql = "localhost";
$user_mysql = "root";
$pass_mysql = "";
$db_mysql = "bibliotecabd";

$mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);

        $sql = "SELECT * FROM libros where lib_autor=$idautor";

$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    //while($rp = mysqli_fetch_assoc($result)) {

     return mysqli_num_rows($result);
}
else return 0;
}
     function buscartitulo($ISBN){
        $host_mysql = "localhost";
$user_mysql = "root";
$pass_mysql = "";
$db_mysql = "bibliotecabd";

$mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);

        $sql = "SELECT lib_titulo FROM libros where lib_isbn=$ISBN";

$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($rp = mysqli_fetch_assoc($result)) {
       
     return $rp['lib_titulo'];
    }
}
else return "";    
   
   
   
   
   
   
   
   
   
    }

$soap_servidor->AddFunction("numerolibrosautor");
$soap_servidor->AddFunction("buscartitulo");
$soap_servidor->handle();
?>
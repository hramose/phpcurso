<?php



$host_mysql = "localhost";
$user_mysql = "root";
$pass_mysql = "";
$db_mysql = "peliculas";
//mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);
//funciona
function borrararchivo($url)
{
	$file = $url;

if (!unlink($file)) {
  //echo ("Error deleting $file");
  return false;
} else {
  //echo ("Deleted $file");
  return true;
}
}
function clear($var){
	htmlspecialchars($var);

	return $var;
}
//funciona
function login_admin($username, $password){
$mysqli = connect();
  $query = $mysqli->query("SELECT * FROM admins WHERE username = '$username' AND password = '$password'");

  if(mysqli_num_rows($query)>0){
    $r = mysqli_fetch_array($query);
    $_SESSION['id'] = $r['id'];
    $_SESSION['username'] = $r['username'];
    $_SESSION['password'] = $r['password'];
    alert("Logeado",1,'index.php');
    
  }else{
    alert("Los datos no son validos",0,'login.php');
    //redir("?p=login");
  }
}
//funciona
function check_admin(){

if(!isset($_SESSION['id'])){
	return "nologed";
	//redir("login.php");
}
else
{
//Atencion no se puede redirigir una pagina sobre si misma
  //redir($url);
	return "loged";


}

}
//funciona
function redir($url)
{
echo "<script type='text/javascript'>window.location.href = '". $url . "';</script>";
 //header('Location: ' . $url);
die;
}
//funciona
function alert($txt,$type,$url){

	//"error", "success" and "info".

	if($type==0){
		$t = "error";
	}elseif($type==1){
		$t = "success";
	}elseif($type==2){
		$t = "info";
	}else{
		$t = "info";
	}
?>
<script>
	alert("<?=$txt?>");

</script>
<?php
redir($url);
	//echo '<script>swal({ title: "Alerta", text: "'.$txt.'", icon: "'.$t.'"});';
	//echo '$(".swal-button").click(function(){ window.location="?p='.$url.'"; });';
	//echo '</script>';
}
//no lo he probado
function check_user($url){

	if(!isset($_SESSION['id_cliente'])){
		redir("?p=login&return=$url");
	}else{

	}

}
//no lo he probado
function nombre_cliente($id_cliente){
	$mysqli = connect();

	$q = $mysqli->query("SELECT * FROM clientes WHERE id = '$id_cliente'");
	$r = mysqli_fetch_array($q);
	return $r['name'];
}
//funciona
function connect(){
		
	$host_mysql = "localhost";
	$user_mysql = "root";
	$pass_mysql = "";
	$db_mysql = "peliculas";
	
$mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);

 	

	return $mysqli;
}
//no he probado
function fecha($fecha){
	$e = explode("-",$fecha);

	$year = $e[0];
	$month = $e[1];
	$e2 = explode(" ",$e[2]);
	$day = $e2[0];
	$time = $e2[1];

	$e3 = explode(":",$time);
	$hour = $e3[0];
	$mins = $e3[1];

	return $day."/".$month."/".$year." ".$hour.":".$mins;

}
//no he probado
function estado($id_estado){
		if($id_estado == 0){
			$status = "Iniciando";
		}elseif($id_estado==1){
			$status = "Preparando";
		}elseif($id_estado == 2){
			$status = "Despachando";
		}elseif($id_estado == 3){
			$status = "Finalizado";
		}else{
			$status = "Indefinido";
		}

		return $status;

}
//sin probar
function admin_name_connected(){
	include "config.php";
	$id = $_SESSION['id'];
	$mysqli = connect();

	$q = $mysqli->query("SELECT * FROM admins WHERE id = '$id'");
	$r = mysqli_fetch_array($q);

	return $r['name'];

}
//sin probar
function estado_pago($estado){

	if($estado==0){
		$estado = "Sin Verificar";
	}elseif($estado==1){
		$estado = "Verificado y Aprobado";
	}elseif($estado==2){
		$estado = "Reembolsado";
	}else{
		$estado = "Sin Verificar";
	}

	return $estado;

}
?>
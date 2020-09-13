<?php
$response = $_POST["g-recaptcha-response"];
 
if(!empty($response))
{
    $secret = "6Lcjd30UAAAAA....";
    $ip = $_SERVER['REMOTE_ADDR'];
    $respuestaValidación = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$ip");
 
    //Si queremos visualizar la información obtenida de la petición a la api de validación de Google para comprobar el estado de esta lo haremos con la función de PHP var_dump
    //var_dump($respuestaValidación);
 
    $jsonResponde = json_decode($respuestaValidación);
    if($jsonResponde->success)
    {
	//entrará aquí cuando todo sea correcto	
    }
    else
    {
        //Google ha detectado que se trata de un proceso no humano
	header("location:index.php?mensaje=humanCaptcha");
	exit();
    }
}
else
{
    //si entra aquí significa que no se ha pulsado el Captcha
    header("location:index.php?mensaje=errorCaptcha");
    exit();
}
?>
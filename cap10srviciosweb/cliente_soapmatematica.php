
<?php
try{
	require_once("configuracion.php");
 $clienteSOAP = new SoapClient(NULL,array('uri' => URI, 'location' => LOCATION_MAT));
 
 $resultado_suma = $clienteSOAP->sumar(2.7, 3.5);
 $resultado_resta = $clienteSOAP->restar(2.7, 3.5);
 var_dump($clienteSOAP->__getFunctions());
 echo "la suma de 2.7 mas 3.5 es: " . $resultado_suma . "<br/>";
 echo "la diferencia de 2.7 menos 3.5 es: " . $resultado_resta . "<br/>";
 
} catch(SoapFault $e){
 var_dump($e);
}
?>
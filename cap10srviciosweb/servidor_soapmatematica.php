<?php
require_once("configuracion.php");
class servicios {
function sumar($operando1,$operando2){
      return $operando1+$operando2;
}
 
function restar($operando1,$operando2){
      return $operando1-$operando2;
}
}


try {
  $servidorSOAP = new SOAPServer(NULL,array('uri' => URI, 'location' => LOCATION_MAT));
  $servidorSOAP->setClass('servicios');
  $servidorSOAP->handle();
}
catch (SOAPFault $f) {  
  print $f->faultstring;
} 
?>


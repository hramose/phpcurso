<?php
require_once("configuracion.php");
try {
  $cliente = new SoapClient(WSDL, array('location' => LOCATION_WSDL));
  echo $cliente->suma(20,30);
} catch (SOAPFault $f) {
  print $f->faultstring;
}
?>

<?php
require_once 'vendor/autoload.php';

$loader = new Zend\Loader\StandardAutoloader(array('autoregister_zf' => true));
$loader->register();
require_once("configuracion.php");
require_once("clases.php");
try {
  if (isset($_GET['wsdl'])) {
    $autodiscover = new Zend\Soap\AutoDiscover();
    $autodiscover->setClass('Operaciones')->setUri('LOCATION_WSDL');
    header('Content-type: application/xml');
    echo $autodiscover->generate()->toXml();
  } else {
    $servidorSOAP = new SOAPServer(WSDL);
    $servidorSOAP->setClass('Operaciones');
    $servidorSOAP->handle();
  }
} catch (SOAPFault $f) {
    print $f->faultstring;
}
?>

<?php
try{
$soap_cliente = new SoapClient('http://localhost:8080/fulgencio/3serviciowebbiblioteca/soapoperaciones.wsdl');
$resultado_suma = $soap_cliente->sumar(2.7, 3.5);
$resultado_resta = $soap_cliente->restar(2.7, 3.5);
echo $resultado_suma." --- ".$resultado_resta;
} catch (Exception $e) {
    echo 'Error --> '. $e->getMessage();
}
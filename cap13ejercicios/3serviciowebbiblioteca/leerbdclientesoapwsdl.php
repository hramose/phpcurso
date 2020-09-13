<?php
try{
$soap_cliente = new SoapClient('http://localhost:8080/fulgencio/3serviciowebbiblioteca/soapleerbd.wsdl');
$resultado_suma = $soap_cliente->numerolibrosautor(1);
$resultado_resta = $soap_cliente->buscartitulo("1234567890123");
echo $resultado_suma." --- ".$resultado_resta;
//echo $resultado_suma;
} catch (Exception $e) {
    echo 'Error --> '. $e->getMessage();
}
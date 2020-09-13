<?php
$soap_servidor = new SoapServer("http://localhost:8080/fulgencio/3serviciowebbiblioteca/soapoperaciones.wsdl");
function sumar($operando1,$operando2){ return $operando1+$operando2; }
function restar($operando1,$operando2){ return $operando1-$operando2; }
$soap_servidor->AddFunction("sumar");
$soap_servidor->AddFunction("restar");
$soap_servidor->handle();
?>
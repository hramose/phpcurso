<?php
//El carácter @ se utiliza para que PHP no devuelva los errores si una llamada a una función causa un error en tiempo de ejecución. También bloquea los posibles warning.
	@session_start();
	//es para extraer las variables enviadas por get o post a $variable para su comodidad
	@extract($_REQUEST);

	$divisa = "USD";
?>
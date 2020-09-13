<?php
	@session_start();
	//es para extraer las variables enviadas por get o post a $variable para su comodidad
	@extract($_REQUEST);

	$divisa = "USD";
?>
<?php

	require_once("Persona.php");

	session_start();  // Continuar la sesi�n

	if( isset($_SESSION['usuario']) == true )
	{

		echo "COMPROBAR LOS VALORES<br />";
		echo "=======================<p />";
		//imprimir arrays
		print_r( $_SESSION );

		echo "<p />";

		// Mostrar informaci�n del objeto en la sesi�n:
		echo "Nombre: [".$_SESSION['usuario']->getNombre()."]<br/>";
		echo "Apellidos: [".$_SESSION['usuario']->getApellidos()."]<p/>";

	}
	else
	{
		echo "<p>No has pasado por la p�gina principal</p>";
	}

	echo "<a href='03_sesion1.php'>Volver a la p�gina principal</a>";

?>		

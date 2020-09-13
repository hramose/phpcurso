<?php

	class Persona
	{

        public $nombre    = null;
        public $apellidos = null;

        //----------------------------------------------------

        function Persona()
		{
        }

        //----------------------------------------------------

        function getNombre() {
            return $this->nombre;
        }

        //----------------------------------------------------

        function setNombre( $nombre ) {
            $this->nombre = $nombre;
        }

        //----------------------------------------------------

        function getApellidos() {
            return $this->apellidos;
        }

        //----------------------------------------------------

        function setApellidos( $apellidos ) {
            $this->apellidos = $apellidos;
        }

	}

?>
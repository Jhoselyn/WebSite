<?php

	// AGRUPACION DE VARIABLES  
	
	class Representantes {
		
		private $nombre_representante;
		private $apellido_representante;
		private $cedula_representante;
		private $con; // VARIABLE DECLARADA PARA CONEXION CON BASE DE DATOS 

		function __construct() {
			$this->con = new Conexion();
		}

	}

	$r = new Representante();

	// $this->con->simpleQuery( "INSERT INTO FWEFWEF FEWFEHHERGHE" )

?>






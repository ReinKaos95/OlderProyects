<?php 

include_once 'datos_adicionales.php';
include_once 'estudiante.php';

class alumno extends AnotherClass
{
	public $datos_adicionales;
	public $estudiante;

	function __construct($datos_adicionales, $estudiante)
	{
		$this->datos_adicionales=$datos_adicionales;
		$this->estudiante=$estudiante;	}
}

 ?>
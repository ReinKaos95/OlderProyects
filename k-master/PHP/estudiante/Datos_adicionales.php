<?php 

include_once 'estudiante.php';

class Datos_adicionales extends estudiante
{
		public $copia_cedula;
		public $copia_partida;
		public $copia_titulo;
		public $copia_certificacion;
		public $opsu;
		public $fondo_negro;

	function __construct($copia_cedula, $copia_partida, $copia_titulo, $copia_certificacion, $opsu, $fondo_negro)
	{
		$this->copia_cedula=$copia_cedula;
		$this->copia_partida=$copia_partida;
		$this->copia_titulo=$copia_titulo;
		$this->copia_certificacion=$copia_certificacion;
		$this->opsu;=$opsu;
		$this->fondo_negro;=$fondo_negro;
	}
}


 ?>
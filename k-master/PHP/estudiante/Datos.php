<?php 

include_once 'datos_persona.php';
include_once 'estudiante.php';

 class Datos extends datos_persona
{
	
	public $nombre;
	public $apellido;
	public $cedula;
	public $fecha_nacimiento
	public $genero;

	public function __construct($nombre, $apellido, $cedula, $fecha_nacimiento, $genero)
	{
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->cedula=$cedula;
		$this->fecha_nacimiento=$fecha_nacimiento;
		$this->genero=$genero;
		calcularedad($fecha_nacimiento);

	}
	protected function calcularedad($fecha_nacimiento)
	{
		$date = new DateTime();
		$date = (int) $date->format;
		$this->edad=$date - (int) $this->$fecha_nacimiento; 
	}
}


 ?>
<?php 

include_once 'Models/estudiante.php';

abstract class datos_persona extends estudiante
{
	public $nombre;
	public $apellido;
	public $cedula;
	public $fecha_nacimiento
	public $genero;

abstract protected function calcularedad($fecha_nacimiento);
}

 ?>
<?php
	include_once "ConexionSQL.php";

	abstract class MySQL
	{
		protected $DB;
		protected $Tablas = array('estudiante'=>'estudiantes');
		protected $SentenciaSQL;
		protected $Llaves;
		protected $Valores;
		protected $Retorno = [];

		public function __construct() {
			$this->DB = ConexionSQL::ObtenerInstancia();
		}

		abstract protected function PrepararSentenciaSQL($objeto, $condicionales = null);	
		
		protected function GenerarWhere($condicionales) {
			$condiciones = array_map(function($data) { 
				$key = key($data);
				return "AND {$key} {$data[$key]["Condicion"]} '{$data[$key]["Valor"]}'";
			}, $condicionales);
			return "WHERE 1 = 1 ".implode('', $condiciones);
		}
	}
?>
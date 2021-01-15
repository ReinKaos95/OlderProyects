<?php

class nuevoModel extends Model
{
	
	public function __construct(){
	parent::__construct();
	
	}

	public function insert($datos){
		//insertar datos
	
 try{	
            	  $query = $this->db->connect()->prepare('INSERT INTO ALUMNOS (cedula, nombre, apellido) VALUES(:cedula, :nombre, :apellido)');
            $query->execute(['cedula' => $datos['cedula'], 'nombre' => $datos['nombre'], 'apellido' => $datos['apellido']]);
        
            return true;
            
            }
            catch (PDOException $e) {

            	return false;
            	
            }
	}

	

}
?>
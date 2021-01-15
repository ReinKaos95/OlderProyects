<?php 

	include_once 'Models/estudiante.php';
	include_once "SQL/InsertSQL.php";
	include_once "SQL/SelectSQL.php";
	include_once 'SQL/MySQL.php'
	include_once "SQL/UpdateSQL.php";	
	include_once "SQL/DeleteSQL.php";


$content = trim(file_get_contents("php://input"));
$decoded = json_decode($content, true);

header('Access-Control-Allow-Origin *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
header('Content-Type: application/json');


try{

 Insert();
 Select();
 Update();
 Delete();

} catch(Exception $e){

$return= array('resultado' => $e->getMessage());
http_response_code(501);
echo(json_encode($return));
}

function Insert() {
	 $nombre = new estudiante();
	 $apellido = new estudiante();
	 $cedula = new estudiante();
	 $fecha_nacimiento = new estudiante();
	 $genero = new estudiante();

$insert = new insertSQL();

var_dump($insert->Insert($nombre));
var_dump($insert->Insert($apellido));
var_dump($insert->Insert($cedula));
var_dump($insert->Insert($fecha_nacimiento));
var_dump($insert->Insert($genero));

}

function Select(){

	$condiciones = array(
		array("Continente" => array())
	);
	$select = new SelectSQL();
	$result = $select->Obtener(new estudiante(), $condiciones);
	var_dump($result);


}

function Update ()
{
	$condiciones = array(
		array("Estudiante_Id" => array())
	);
	$update = new UpdateSQL();
	$update->Actualizar();
}

function Delete()
{
	$condiciones = array(
		array())
	);
	$delete = new DeleteSQL();
	$delete->Eliminar(new estudiante(), $condiciones);
}

 ?>
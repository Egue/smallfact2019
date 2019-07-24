<?php
require_once("src/Models/ConnectionModel.php");

/**
 * 
 */
class ClientesModel
{
	
	public static function newCliente($list, $tabla){
		$conn = ConnectionModel::connect();
		$stmt = $conn->prepare("INSERT INTO $tabla(nombres,documento) VALUES(:nombres, :documento)");
		$stmt->bindParam(":nombres", $list["nombres"],PDO::PARAM_STR);
		$stmt->bindParam(":documento", $list["documento"], PDO::PARAM_STR);
		if($stmt->execute()){
			return "success";
		}

	}

	public static function selectOneCliente($id,$tabla){
		$conn = ConnectionModel::connect();
		$stmt = $conn->prepare("SELECT * FROM $tabla ORDER BY $tabla.id_cliente DESC LIMIT :id");
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	
}

?>
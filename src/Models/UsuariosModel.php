<?php
require_once("src/Models/ConnectionModel.php");

/**
 * 
 */
class UsuariosModel
{
	
	public static function newUser($list, $tabla){

		$conn = ConnectionModel::connect();
		$stmt = $conn->prepare("INSERT INTO $tabla (nombre, nickname, password, activo, marca)VALUES(:nombre, :nickname, :password, :activo, :marca)");
		$stmt->bindParam(":nombre", $list["username"], PDO::PARAM_STR);
		$stmt->bindParam(":nickname", $list["nickname"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $list["password"], PDO::PARAM_STR);
		$stmt->bindParam(":activo", $list["activo"], PDO::PARAM_INT);		
		$stmt->bindParam(":marca", $list["marca"], PDO::PARAM_STR);
		if ($stmt->execute()) {
			return "success";
		}

	}

}

?>
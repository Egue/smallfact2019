<?php

require_once "src/Models/ConnectionModel.php";


class LoginModel
{   
	public static function validation($login, $tabla){
        
		$conn = ConnectionModel::connect();
		$stmt = $conn->prepare("SELECT * FROM $tabla where 
			$tabla.nickname = :usuario AND $tabla.password = :password");
		$stmt->bindParam(":usuario", $login["user"], PDO::PARAM_STR);
		$stmt->bindParam(":password",md5($login["password"]),PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetch();
	}
	
}


?>
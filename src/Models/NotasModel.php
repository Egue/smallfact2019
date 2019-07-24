
<?php

require_once("src/Models/ConnectionModel.php");

class NotasModel{

public static function Notasnew($arrayn,$c){

		$conn = ConnectionModel::connect();
		$stm = $conn->prepare("INSERT INTO $c(titulo,nota) VALUES (:titulo, :nota)");
		$stm->bindParam(":titulo", $arrayn["titulo"] , PDO::PARAM_STR);
		$stm->bindParam(":nota", $arrayn["nota"] , PDO::PARAM_STR);
		if($stm->execute()){
			return "success";
		}

	}
public static function allNotas($list , $notas){
    
    $conn = ConnectionModel::connect();
    $stmt = $conn->prepare("SELECT * FROM $notas WHERE $notas.id_user = :id");
    $stmt->bindParam(":id" , $list,PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}
}
?>
<?php
require_once("src/Models/ConnectionModel.php");

/**
 * 
 */
class CargosModel
{
	
	public static function insertCargo($arraylist , $deudas){

		$conn = ConnectionModel::connect();
		$stmt = $conn->prepare("INSERT INTO $deudas(valor_total, comentario,fecha_genera,id_cuenta, origen, marca)
								VALUES(:cargo , :comentario , :fecha , :idcuenta, :origen, :marca)");
		$stmt->bindParam(":cargo", $arraylist["cargo"] , PDO::PARAM_INT);
		$stmt->bindParam(":comentario" , $arraylist["comentario"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha" , $arraylist["fecha"], PDO::PARAM_INT);
		$stmt->bindParam(":idcuenta" , $arraylist["id_cuenta"], PDO::PARAM_INT);
		$stmt->bindParam(":origen" , $arraylist["origen"], PDO::PARAM_INT);
		$stmt->bindParam(":marca" , $arraylist["marca"], PDO::PARAM_STR);
		if ($stmt->execute()) {
			return "success";
		}
	}
}


?>
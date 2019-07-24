<?php
require_once("src/Models/ConnectionModel.php");

/**
 * 
 */
class DeudasModel
{
	
	public static function getDeudasCuenta($id , $deudas){
		$conn = ConnectionModel::connect();
		$stmt = $conn->prepare("SELECT $deudas.id_deuda,
										$deudas.origen,
		                               $deudas.comentario,
		                               $deudas.valor_total,
		                               $deudas.valor_parcial,
		                               date_format($deudas.create_time, '%W %d de %M de %Y') as create_time
		                               FROM $deudas WHERE $deudas.id_cuenta = :id order by $deudas.id_deuda DESC ");
		$stmt->bindParam(":id" , $id , PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();

	}

	/*actualizacion function delete*/

	public static function deleteDeudas($id , $tabla){

		$conn = ConnectionModel::connect();
		$stmt = $conn->prepare("DELETE FROM $tabla WHERE id_deuda = :id");
		$stmt->bindParam(":id" , $id , PDO::PARAM_INT);
		
		if ($stmt->execute()) {
			return "sucess";
		}else{

			return "error";
		}

		$stmt->close();
		
	}

	public static function searchDeuda($id , $tabla){

		$conn = ConnectionModel::connect();
		$stmt = $conn->prepare("SELECT $tabla.* FROM $tabla WHERE $tabla.id_deuda = :id");
		$stmt->bindParam(":id" , $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();

		$stmt->close();

	}

	#fin actualizacion

}


?>
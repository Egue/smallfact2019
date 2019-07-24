<?php
require_once("src/Models/ConnectionModel.php");

/**
 * 
 */
class PagosModel
{
	
	public static function insertPago($arraylist , $deudas){
		$conn = ConnectionModel::connect();
		$stmt = $conn->prepare("INSERT INTO $deudas (valor_parcial, comentario, fecha_genera, id_cuenta, origen,marca)
								VALUES(:pago , :comentario, :fecha , :idcuenta, :origen,:marca)");
		$stmt->bindParam(":pago",		 $arraylist["pago"] , PDO::PARAM_INT);
		$stmt->bindParam(":comentario" , $arraylist["comentario"] , PDO::PARAM_STR);
		$stmt->bindParam(":fecha" , 	$arraylist["fecha"], PDO::PARAM_INT);
		$stmt->bindParam(":idcuenta", 	$arraylist["id_cuenta"], PDO::PARAM_INT);

		$stmt->bindParam(":origen", 	$arraylist["origen"], PDO::PARAM_INT);

		$stmt->bindParam(":marca" ,		$arraylist["marca"] , PDO::PARAM_STR);
		if ($stmt->execute()) {
			$tabla = self::tablePagos($arraylist, "pagos");
			return "success";

		}

	}

	public static function tablePagos($list , $pagos){
		$conn = ConnectionModel::connect();
		$stmt = $conn->prepare("INSERT INTO $pagos(fecha_pago, valor,id_cuenta, marca)VALUES(:fecha,:valor,:idcuenta, :marca)");
		$stmt->bindParam(":fecha", $list["fecha"], PDO::PARAM_INT);
		$stmt->bindParam(":valor", $list["pago"], PDO::PARAM_INT);
		$stmt->bindParam(":idcuenta", $list["id_cuenta"], PDO::PARAM_INT);		
		$stmt->bindParam(":marca", $list["marca"], PDO::PARAM_STR);
		if ($stmt->execute()) {
			return "success";
		}
	}

}


?>
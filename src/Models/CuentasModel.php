<?php
require_once("src/Models/ConnectionModel.php");

/**
 * 
 */
class CuentasModel
{
	
	public static function  newCuenta($list,$tabla){
		$conn = ConnectionModel::connect();
		$stmt = $conn->prepare("INSERT INTO $tabla(fechacreacion,id_cliente,numero_cuenta)
								VALUES(:fecha , :id_cliente, :numero)");
		$stmt->bindParam(":fecha", $list["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":id_cliente", $list["id_cliente"], PDO::PARAM_INT);
		$stmt->bindParam(":numero", $list["cuenta"], PDO::PARAM_STR);
		if ($stmt->execute()) {
			return "success";
		}
	}

	public static function gridEstadoCuenta($clientes , $deudas){
		$conn = ConnectionModel::connect();
		$stmt = $conn->prepare("SELECT valorcuentas.* FROM valorcuentas");
		$stmt->execute();
		return $stmt->fetchAll();
		
	}

	public static function getCuentaOne($id, $cuentas){
		$conn = ConnectionModel::connect();
		$stmt = $conn->prepare("SELECT 
								clientes.nombres,
								$cuentas.id_cuenta,
								$cuentas.numero_cuenta,
								IFNULL(sum(deudas.valor_total) - sum(deudas.valor_parcial),0) as deuda
								FROM $cuentas
								LEFT JOIN clientes ON $cuentas.id_cliente = clientes.id_cliente
								LEFT JOIN deudas ON deudas.id_cuenta = $cuentas.id_cuenta
								WHERE $cuentas.id_cuenta = :id
								GROUP BY $cuentas.id_cuenta
								");
		$stmt->bindParam(":id" ,$id , PDO::PARAM_INT);
		$stmt->execute();

		return $stmt->fetch();

	}
}


?>
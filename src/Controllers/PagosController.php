<?php

require_once("src/Models/PagosModel.php");

/**
 * 
 */
class PagosController
{
	
	public function insertPago(){
		$fecha = date("Ymd");
		if (isset($_POST["pago"])) {
			$comentario = "PAGOS DE CLIENTE";
			$array_list = ["pago" => $_POST["pago"], "comentario" => $comentario, "fecha" => $fecha,
							"id_cuenta" =>$_POST["id_cuenta"], "origen" => 2 ,"marca" => uniqid("p")];
			$setPago = PagosModel::insertPago($array_list, "deudas");
			if ($setPago == "success") {
				header("location:index.php?action=CuentasViews&idCuenta=".$_POST["id_cuenta"]."");
			}
		}
	}
}


?>
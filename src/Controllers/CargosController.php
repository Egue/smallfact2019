<?php
require_once("src/Models/CargosModel.php");

/**
 * 
 */
class CargosController
{
	
	public function insertCargo(){
		if (isset($_POST["cargo"])) {
			$fecha = date("Ymd");
			$array_list = ["id_cuenta" => $_POST["id_cuenta"], 
							"cargo" =>$_POST["cargo"],
							"comentario" => $_POST["comentario"],
							"fecha" =>	$fecha,
							"origen" => 1,
							"marca" => uniqid("d")];
			$setInsert = CargosModel::insertCargo($array_list, "deudas");
			if ($setInsert == "success") {
				header("location:index.php?action=CuentasViews&idCuenta=".$_POST["id_cuenta"]."");
			}
		}
	}
}


?>
<?php

require_once("src/Models/ClientesModel.php");
require_once("src/Models/CuentasModel.php");

/**
 * 
 */
class ClientesController{
	
	public function newCliente(){
		if (isset($_POST["nombres"])) {
			$array_clientes = array("nombres" => strtoupper($_POST["nombres"]), "documento" => $_POST["documento"]);
			$set_newCliente = ClientesModel::newCliente($array_clientes,"clientes");
			if ($set_newCliente == "success") {
				$get_cuenta = self::selectOneCliente();
				header("location:index.php?action=grid_Cuentas");
			}
		}
	}

	public function selectOneCliente(){
		$id = 1;
		$get_cliente = ClientesModel::selectOneCliente($id,"clientes");
		$set_cuenta =  self::newCuenta($get_cliente["id_cliente"]);
	}

	public function newCuenta($id){
		
		$fecha = date("Y-m-d");
		$numerocuenta = uniqid();
		$arraylist = array("fecha" => $fecha, "cuenta" => $numerocuenta , "id_cliente" =>$id);
		$set_newCuenta = CuentasModel::newCuenta($arraylist,"cuentas");
		
	}


	
}

?>
<?php


require_once("src/Models/CuentasModel.php");

/**
 * 
 */
class CuentasController
{
	
	public function gridEstadoCuenta(){
		$getClientes = CuentasModel::gridEstadoCuenta("clientes", "deudas");
		foreach ($getClientes as $key) {
			echo "<tr><td>".$key['id_cliente']."</td>
					<td>".$key['nombres']."</td>
					<td>$ ".$key['deuda']."</td>
					<td><a href='index.php?action=CuentasViews&idCuenta=".$key["id_cuenta"]."' class='btn btn-success'>VER</td></tr>";
		}
	}

	public function getCuentaOne(){
		if (isset($_GET["idCuenta"])) {

			$getCuentaOne = CuentasModel::getCuentaOne($_GET["idCuenta"], "cuentas");

		echo "<h1 class='display-4 text-white'><b>".$getCuentaOne["nombres"]."</b></h1>

		<p class='lead text-white'><b> Número Cuenta: ".$getCuentaOne["numero_cuenta"]." - Deuda: $  ".$getCuentaOne["deuda"]." </b></p>
		<p class='lead'><a href='index.php?action=CargosForm&idCargo=".$_GET["idCuenta"]."' class='btn btn-warning text-white'>Cargo deuda</a>  
		<a class='btn btn-success' href='index.php?action=PagosForm&idPago=".$_GET["idCuenta"]."'>Registrar Pago</a></p>";

		}

		
	}
}

?>
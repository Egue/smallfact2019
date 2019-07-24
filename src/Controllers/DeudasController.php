<?php
require_once("src/Models/DeudasModel.php");
/**
 * 
 */
class DeudasController {
	
	public function getDeudasCuenta(){
		if (isset($_GET["idCuenta"])) {
			$getDeudasCuenta = DeudasModel::getDeudasCuenta($_GET["idCuenta"] , "deudas");
			foreach ($getDeudasCuenta as $key) {
				
				if ($key["origen"] == 1) {
					echo '<tr>
							<td>'.$key["id_deuda"].'</td>
							<td>'.$key["create_time"].'</td>
							<td>'.$key["comentario"].'</td>
							<td>$ '.$key["valor_total"].'</td>
							<td>$ '.$key["valor_parcial"].'</td>
							<td><a title= "Eliminar deuda"href="index.php?action=_appValidation&Cue-5c9e2b3ee90a8='.$_GET["idCuenta"].'&5c9e2ab24293c='.$key["id_deuda"].'"><img src="src/Views/file/images/delete.png" width="20px" heigth="20px"></a></td></tr>';
				}else{

					echo '<tr class="table-success">
							<td>'.$key["id_deuda"].'</td>
							<td>'.$key["create_time"].'</td>
							<td>'.$key["comentario"].'</td>
							<td>$ '.$key["valor_total"].'</td>
							<td>$ '.$key["valor_parcial"].'</td>
							<td><a title= "Eliminar Pago"href="index.php?action=_appValidation&Cue-5c9e2b3ee90a8='.$_GET["idCuenta"].'&5c9e2ab24293c='.$key["id_deuda"].'"><img src="src/Views/file/images/delete.png" width="20px" heigth="20px"></a></td></tr>';
				}
							
			}
		}
	}

	/*actualizacion function deleteDeudas*/

	public function deleteDeudas(){
		#id deuda viene por post name = eliminar
        #origen 1 es deuda
		if (isset($_POST["id_deuda"]) && $_POST["origen"]==1){
			
			$setDeletedeuda = DeudasModel::deleteDeudas($_POST["id_deuda"],"deudas");
			if ($setDeletedeuda == "sucess") {
				header("location:index.php?action=grid_Cuentas");
			}
		} 
	}

	public function searchDeuda(){

		if (isset($_GET["5c9e2ab24293c"])) {
			
			$getSearch = DeudasModel::searchDeuda($_GET["5c9e2ab24293c"], "deudas");

			if ($getSearch["origen"] == 1) {
				echo '<input type="hidden" value="'.$getSearch["id_deuda"].'" name="id_deuda" /><input type="hidden" value="'.$getSearch["origen"].'" name="origen"/>la deuda con valor: $ <b>'.$getSearch["valor_total"].'</b>';
			}

			
		}

	}
	#fin actualizacion
}

?>
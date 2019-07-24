<?php

if (isset($_GET["idPago"])) {
	$idPago = $_GET["idPago"];
}

?>
<form method="post">
	<div class="form-group">
		<label>Cuenta</label>
		<input type="text" name="id_cuenta" class="form-control" value="<?php echo $idPago ?>" readonly />
	</div>
	<div class="form-group">
		<label>Valor Pagado</label>
		<input type="number" name="pago" class="form-control" placeholder="Ingrese valor de pago" required="true">
		
	</div>
	
	<input type="submit" value="Guardar" class="btn btn-success" onclick="disabled = true;this.form.submit()">
</form>
<?php
require("src/Controllers/PagosController.php");
$objpago = new PagosController();
$objpago->insertPago();

?>
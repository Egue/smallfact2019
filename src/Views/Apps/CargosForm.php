<?php

if (isset($_GET["idCargo"])) {
	$idcuenta = $_GET["idCargo"];
}

?>
<form method="post">
	<div class="form-group">
		<label>Cuenta</label>
		<input type="text" name="id_cuenta" class="form-control" value="<?php echo $idcuenta ?>" readonly />
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input type="number" name="cargo" class="form-control" placeholder="Ingrese valor de cargo" required="true">
		
	</div>
	<div class="form-group">
		<label>Concepto</label>
		<input type="text" name="comentario" class="form-control" placeholder="Concepto" required="true">
		
	</div>
	<input type="submit" value="Guardar" class="btn btn-success" onclick="disabled = true;this.form.submit()">
</form>
<?php
require("src/Controllers/CargosController.php");
$objcargo = new CargosController();
$objcargo->insertCargo();

?>
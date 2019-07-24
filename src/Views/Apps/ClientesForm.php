
<form method="post">
	<div class="form-group">
		<label>Nombres</label>
		<input type="text" name="nombres" class="form-control" placeholder="Ingrese nombres de Cliente" required="true">
	</div>
	<div class="form-group">
		<label>Documento</label>
		<input type="number" name="documento" class="form-control" placeholder="Ingrese documento de Cliente" required="true">
		
	</div>
	<input type="submit" value="Guardar" class="btn btn-success" onclick="disabled = true;this.form.submit()">
</form>

<?php
require_once("src/Controllers/ClientesController.php");
$objCliente = new ClientesController();
$objCliente->newCliente();
?>
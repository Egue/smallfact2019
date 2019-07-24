<table class="table table-hover table-sm">
	<thead>
		<tr>
			<th># Cliente</th>
			<th>Nombre Cliente</th>
			<th>Deuda</th>
			<th>Accion</th>
		</tr>
	</thead>
	<tbody>
		<?php
		require_once("src/Controllers/CuentasController.php");
		$objClientes = new CuentasController();
		$objClientes->gridEstadoCuenta();

?>
	</tbody>
</table>


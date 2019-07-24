<div class="jumbotron bg-danger">
  <div class="container">
    <?php
    	require_once("src/Controllers/CuentasController.php");
    	$obj = new CuentasController();
    	$obj->getCuentaOne();

    ?>
    
  </div>
</div>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Id Deuda</th>
			<th>Fecha</th>
			<th>Concepto</th>
			<th>Deuda</th>
			<th>Pagos</th>
			<th>Acción</th>
		</tr>
	</thead>
	<tbody>
		<?php
		require_once("src/Controllers/DeudasController.php");
		$objdeudas = new DeudasController();
		$objdeudas->getDeudasCuenta();
		
		?>
	</tbody>
</table>
<?php
require_once("src/Controllers/DeudasController.php");

#Eliminar deudas

$idCuenta 	= $_GET["Cue-5c9e2b3ee90a8"];
$id_deuda	= $_GET["5c9e2ab24293c"];

$objdelete = new DeudasController();


?>

<form method="POST">
<div class="alert alert-danger" role="alert">
  <strong>Esta seguro que desea eliminar <?php $objdelete->searchDeuda();?> </strong>
</div>
 
	<div class="d-flex justify-content-center">
	<a href="index.php?action=CuentasViews&idCuenta=<?php echo $idCuenta;?>"  class="btn btn-outline-success"> NO</a>
	<input type="submit" class="btn btn-outline-danger" name="eliminar" value="Si">
 
</div>
</form>

<?php
$objdelete->deleteDeudas();

?>
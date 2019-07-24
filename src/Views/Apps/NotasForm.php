<div class="container">
	<form method="post">
		<div class="form-group">
		    <label>Titulo</label>
			<input type="text" class="form-control" name="titulo">
		</div>
        <label>Comentario</label>
		<div class="form-group">
			<textarea name="nota" rows="5" id="comment" class="form-control" required="true"></textarea>
			
		</div>
		<div class="form-group">
			<input type="submit" name="" value="Guardar" class="btn btn-danger">
		</div>
	</form>
</div>
<?php

require_once("src/Controllers/NotasController.php");
$objNotas = new NotasController();
$objNotas->Notasnew();

?>
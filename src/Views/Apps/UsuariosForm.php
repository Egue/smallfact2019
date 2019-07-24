

<div>
	<form method="post">
		<div class="form-group">
		<label>Nombre Usuario</label>
		<input type="text" name="username" class="form-control" placeholder="Ingrese nombre de usuario" required="true">
		</div>

		<div class="form-group">
			<label>Nickname</label>
			<input type="text" name="nickname" class="form-control" placeholder="Ingrese Nickname" required="true">
		</div>

		<div class="form-group">
			<label>Contraseña</label>
			<input type="password" name="password" class="form-control" placeholder="Ingrese Contraseña" required="true">
		</div>

		<input type="submit" value="Guardar" class="btn btn-success" onclick="disabled = true;this.form.submit()">

	</form>
</div>

<?php

require_once("src/Controllers/UsuariosController.php");
$objUsuarios = new UsuariosController();
$objUsuarios->newUser();
?>

<?php

require_once("src/Models/UsuariosModel.php");

/**
 * 
 */
class UsuariosController{
	
	/*nuevo usuario*/

	public function newUser(){
		if (isset($_POST["username"])) {
			$array_user = array("username" => $_POST["username"], "password" => md5($_POST["password"]), "marca" => uniqid("user"), "nickname" => $_POST["nickname"] , "activo"=>1);
			$set_newUser = UsuariosModel::newUser($array_user, "usuarios");
			if ($set_newUser == "success") {
				header("location:index.php");
			}
		}
	}
	
	public function getUsuarios(){
	    //$array_tabla = UsuariosModel::getUsuarios("Usuarios");
	    
	}
}

?>
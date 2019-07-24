<?php
require_once "src/Models/LoginModel.php";

class LoginController{

	public function loginin(){
		if (isset($_POST["user"])) {
			
			$login = ["user"=>$_POST["user"],"password"=>$_POST["password"]];

			$getlogin =  LoginModel::validation($login,"usuarios");
			

			if ($getlogin["nickname"] == $_POST["user"] && $getlogin["password"] == md5($_POST["password"])) {
				session_start();
				#Creando variables de sesion
				$_SESSION["user"]	=	$getlogin["nickname"];
				$_SESSION["iduser"]	=	$getlogin["id_user"];
				$_SESSION["activo"] = $getlogin["activo"];

				header("location:index.php");
			}else{
				header("location:loginsmallfact.php?action=loginerror");
				
			}
		}
	}
}


?>
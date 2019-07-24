<?php


class LogoutController
{
	
	public function Logout(){
		session_destroy();
		header("Location:loginsmallfact.php");
	}
}


?>
<?php
session_start();
if ($_SESSION["activo"]==1) {
	# code...

require_once("src/Controllers/Controller.php");
$objtemplate = new Controller();
$objtemplate->template();


}else{
    
    header("location:loginsmallfact.php");
}
?>
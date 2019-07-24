<?php
require_once("src/Models/EnlacesModel.php");

/**
 * 
 */
class Controller
{   
    private $getEnlaces;
	public function template(){
		require_once("src/Views/Template.php");
	}
	
	public function __construct(){
		if (isset($_GET["action"])) {
			
			$enlacesController 	=	$_GET["action"];
		}else{
			$enlacesController = "main";
		}
		
		$this->getEnlaces = new EnlacesModel($enlacesController);
		
	}
	
	public function __toString(){
	    
	    return (String)$this->getEnlaces;
	}
}


?>
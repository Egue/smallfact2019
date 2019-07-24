<?php

/**
*Controla los enlaces el sistema
**/

class EnlacesModel 
{	
    private $setModel;

	public function __construct($enlacesModel){
	    

		#Diccionario de enlaces de la plataforma
		$enlaces = array("UsuariosForm","ClientesForm","grid_Cuentas","CuentasViews","CargosForm","PagosForm","NotasForm","grid_Notas","_appValidation");

		#
		#Buscar enlace en el diccionario $enlaces los principales aplicaciones
		#
		#

		if (in_array($enlacesModel, $enlaces)) {

			$this->setModel = "src/Views/Apps/".$enlacesModel.".php";
		
		}elseif ($enlacesModel=="main") {
			
			$this->setModel= "src/Views/Apps/_appmain.php";

		}elseif ($enlacesModel=="ok") {
			
			$this->setModel= "src/Views/Apps/form_roles.php";

		}elseif ($enlacesModel 	== "logout") {
			
			session_destroy();
			header("location:loginsmallfact.php");
		}
		else{

			$this->setModel = "src/Views/Apps/_appmain.php";
		}

		return $this->setModel;

	}
	
	public function __toString(){
	    return $this->setModel;
	}
}

?>
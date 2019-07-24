
<?php

require_once ("../../Models/ConnectionModel.php");

class fechas{
    
    
    
    public function sqlFechas(){
        
        $conn = ConnectionModel::connect();
        $stm = $conn->prepare("Select deudas.fecha_genera from deudas ");
        $stm->execute();
        
        return $stm->fetchAll();
    }


    public function fechas_d(){
        $meses = array(            01=>"Enero", 
            02=>"Febrero",
            03=>"Marzo",
            04=>"Abril",
            05=>"Mayo",
            06=>"Junio", 
            07=>"Julio",
            08=>"Agosto",
            09=>"Septiembre",
            10=>"Octubre",
            11=>"Noviembre",
            12=>"Diciembre");
        
        $sql_array = sqlFechas();
        
        foreach ($sql_array as $key){
            echo date_format($key["fecha_genera"], "Y-m-d")."<br>";
            
        }
        
    }
    
    
}

?>
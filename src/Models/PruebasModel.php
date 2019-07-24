
<?php
require_once("ConnectionModel.php");

class PruebasModel{
    
    public function Conn (){
        
        $conn = ConnectionModel::connect();
        $stmt = $conn->prepare("SHOW TABLES");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    
    
}

$obj = new PruebasModel();
$obj->Conn();
var_dump($obj);
?>
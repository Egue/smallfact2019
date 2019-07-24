

<?php
require_once("src/Models/NotasModel.php");

class NotasController{
    
    public function Notasnew(){
        if(isset($_POST["titulo"])){
        
        $arraylist = ["titulo"=>$_POST["titulo"] , "nota" =>$_POST["nota"]];
        $setNota = NotasModel::Notasnew($arraylist,"notas");
        if($setNota == "success"){
            header("location:index.php?action=_appmain");
        }
    }
    }
    
    public function allNotas(){
        session_start();
        $iduser = $_SESSION["iduser"];
        $getNotas = NotasModel::allNotas($iduser,"notas");
        foreach($getNotas as $key){
            echo "<tr>
            <td>".$key["id"]."</td>
            <td>".$key["titulo"]."</td>
            <td>".$key["nota"]."</td></tr>";
        }
    }


}



?>
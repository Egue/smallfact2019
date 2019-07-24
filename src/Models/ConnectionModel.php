

<?php

class ConnectionModel{
    
    public static function connect(){
		$db = new PDO("mysql:host=;dbname=;charset=UTF8","","");
		$db->exec("set names utf8");
		$db->exec("SET lc_time_names = 'es_ES'");
		return $db;
	}
}


?>
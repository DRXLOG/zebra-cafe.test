<?php 
class C_main_connectdb {


	function ConnectDB($host, $dbname, $user, $pass, $charset) {
		try {
			$DBH = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $pass);  
		} catch (PDOException $e) {
			die('Подключение не удалось: ' . $e->getMessage());
		}
  		 return $DBH;
	}
}

?>
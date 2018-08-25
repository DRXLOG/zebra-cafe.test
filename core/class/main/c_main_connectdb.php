<?php 
class C_main_connectdb {

	protected $host = 'localhost';
	protected $dbname = 'zebra_cafe';
	protected $user = 'Admin';
	protected $pass = '123Rowsmw';


	public function ConnectDB() {
		try {
			$DBH = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.'', $this->user, $this->pass);  
		} catch (PDOException $e) {
			die('Подключение не удалось: ' . $e->getMessage());
		}
  		 return $DBH;
	}
}
?>
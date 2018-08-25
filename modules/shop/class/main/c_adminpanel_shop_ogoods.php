<?php 
require 'C:\OpenS\OSPanel\domains\zebra-cafe.test\core\class\main\c_main_connectdb.php';
class C_adminpanel_shop_ogoods
{
	public $item = array();

	function cheked() {
		if (isset($_GET['del'])) {
			$this->delGood();
		} else if (isset($_GET['recover'])) {
			$this->recover();
		}
	}

	function delGood(){
		$C_main_connectdb = new C_main_connectdb;
		$C_main_connectdb->ConnectDB();
		$SHT = $C_main_connectdb->ConnectDB();
			$SConnect = $SHT->query('SELECT * FROM goods WHERE id = '.$_GET['id'].'')->fetch(PDO::FETCH_ASSOC);
			  	foreach($SConnect as $key=>$value) {
			    	$this->item[$key] = $value;	 
    			}
    			echo json_encode($this->item);
			$query = "DELETE FROM goods WHERE id = ".$_GET['id']."";
			$Connect = $SHT->prepare($query);
			$result = $Connect->execute();
	}

	function recover(){
		$this->item = $_GET['item'];
		$C_main_connectdb = new C_main_connectdb;
		$C_main_connectdb->ConnectDB();
		$SHT = $C_main_connectdb->ConnectDB();
		$keys = array_keys($this->item);
		$fieldlist=implode(', ', $keys); 
		foreach ($this->item as $key=>$value) {
			$values[':'.$key] = $value;
		}   	
    	$query = "INSERT INTO goods (".$fieldlist.") VALUES (:id, :code, :name, :description, :price, :img, :ord)";
    	$Connect = $SHT->prepare($query);
		$Connect->execute($values);
    	
	}
}

?>
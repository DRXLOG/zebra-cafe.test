<?php 

require 'C:/OpenS/OSPanel/domains/zebra-cafe.test/core/class/main/c_main_connectdb.php';
require 'c_adminpanel_session.php';


class C_adminpanel_login {


	function AP_check_login() {
		$C_main_connectdb = new C_main_connectdb;
		$C_main_connectdb->ConnectDB('localhost', 'zebra_cafe', 'Admin', '123Rowsmw', 'utf8');
		$login = $_GET['login'];
		$SHT = $C_main_connectdb->ConnectDB('localhost', 'zebra_cafe', 'Admin', '123Rowsmw', 'utf8');		
		$Connect = $SHT->query('SELECT login FROM admin');
		while ($row = $Connect->fetch()) {
    		if ($row['login'] == $login) {
    		$login_acess = true;
    		return $login_acess;
    		} else {
    		header('location:http://zebra-cafe.test/core/views/admin_login.php');
    		}
		}
	}

	function AP_check_password() {
		$C_main_connectdb = new C_main_connectdb;
		$C_main_connectdb->ConnectDB('localhost', 'zebra_cafe', 'Admin', '123Rowsmw', 'utf8');
		$password = $_GET['password'];
		$SHT = $C_main_connectdb->ConnectDB('localhost', 'zebra_cafe', 'Admin', '123Rowsmw', 'utf8');
		$Connect = $SHT->query('SELECT password FROM admin');
		while ($row = $Connect->fetch())
		{
    		if ($row['password'] == $password) {
    		$pass_acess = true;
    		return $pass_acess;
    		} else {
    		header('location:http://zebra-cafe.test/core/views/admin_login.php');
    		}
		}
	}

	function AP_check_logpass() {
		$C_adminpanel_login = new C_adminpanel_login;
		$pass_acess = $C_adminpanel_login->AP_check_password();
		$login_acess = $C_adminpanel_login->AP_check_login();
		if ($pass_acess && $login_acess == true) {
		$C_adminpanel_session = new C_adminpanel_session;
		$C_adminpanel_session->SessionOpen();
		header('location:http://zebra-cafe.test/core/views/admin_panel.php');
		} else {
			$C_adminpanel_session = new C_adminpanel_session;
			$C_adminpanel_session->SessionBad();	
			echo '<script type="text/javascript">
  		location.replace("http://zebra-cafe.test/core/views/admin_login.php");
		</script>';
		}	
	}
}
?>
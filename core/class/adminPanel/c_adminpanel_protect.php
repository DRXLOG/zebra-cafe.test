<?php 
class C_adminpanel_protect
{

	function acessAllow() {
		session_start();
		if ($_SESSION['user_role']==1) {
			$Msglogin = $_SESSION['username'];
			return $Msglogin;
		}
	}

	function acessDeny() {
		session_start();
		if ($_SESSION['user_role']!=1) {
			header('location:http://zebra-cafe.test/core/views/admin_login.php');
		}
	}	

	function MSGallow() {
		 echo $this->acessAllow();
	}

	function PSessionDie() {
		
	}
}
?>
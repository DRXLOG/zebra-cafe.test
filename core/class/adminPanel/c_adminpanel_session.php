<?php 
class C_adminpanel_session {
	
	function SessionOpen() {
		session_start();
		$_SESSION['username'] = $_GET['login'];
		$_SESSION['user_role'] = 1;
	}

	function SessionClose() {
		unset($_SESSION['username']);
		unset($_SESSION['user_role']);
		session_destroy();
	}

	function SessionBad() {
		session_start();
		$_SESSION['username'] = "Не верный логин или пароль";
	}

	function SessionBadMSG() {
		session_start();
		if ($_SESSION['username'] == "Не верный логин или пароль") {
			echo $_SESSION['username'];
			unset($_SESSION['username']);
			unset($_SESSION['user_role']);
			session_destroy();
		} else {
			unset($_SESSION['username']);
			unset($_SESSION['user_role']);
			session_destroy();
		}
		
	}
}
?>
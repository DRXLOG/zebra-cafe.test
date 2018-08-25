<?php 
require '../class/adminPanel/c_adminpanel_session.php';
$C_adminpanel_session = new C_adminpanel_session;
$C_adminpanel_session->SessionBadMSG();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Авторизация в админ панель</title>
	<link rel="stylesheet" href="../../templates/css/admin.css">
</head>
<body>	
<div class="pas_main_block">
<div class="pas_block_h1"><h1>Админ панель</h1></div>
<div class="pas_block">
	<form name="form_login" action="http://zebra-cafe.test/core/models/m_adminpanel_login.php" method="GET">
		<p>Логин  <input type="text" name="login" value="login"></p><br>
		<p>Пароль <input type="password" name="password" value="password" ></p><br>
		<button type="submit" method="GET" value="Вход" action="http://zebra-cafe.test/core/models/m_adminpanel_login.php">Вход</button>
	</form>
</div>	
</div>
</body>
</html>


<?php 
require '../../../core/models/m_adminpanel_protect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Админ панель</title>
	<link rel="stylesheet" href="../../../core/assets/css/a_adminpanel_admin_panel.css">
	<link rel="stylesheet" href="../assets/css/c_adminpanel_shop.css">
</head>
<body>
	<div class="ad_main_wrapper_menu">
		<div class="ad_main_menu">
			<div class="ad_main_menu_db" id="ad_main_menu_db_left">
				<a href="http://zebra-cafe.test">На сайт</a>
				<a href="#">В магазин</a>
			</div>
			<div class="ad_main_menu_db" id="ad_main_menu_db_right">
				<img src="../assets/img/svg/user.svg" alt="" style="fill">
				<p><?php  $C_adminpanel_protect->MSGallow(); ?></p>
				<a href="http://zebra-cafe.test/core/views/admin_login.php">Выход</a>
			</div>				
		</div>
	</div>
	<div class="ad_main_wrapper">
		<div class="ad_main_category">
			<ul>
				<li><a href="#">Безопасность</a></li>
				<li><a href="http://zebra-cafe.test/modules/shop/views/v_adminpanel_shop.php">Магазин</a></li>
				<li><a href="#">Страницы</a></li>
				<li><a href="#">Новости</a></li>
				<li><a href="#">События</a></li>
			</ul>
		</div>
		<div class="ad_main_workblock">
			<div class="ad_shop_menu">
				<ul>
					<li>Товары</li>
					<li>Категории</li>
					<li>Добавление</li>
				</ul>
			</div>
			<div class="ad_shop_goods">
				<?php require '../models/m_adminpanel_shop_goods.php'; ?>
			</div>
		</div>
	</div>
</body>
</html>
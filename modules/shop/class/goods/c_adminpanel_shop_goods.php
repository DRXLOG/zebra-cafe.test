<?php 

require 'C:\OpenS\OSPanel\domains\zebra-cafe.test\core\class\main\c_main_connectdb.php';

class C_adminpanel_shop_goods 
{

	function showGoods() {
		$C_main_connectdb = new C_main_connectdb;
		$C_main_connectdb->ConnectDB('localhost', 'zebra_cafe', 'Admin', '123Rowsmw', 'utf8');
		$SHT = $C_main_connectdb->ConnectDB('localhost', 'zebra_cafe', 'Admin', '123Rowsmw', 'utf8');
		$Connect = $SHT->query('SELECT name,img FROM goods');
		while ($row = $Connect->fetch()) {
    		echo
    		'<div class="ad_shop_good_wrapper">'.
    		'<img src="http://zebra-cafe.test/modules/shop/assets/img/jpg/goods/'.$row['img'].'" alt="">'.
    		'<div class="ad_shop_good_icons">
    			<a href="#"><img src="http://zebra-cafe.test/modules/shop/assets/img/svg/pen.svg" alt=""></a>
				<a href="#" id="ad_shop_good_pen"><img src="http://zebra-cafe.test/modules/shop/assets/img/svg/trash.svg" alt=""></a>
    		</div>'.
    		'<div class="ad_shop_good_name"><p>'.$row['name'].'</p></div>'.
    		'</div>'
    		;
    		}
	}

}
?>
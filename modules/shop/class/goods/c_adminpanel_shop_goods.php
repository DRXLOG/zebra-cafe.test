<?php 

require 'C:\OpenS\OSPanel\domains\zebra-cafe.test\core\class\main\c_main_connectdb.php';

class C_adminpanel_shop_goods 
{

	function showGoods() {
		$C_main_connectdb = new C_main_connectdb;
		$C_main_connectdb->ConnectDB('localhost', 'zebra_cafe', 'Admin', '123Rowsmw', 'utf8');
		$SHT = $C_main_connectdb->ConnectDB('localhost', 'zebra_cafe', 'Admin', '123Rowsmw', 'utf8');
		$Connect = $SHT->query('SELECT name,img,id FROM goods');
		while ($row = $Connect->fetch()) {
    		echo
    		'<div class="ad_shop_good_wrapper" id="doory_'.$row['id'].'">
    		  <img src="http://zebra-cafe.test/modules/shop/assets/img/jpg/goods/'.$row['img'].'.jpg" alt="">
    		  <div class="ad_shop_good_icons">
    			<a href="#"><img src="http://zebra-cafe.test/modules/shop/assets/img/svg/pen.svg" alt=""></a>
                <a href="#" id="a_delete" onclick="'.$row['id'].'"><img src="http://zebra-cafe.test/modules/shop/assets/img/svg/trash.svg" alt=""></a>
    		  </div>
    		  <div class="ad_shop_good_name">
                <p id="good_name_'.$row['id'].'">'.$row['name'].'</p>
              </div>
    		</div>'
    		;
    		static $goods = array();
    		array_push($goods, $row['name']);		
    		}
	}

}
?>
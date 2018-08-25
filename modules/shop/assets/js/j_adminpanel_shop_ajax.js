$( document ).ready(function() {
    console.log( "ready!" );
    var str = {};
    var diver = {};
    var adiver = 0;
    var id = 0;
    var goodName = {};

    $(function(){
    $(document).on('click', '[id=a_delete]', function() {
    	event.preventDefault();
    	id = $(this).attr('onclick');  	
    	$.ajax({
    		type: "GET",
  			url: "http://zebra-cafe.test/modules/shop/models/m_adminpanel_shop_ogoods.php",
  			data: {id:id, del: "del"},
  			success: function(data) {
  			//alert(data);
  			str[id] = data;
  			//console.log(str);
  			//console.log(id-1);
  			ida = (id-1);
  			idb = (id+1);
  			bdiver = $('#doory_' + idb);
  			adiver = $('#doory_' + ida);
  			diver[id] = $('#doory_' + id);
  			goodName[id] = $('#good_name_' + id).html();
 			//alert(diver);
     		$('#doory_' + id).remove();
     			$("#warning_" + id).show(100);
    			$("#warning_" + id).empty();
     			$("<div/>").attr({'id':'warning_' + id, 'class':'warning'}).appendTo('.ad_main_warning');
    		 	$("<p>Товар " + goodName[id] + " удалён</p>").appendTo('#warning_' + id); 
    			$("<a href=''>Восстановить</a>").attr({'id': 'rewrite', 'onClick': '' + id}).appendTo('#warning_' + id);
			}
		});
    });
    });

   	$(function(){
    $(document).on('click', '[id=rewrite]', function() {
    	event.preventDefault();
    	var item = JSON.parse(str[$(this).attr('onClick')]);
    	var dive = $(this).attr('onClick');
    	$.ajax({
    		type: "GET",
  			url: "http://zebra-cafe.test/modules/shop/models/m_adminpanel_shop_ogoods.php",
  			data: {recover: "recover", item: item},
  			success: function(data) {
    			$(diver[dive]).appendTo('.ad_shop_goods');
    			$("#warning_" + dive).empty();
    			$("<p>Товар " + goodName[dive] + " Восстановлен</p>").appendTo('#warning_' + dive);
    			$("#warning_" + dive).hide(2000);
  			}
			});    	
		});
	});

});
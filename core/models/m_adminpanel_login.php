<?php 
require '../class/adminPanel/c_adminpanel_login.php';

$C_adminpanel_login = new C_adminpanel_login;
$C_adminpanel_login->AP_check_login();
$C_adminpanel_login->AP_check_password();
$C_adminpanel_login->AP_check_logpass();
?>
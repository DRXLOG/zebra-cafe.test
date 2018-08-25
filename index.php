<?php 
define ('DIRSEP', DIRECTORY_SEPARATOR);
$site_path = realpath(dirname(__FILE__) . DIRSEP . '..' . DIRSEP) . DIRSEP;
define ('site_path', $site_path);

spl_autoload_register(function ($class_name) {
    include 'core/'.$class_name . '.php';
});

$route = new route;


?>


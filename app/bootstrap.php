<?php 

require_once 'config/config.php';

//Autoload
spl_autoload_register(function ($clase){
	require_once 'libraries/'.$clase.'.php';
})

?>
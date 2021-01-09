<?php

define( 'BASE_PATH', 'http://localhost/school/index.php');
//
define( 'DB_HOST', 'localhost' );
//
define( 'DB_USERNAME', 'root');
//
define( 'DB_PASSWORD', 'nabeel');
//
define( 'DB_NAME', 'school');

// $GLOBALS['USERID'] = null;

//CLass Loader
spl_autoload_register(function($class){
	require_once 'classes/'.$class.'.php';
});


?>
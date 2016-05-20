<?php 
session_start();

require_once 'includes/sanitize.php';

$config = array(
	'db_host'		=> 'localhost',
	'db_name'		=> 'mrf',
	'db_username'	=> 'root',
	'db_password'	=> ''
);

//start autoload
spl_autoload_register(function($class) {
	require_once 'classes/' . $class . '.php';
});
?>
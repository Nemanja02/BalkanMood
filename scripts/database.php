<?php  
	include 'medoo.php';
	use Medoo\Medoo;
	$database = new Medoo([
	    'database_type' => 'mysql',
	    'database_name' => 'rampage',
	    'server' => 'localhost',
	    'username' => 'root',
	    'password' => ''
	]);
?>
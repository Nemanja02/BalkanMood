<?php  
	include 'medoo.php';
	use Medoo\Medoo;
	include 'database.php';
	 
	$database->insert('users', [
	    'uuid' => uniqid(0 ,16),
	    'username' => 'Nemanja02',
	    'email' => 'nemanja02marjanov@gmail.com',
	    'last_visit' => time(),
	    'first_visit' => time(),
	    'first_name' => 'Nemanja',
	    'last_name' => 'Marjanov',
	    'verified' => 1
	]);
?>
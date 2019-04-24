<?php  
	$_SESSION = null;
	session_unset();
	session_destroy();
	header('location: ../index.php');
?>
<?php  
	include 'scripts/database.php';
	$invite = "/";
	if (isset($_GET['invite'])) $invite = $_GET['invite'];
	function getRealIpAddr() {
	    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	      $ip=$_SERVER['HTTP_CLIENT_IP'];
	    }
	    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	    }
	    else {
	      $ip=$_SERVER['REMOTE_ADDR'];
	    }
	    return $ip;
	}
	$database->query("
		INSERT INTO visitors
		(ip_address, `time`, visitor_page, visitor_refferer, browser)
		VALUES ('".getRealIpAddr()."', ".time().", '".$_SERVER['REQUEST_URI']."', '".$invite."', '".$_SERVER['HTTP_USER_AGENT']."')
		ON DUPLICATE KEY UPDATE
			`time` = ".time()."
	");

	function getVisitors() {
		global $database;
		global $time;
		return $database->count('visitors', [
			'time[>]' => time() - 86400000
		]);
	}
?>
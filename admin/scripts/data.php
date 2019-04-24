<?php  
	include '../scripts/database.php';

	function registeredUsers() {
		global $database;
		return $database->count('users', [
			'verified' => 1
		]);
	}

	function bannedUsers() {
		global $database;
		return $database->count('users', [
			'banned' => 1
		]);
	}

	function getVisitors() {
		global $database;
		return count($database->select('visitors', 'ip_address', [
			'GROUP' => 'ip_address',
			'time[>]' => time() - 86400000
		]));
	}

	function getVerifiedUsers() {
		global $database;
		return $database->select('users', [
			'username',
			'email',
			'first_name',
			'last_name'
		], [
			'verification' => 1
		]);
	}
?>
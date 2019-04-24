<?php  
	include 'database.php';

	function getUsername($uuid) {
		global $database;
		return $database->select('users', [
			'username'
		], [
			'uuid' => $uuid
		])[0]['username'];
	}

	function getFirstName($uuid) {
		global $database;
		return $database->select('users', [
			'first_name'
		], [
			'uuid' => $uuid
		]);
	}

	function getLastName($uuid) {
		global $database;
		return $database->select('users', [
			'last_name'
		], [
			'uuid' => $uuid
		]);
	}

	function isBanned($uuid) {
		global $database;
		return $database->select('users', [
			'banned'
		], [
			'uuid' => $uuid
		]);
	}

	function isVerified($uuid) {
		global $database;
		return $database->select('users', [
			'verified'
		], [
			'uuid' => $uuid
		]);
	}

	function hasVerification($uuid) {
		global $database;
		return $database->select('users', [
			'verification'
		], [
			'uuid' => $uuid
		])[0]['verification'] == 1;
	}

	function isOnline($uuid) {
		global $database;
		return $database->select('users', [
			'online'
		], [
			'uuid' => $uuid
		]);
	}

	function getUUID($username) {
		global $database;
		return $database->select('users', [
			'uuid'
		], [
			'username' => $username
		])[0]['uuid'];
	}
?>
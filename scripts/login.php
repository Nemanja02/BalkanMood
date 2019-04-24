<?php  
	session_start();
	include 'user.php';
	$username = $_POST['username'];
	$pwd = hash('sha256', $_POST['pwd']);

	if (!uniqueUsername($username)) {
		$_SESSION['error'] = ['message' => 'Ovaj nalog ne postoji!'];
		header("location: ../login.php");
		echo "nalog";
	}

	if (!checkPassword($username)) {
		$_SESSION['error'] = ['message' => 'Pogresna sifra!'];
		header("location: ../login.php");
	}

	// Uspesna prijava 

	$_SESSION['uuid'] = getUUID($username);
	$_SESSION['username'] = $username;
	header('location: ../index.php');


	function uniqueUsername($username) {
		global $database;
		return !$database->has('users', [
			'username' => $username
		]);
	}

	function checkPassword($username) {
		global $database;
		global $pwd;
		$db_pwd = $database->select('users', [
			'password'
		], [
			'username' => $username
		]);
		return $db_pwd[0]['password'] == $pwd;
	}
?>
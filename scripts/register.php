<?php  
	session_start();
	include 'database.php';
	$username = $_POST['username'];
	$email = $_POST['mail'];
	$pwd = $_POST['pwd'];
	$pwd_conf = $_POST['pwd_conf'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$uuid = uniqid(0 ,16);
	$_SESSION['error'] = null;
	$valid = true;

	if ($pwd != $pwd_conf) {
		$_SESSION['error'] = ["message" => "Sifre se ne poklapaju!"];
		header('location: ../register.php');
		$valid = false;
	}

	if (!uniqueMail($email)) {
		$_SESSION['error'] = ["message" => "Ovaj email je vec registrovan!"];
		header('location: ../register.php');
		$valid = false;
	}

	if (!uniqueUsername($username)) {
		$_SESSION['error'] = ["message" => "Ovo ime je zauzeto!"];
		header('location: ../register.php');
		$valid = false;
	}

	if ($valid) {
		$database->insert('users', [
			'uuid' => $uuid,
		    'username' => $username,
		    'password' => hash('sha256', $pwd),
		    'email' => $email,
		    'last_visit' => time(),
		    'first_visit' => time(),
		    'first_name' => $first_name,
		    'last_name' => $last_name
		]);

		$_SESSION['uuid'] = $uuid;
		$_SESSION['username'] = $username;
	}

	function uniqueMail($email) {
		global $database;
		return !$database->has('users', [
			'email' => $email
		]);
	}

	function uniqueUsername($username) {
		global $database;
		return !$database->has('users', [
			'username' => $username
		]);
	}
?>
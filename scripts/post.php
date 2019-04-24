<?php  
	session_start();
	include 'user.php';
	$valid = true;
	if (isset($_SESSION['uuid'])) {
		if (!hasVerification($_SESSION['uuid'])) $valid = false;
	} else {
		$valid = false;
	}
	if ($valid) {
		$title = $_POST['title'];
		$content = $_POST['content'];
		$uuid = $_SESSION['uuid'];
		$category = $_POST['category'];
		$time = time();

		$database->insert('posts', [
			'title' => $title,
			'content' => $content,
			'section' => $category,
			'posted_by' => $uuid,
			'posted_at' => $time,
			'comments' => '[]'
		]);
	}
	header('location: ../index.php');
?>
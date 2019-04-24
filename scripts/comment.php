<?php  
	$conn = mysqli_connect('localhost', 'root', '', 'rampage');
	$comment = [
		'user' => $_POST['uuid'],
		'msg' => $_POST['msg'],
		'time' => time()
	];
	$id = $_POST['id'];
	$comment = json_encode($comment);
	$conn->query("UPDATE posts SET comments = JSON_ARRAY_APPEND(comments, '$', '$comment') WHERE post_id = $id") or die(mysqli_error($conn));
?>	
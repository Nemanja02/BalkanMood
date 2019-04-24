<?php 
	session_start(); 
	include 'scripts/getposts.php';
	$sections = ['stars', 'sport', 'hronika', 'region', 'planeta', 'zabava'];
	if (!in_array($_GET['view'], $sections)) header('location: not-found.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Naslovna</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
	<?php include 'components/nav.php' ?>

	<main>
		<div class="wrapper">
			<div class="container">
				<div class="tag"><?php echo ucfirst($_GET['view']); ?></div>
				<div class="clear"></div>

				<?php getBySection($_GET['view']) ?>

				<div class="clear"></div>
			</div>
		</div>
	</main>
</body>
</html>
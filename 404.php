<?php 
	session_start(); 
	include 'scripts/getposts.php';
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
				<div class="not-found">
					<h1>404</h1>
					<h2>Trazena stranica ne postoji.</h2>
					<a href="index.php"><div class="button">Nazad</div></a>
				</div>

				<div class="clear"></div>
			</div>
		</div>
	</main>
</body>
</html>
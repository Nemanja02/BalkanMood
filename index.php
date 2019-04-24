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
				<div class="tag">Najnovije</div>
				<div class="clear"></div>
				<div class="grid-l-mm">
					<?php getLatest(); ?>
				</div>

				<?php getBySections() ?>

				<div class="clear"></div>
			</div>
		</div>
	</main>
</body>
</html>
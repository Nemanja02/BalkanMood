<nav>
	<div class="wrapper">
		<section class="top">
			<div class="row" style="height: 0px;">
				<div class="logo">Balkan Mood</div>
				<form>
					<button type="submit"><i class="material-icons">search</i></button>
	                <div class="input-field col s3" style="margin-left: 530px">
	                    <input value="" id="query" type="text" class="validate" placeholder="Search" style="height: 25px">
	                </div>
				</form>
			</div>
			<div class="clear"></div>
		</section>
		<section class="bottom">
			<ul>
				<a href="index.php"><li>Naslovna</li></a>
				<a href="page.php?view=stars"><li>Stars</li></a>
				<a href="page.php?view=sport"><li>Sport</li></a>
				<a href="page.php?view=hronika"><li>Hronika</li></a>
				<a href="page.php?view=region"><li>Region</li></a>
				<a href="page.php?view=planeta"><li>Planeta</li></a>
				<a href="page.php?view=zabava"><li>Zabava</li></a>
			</ul>
			<?php  
				if (isset($_SESSION['username'])) {
					echo '
						<img class="profile-pic" src="https://europacity.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png">
						<div class="username">'.$_SESSION['username'].'</div>
					';
				} else {
					echo '
						<div class="username"><a href="login.php">Login</a> / <a href="register.php">Sign up</a></div>
					';
				}
			?>
			<div class="clear"></div>
		</section>
	</div>
</nav>
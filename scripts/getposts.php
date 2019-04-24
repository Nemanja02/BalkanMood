<?php  
	include 'scripts/database.php';
	include 'scripts/date.php';

	$sections = ['stars', 'sport', 'hronika', 'region', 'planeta', 'zabava'];

	function getLatest() {
		global $database;
		$posts = $database->select('posts', [
			'title',
			'posted_at',
			'content',
			'post_id'
		], [
			'LIMIT' => 3,
			'ORDER' => ['post_id' => 'DESC']
		]);
		
		echo '
			<a href="view.php?viewkey='.$posts[0]['post_id'].'"><div class="box">
				<div class="overlay">
					<div class="overlay-content">
						<div class="title">'.$posts[0]['title'].'</div>
						<div class="info">
							<i class="material-icons">access_time</i> '.dateFormat($posts[0]['posted_at']).'
						</div>
					</div>
				</div>
				<img src="'.getCover($posts[0]['content']).'">
			</div></a>
		';
		echo '
			<div class="box">
				<div class="image-wrapper">
					<div class="overlay">
						<div class="overlay-content">
							<div class="info">
								<i class="material-icons">access_time</i> '.dateFormat($posts[1]['posted_at']).'
							</div>
						</div>
					</div>
					<img src="'.getCover($posts[1]['content']).'">
				</div>
				<div class="title">'.$posts[1]['title'].'</div>
			</div>
		';
		echo '
			<div class="box">
				<div class="image-wrapper">
					<div class="overlay">
						<div class="overlay-content">
							<div class="info">
								<i class="material-icons">access_time</i> '.dateFormat($posts[2]['posted_at']).'
							</div>
						</div>
					</div>
					<img src="'.getCover($posts[2]['content']).'">
				</div>
				<div class="title">'.$posts[2]['title'].'</div>
			</div>
		';
	}

	function getBySections() {
		global $database, $sections;
		foreach ($sections as $section) {
			$posts = $database->select('posts', [
				'title',
				'posted_at',
				'content'
			], [
				'LIMIT' => 6,
				'ORDER' => ['post_id' => 'DESC'],
				'section' => $section
			]);
			if (count($posts) > 0) {
				echo '<div class="tag">'.ucfirst($section).'</div>';
				echo '<div class="grid-mmm">';
				foreach ($posts as $post) {
					echo '
						<div class="box">
						<div class="image-wrapper">
							<div class="overlay">
							<div class="overlay-content">
								<div class="title">'.$post['title'].'</div>
								<div class="info">
									<i class="material-icons">access_time</i> '.dateFormat($post['posted_at']).'	
								</div>
							</div>
						</div>
						<img src="'.getCover($post['content']).'">
						</div>
						<div class="title">Ovo je neki drugi naslov naslov naslov</div>
					</div>
					';
				}
				echo '<div class="clear"></div>';
				echo '</div>';
			}
		}
	}

	function getBySection($section) {
		global $database, $sections;
		$posts = $database->select('posts', [
			'title',
			'posted_at',
			'content'
		], [
			'LIMIT' => 6,
			'ORDER' => ['post_id' => 'DESC'],
			'section' => $section
		]);
		if (count($posts) > 0) {
			echo '<div class="grid-mmm">';
			foreach ($posts as $post) {
				echo '
					<div class="box">
					<div class="image-wrapper">
						<div class="overlay">
						<div class="overlay-content">
							<div class="title">'.$post['title'].'</div>
							<div class="info">
								<i class="material-icons">access_time</i> '.dateFormat($post['posted_at']).'	
							</div>
						</div>
					</div>
					<img src="'.getCover($post['content']).'">
					</div>
					<div class="title">Ovo je neki drugi naslov naslov naslov</div>
				</div>
				';
			}
			echo '<div class="clear"></div>';
			echo '</div>';
		}
	}

	function getCover($content) {
		$result = preg_match_all('/<img.*?src\s*=.*?>/', $content, $matches, PREG_SET_ORDER);
		$matches = $matches[0][0];
		preg_match('/src="([^"]+)/i',$matches, $image);
		$origImageSrc = str_ireplace( 'src="', '',  $image[0]);
		return $origImageSrc;
	}
?>
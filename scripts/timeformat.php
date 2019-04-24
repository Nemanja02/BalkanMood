<?php 
	function timeformat($date) {
		$time = time();
		$substract = $time - $date;
		$newtime = "Just now";
		$substract = floor($substract);
		if ($substract > pow(60, 0)) {
			$format = $substract;
			if ($format == 1) {
				$newtime = $format . " second ago";
			} else {
				$newtime = $format . " seconds ago";
			} 
		} 
		if ($substract > pow(60, 1)) {
			$format = round($format / pow(60, 1));
			if ($format < 2) {
				$newtime = $format . " minute ago";
			} else {
				$newtime = $format . " minutes ago";
			}
		}
		if ($substract > pow(60, 2)) {
			$format = round($substract / pow(60, 2));
			if ($format < 2) {
				$newtime = $format . " hour ago";
			} else {
				$newtime = $format . " hours ago";
			}
		}
		if ($substract > pow(60, 2)*24) {
			$format = round($substract / pow(60, 2)/24);
			if ($format < 2) {
				$newtime = $format . " day ago";
			} else {
				$newtime = $format . " days ago";
			}
		}
		if ($substract > pow(60, 2)*24*30) {
			$format = round($substract / pow(60, 2)/24/30);
			if ($format < 2) {
				$newtime = $format . " month ago";
			} else {
				$newtime = $format . " months ago";
			}
		}
		if ($substract > pow(60, 2)*24*30*12) {
			$format = round($substract / pow(60, 2)/24/30/12);
			if ($format < 2) {
				$newtime = $format . " year ago";
			} else {
				$newtime = $format . " years ago";
			}
		}

		return $newtime;
	}
?>
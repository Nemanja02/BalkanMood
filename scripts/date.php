<?php  
	function dateFormat($time) {
		$date = date('j. M, Y H:i', intval($time));
		$date = str_replace('Jan', 'Januar', $date);
		$date = str_replace('Feb', 'Februar', $date);
		$date = str_replace('Mar', 'Mart', $date);
		$date = str_replace('Apr', 'April', $date);
		$date = str_replace('May', 'Maj', $date);
		$date = str_replace('Jun', 'Jun', $date);
		$date = str_replace('Jul', 'Jul', $date);
		$date = str_replace('Aug', 'Avgust', $date);
		$date = str_replace('Sep', 'Septembar', $date);
		$date = str_replace('Oct', 'Oktobar', $date);
		$date = str_replace('Nov', 'Novembar', $date);
		$date = str_replace('Dec', 'Decembar', $date);

		return $date;
	}
?>
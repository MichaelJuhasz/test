<?php
	date_default_timezone_set("America/New_York");
	echo date("g:i:s a");
	$hour = intval(date("H"));
	if ($hour < 6 || $hour >= 20){
		$backgroundColor = "night";
	} else {
		$backgroundColor = "day";
	}
?>
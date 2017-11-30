<?php
	// Object oriented style
	$date = new DateTime(null, new DateTimeZone('Asia/Seoul'));
	$tz = $date->getTimezone();
	echo $tz->getName();

	echo "<br>";
	
	// Procedural style
	$date = date_create(null, timezone_open('America/New_York'));
	$tz = date_timezone_get($date);
	echo timezone_name_get($tz);
?>

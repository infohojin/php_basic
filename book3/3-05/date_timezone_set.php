<?php
	// Object oriented style
	$date = new DateTime('2017-08-01', new DateTimeZone('Asia/Seoul'));
	echo $date->format('Y-m-d H:i:sP') . "<br>";

	$date->setTimezone(new DateTimeZone('Europe/London'));
	echo $date->format('Y-m-d H:i:sP') . "<br>";

	// Procedural style
	$date = date_create('2017-08-08', timezone_open('Asia/Tokyo'));
	echo date_format($date, 'Y-m-d H:i:sP') . "<br>";

	date_timezone_set($date, timezone_open('America/New_York'));
	echo date_format($date, 'Y-m-d H:i:sP') . "<br>";
?>

<?php
	// Object oriented style
	$date = new DateTime('2017-08-08');

	$date->setTime(14, 55);
	echo $date->format('Y-m-d H:i:s') . "<br>";

	$date->setTime(14, 55, 24);
	echo $date->format('Y-m-d H:i:s') . "<br>";

	// Procedural style
	$date = date_create('2017-08-09');

	date_time_set($date, 14, 55);
	echo date_format($date, 'Y-m-d H:i:s') . "<br>";

	date_time_set($date, 14, 55, 24);
	echo date_format($date, 'Y-m-d H:i:s') . "<br>";
?>

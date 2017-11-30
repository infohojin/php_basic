<?php
	// Object oriented style
	$date = new DateTime('2017-08-20');
	$date->sub(new DateInterval('P10D'));
	echo $date->format('Y-m-d') . "<br>";

	// Procedural style
	$date = date_create('2017-08-20');
	date_sub($date, date_interval_create_from_date_string('15 days'));
	echo date_format($date, 'Y-m-d');
?>

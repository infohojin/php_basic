<?php
	// Object oriented style
	$date = new DateTime();

	$date->setISODate(2017, 2);
	echo $date->format('Y-m-d') . "<br>";

	$date->setISODate(2017, 2, 7);
	echo $date->format('Y-m-d') . "<br>";

	// Procedural style
	$date = date_create();

	date_isodate_set($date, 2018, 2);
	echo date_format($date, 'Y-m-d') . "<br>";

	date_isodate_set($date, 2018, 2, 7);
	echo date_format($date, 'Y-m-d') . "<br>";
?>

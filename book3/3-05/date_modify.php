<?php
	// Object oriented style
	$date = new DateTime('2017-12-12');
	$date->modify('+1 day');
	echo $date->format('Y-m-d');

	echo "<br>";

	// Procedural style
	$date = date_create('2018-12-24');
	date_modify($date, '+1 day');
	echo date_format($date, 'Y-m-d');
?>

<?php
	// Object oriented style
	$date = new DateTime('2018-07-01');
	echo $date->format('Y-m-d H:i:s');

	echo "<br>";

	// Procedural style
	$date = date_create('2018-08-01');
	echo date_format($date, 'Y-m-d H:i:s');
?>

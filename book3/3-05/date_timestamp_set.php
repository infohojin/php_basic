<?php
	// Object oriented style
	$date = new DateTime();
	echo $date->format('U = Y-m-d H:i:s') . "<br>";

	$date->setTimestamp(1502176161);
	echo $date->format('U = Y-m-d H:i:s') . "<br>";

	// Procedural style
	$date = date_create();
	echo date_format($date, 'U = Y-m-d H:i:s') . "<br>";

	date_timestamp_set($date, 1502176161);
	echo date_format($date, 'U = Y-m-d H:i:s') . "<br>";
?>

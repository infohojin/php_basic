<?php
	// Object oriented style
	$date = new DateTime();
	echo $date->getTimestamp();

	echo "<br>";
	
	// Procedural style
	$date = date_create();
	echo date_timestamp_get($date);
?>

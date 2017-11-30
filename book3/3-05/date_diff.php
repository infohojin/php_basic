<?php
	// Object oriented style
	$datetime1 = new DateTime('2017-08-08');
	$datetime2 = new DateTime('2017-08-13');
	$interval = $datetime1->diff($datetime2);
	echo $interval->format('%R%a days');

	echo "<br>";
	// Procedural style
	$datetime1 = date_create('2017-08-11');
	$datetime2 = date_create('2017-08-13');
	$interval = date_diff($datetime1, $datetime2);
	echo $interval->format('%R%a days');
?>

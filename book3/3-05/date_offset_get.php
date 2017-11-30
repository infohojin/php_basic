<?php
	// Object oriented style
	$winter = new DateTime('2018-12-21', new DateTimeZone('America/New_York'));
	$summer = new DateTime('2017-08-8', new DateTimeZone('America/New_York'));

	echo $winter->getOffset() . "<br>";
	echo $summer->getOffset() . "<br>";

	// Procedural style
	$winter = date_create('2018-12-21', timezone_open('America/New_York'));
	$summer = date_create('2017-08-9', timezone_open('America/New_York'));

	echo date_offset_get($winter) . "<br>";
	echo date_offset_get($summer) . "<br>";
?>

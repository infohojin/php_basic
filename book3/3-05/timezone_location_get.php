<?php
	$tz = new DateTimeZone("Europe/Prague");
	print_r($tz->getLocation());
	print_r(timezone_location_get($tz));
?>

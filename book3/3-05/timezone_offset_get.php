<?php

	$dateTimeZoneAmsterdam= new DateTimeZone("Europe/Amsterdam");
	$dateTimeZoneSeoul = new DateTimeZone("Asia/Seoul");

	$dateTimeAmsterdam = new DateTime("now", $dateTimeZoneAmsterdam);
	$dateTimeSeoul = new DateTime("now", $dateTimeZoneSeoul);

	$timeOffset = $dateTimeZoneSeoul->getOffset($dateTimeAmsterdam);

	var_dump($timeOffset);
?>

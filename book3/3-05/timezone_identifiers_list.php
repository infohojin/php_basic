<?php
	$timezone_identifiers = DateTimeZone::listIdentifiers();
	for ($i=0; $i < 5; $i++) {
    	echo "$timezone_identifiers[$i]<br>";
	}
?>

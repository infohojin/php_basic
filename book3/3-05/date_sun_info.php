<?php
	$sun_info = date_sun_info(strtotime("2017-08-07"), 31.7667, 35.2333);
	foreach ($sun_info as $key => $val) {
    	echo "$key: " . date("H:i:s", $val) . "\n";
	}
?>

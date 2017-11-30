<?php
	$localtime = localtime();
	$localtime_assoc = localtime(time(), true);
	print_r($localtime);
	print_r($localtime_assoc);
?>

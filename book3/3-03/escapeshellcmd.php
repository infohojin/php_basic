<?php
	$command = './configure '.$_POST['options'];

	$escaped_command = escapeshellcmd($command);
 
	system($escaped_command);
?>

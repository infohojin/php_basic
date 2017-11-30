<?php
	$handle = popen('/bin/ls', 'r');
	pclose($handle);
?>

<?php
	$filename = 'lorem_ipsum.txt';

	$handle = fopen($filename, 'r+');
	ftruncate($handle, rand(1, filesize($filename)));
	rewind($handle);
	echo fread($handle, filesize($filename));
fclose($handle);
?>

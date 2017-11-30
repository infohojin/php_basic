<?php
	$d = dir("/home/php7");
	echo "Handle: " . $d->handle . "\n";
	echo "Path: " . $d->path . "\n";
	while (false !== ($entry = $d->read())) {
		echo $entry."<br>";
	}
	$d->close();
?>

<?php
	$filename = 'install.txt';
	$format = "%s's Group ID @ %s: %d <br>";
	printf($format, $filename, date('r'), filegroup($filename));

	// 100
	chgrp($filename, 8);

	// filegroup () 결과를 캐시하지 않습니다.
	clearstatcache();

	printf($format, $filename, date('r'), filegroup($filename));
?>

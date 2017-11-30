<?php
	$format = '%d/%m/%Y %H:%M:%S';
	$strf = strftime($format);

	echo "$strf\n";

	print_r(strptime($strf, $format));
?>

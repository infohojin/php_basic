<?php
	$today = unixtojd(mktime(0, 0, 0, 8, 6, 2017));
	print_r(cal_from_jd($today, CAL_GREGORIAN));
?>

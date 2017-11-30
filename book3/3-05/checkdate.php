<?php

	$year = "2017";
	$month = "06";
	$day = "33";

	if (checkdate($day,$month,$year)){
		echo "$year - $month - $day ";
		echo "유효한 날짜 입니다.<br>";
	} else {
		echo "$year - $month - $day ";
		echo "정확하지 않은 날짜입니다.<br>";
	}
?>

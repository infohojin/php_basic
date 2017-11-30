<?php
	$hour = date("H");
	$minute = date("i");
	$second = date("s");
	$month = date("n");
	$day = date("d");
	$year = date("Y");

	$timeStamp = mktime($hour, $minute, $second, $month, $day, $year);

	// 두번째 인자로 주어진 시간을 포맷에 맞게 출력합니다.
	echo date("Y-m-d H:i:s",$timeStamp);
?>
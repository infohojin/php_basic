<?php
	$time = gettimeofday();

	echo "현재 초 = " . $time['sec'] . "<br>";
	echo "마이크로 초 = " . $time['usec'] . "<br>";
	echo "서부 Greenwich 표준 = " . $time['minuteswest'] . "<br>";
	echo "섬머타임 보정 = " . $time['dsttime'] . "<br>";
?>

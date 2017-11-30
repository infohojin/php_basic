<?php
	$date = getdate();

	echo "초 = ". $date['seconds'] . "<br>";
	echo "분 = ". $date['minutes'] . "<br>";
	echo "시 = ". $date['hours'] . "<br>";
	echo "달날짜 = ". $date['mday'] . "<br>";
	echo "요일(숫자) = ". $date['wday'] . "<br>";
	echo "달(숫자) = ". $date['mon'] . "<br>";
	echo "연도 = ". $date['year'] . "<br>";
	echo "일년날짜수 = ". $date['yday'] . "<br>";
	echo "요일 = ". $date['weekday'] . "<br>";
	echo "달 = ". $date['month'] . "<br>";

?>

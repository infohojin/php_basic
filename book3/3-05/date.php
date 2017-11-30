<?php
	// 현재의 날짜와 시간을 표시합니다.
	echo date("Y-m-d H:i:s");
	echo "<br>";

	// 두번째 인자로 주어진 시간을 포맷에 맞게 출력합니다.
	echo date("Y-m-d H:i:s",mktime(0,0,0,1,1,2017));
?>

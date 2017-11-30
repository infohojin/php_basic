<?php

	// 현재 시간
	echo date('h:i:s') . "<br>";

	// 2 초간 대기합니다.
	usleep(2000000);

	// 시간 다시 표시
	echo date('h:i:s') . "<br>";

?>

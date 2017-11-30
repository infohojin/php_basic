<?php
	if (!($fp = fopen('date.txt', 'w'))) {
    	return;
	}

	// 지정한 포맷으로 파일 스트림에 출력합니다.
	fprintf($fp, "%04d-%02d-%02d", $year, $month, $day);

?>

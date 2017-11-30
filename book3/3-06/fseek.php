<?php

	$fp = fopen('readme.txt', 'r');

	// 데이터를 읽습니다.
	$data = fgets($fp, 4096);

	// rewind($fp) 와 같이 파일의 처음으로 이동합니다.
	fseek($fp, 0);

?>

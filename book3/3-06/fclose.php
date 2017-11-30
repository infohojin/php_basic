<?php

	$filename = './readme.txt';
	if (file_exists($filename)) {
		if ($fp = fopen($filename, "r")) {
			echo "파일 포인트를 읽기 전용으로 오픈합니다.<br>";

			fclose($fp);
		} else {
			echo "파일을 읽을 수 없습니다.<br>";
		}
	} else {
		echo "파일이 존재하지 않습니다.";
	}
	
?>

<?php
	$filename = "./readme.txt";

	if (file_exists($filename)) {
		echo $filename." 파일의 크기는".filesize($filename)." 입니다..<br>";
	} else {
		echo "파일을 찾을 수 없습니다.<br>";
	}

	$filename = "./readme2.txt";

	if (file_exists($filename)) {
		echo $filename." 파일의 크기는".filesize($filename)." 입니다..<br>";
	} else {
		echo "파일을 찾을 수 없습니다.<br>";
	}
?>

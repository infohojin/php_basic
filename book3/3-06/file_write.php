<?php
	$filename = "./log.txt";

	$fp = fopen($filename, "w");
	if ($fp) {
		echo "파일을 저장 할 수 있습니다.<br>";
	} else {
		echo "Err] 파일을 오픈할 수 없습니다.<br>";
	}
?>

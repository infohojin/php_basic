<?php
	$filename = "log.txt";

	// W 모드는 새로운 파일을 생성합니다. 파일을 저장하는 위치는 처음 입니다.
	$fp = fopen($filename, "w");
	if ($fp) {
		echo "파일 내용을 저장합니다.<br>";

		$log = $_SERVER['SERVER_NAME'].";". $_SERVER['REMOTE_ADDR'].";"." \n";
		$size = fwrite($fp, $log);
		echo "저장: $size<br>";
		
		fclose($fp);
	} else {
		echo "Err] 파일을 오픈할 수 없습니다.<br>";
	}

?>

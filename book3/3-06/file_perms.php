<?php
	$filename = "log.txt";

	// a 모드는 기존 파일에 새로운 추가 내용을 삽입합니다.
	$fp = fopen($filename, "a");
	if ($fp) {

		if (is_writeable($filename)) {
			echo "파일 저장허용.<br>";

			$log = $_SERVER['SERVER_NAME'].";". $_SERVER['REMOTE_ADDR'].";"." \n";
			$size = fwrite($fp, $log);
			echo "저장: $size<br>";
		
			fclose($fp);

		} else {
			echo "파일 쓰기 권한이 없습니다.<br>";
		}
		
	} else {
		echo "Err] 파일을 오픈할 수 없습니다.<br>";
	}

?>

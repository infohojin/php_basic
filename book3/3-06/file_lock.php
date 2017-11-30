<?php
	$filename = "log.txt";

	if (is_writeable($filename)) {
		echo "파일 저장허용.<br>";

		// a 모드는 기존 파일에 새로운 추가 내용을 삽입합니다.
		$fp = fopen($filename, "a");
		if (is_resource($fp)) {

			// 잠금 설정
			flock($fp, LOCK_EX);

			$log = $_SERVER['SERVER_NAME'].";". $_SERVER['REMOTE_ADDR'].";"." \n";
			$size = fwrite($fp, $log);
			echo "저장: $size<br>";
		
			// 버퍼 정리후에 잠금해제
			fflush($fp);
			flock($fp, LOCK_UN);

			fclose($fp);
		
		} else {
			echo "Err] 파일을 오픈할 수 없습니다.<br>";
		}

	} else {
		echo "파일 쓰기 권한이 없습니다.<br>";
	}

?>

<?php
	$filename = "log.txt";

	if (file_exists($filename)) {
		if (is_writeable($filename)) {
			unlink($filename);
			echo $filename." 파일을 삭제합니다.<br>";
		} else {
			echo "삭제 권한이 없습니다.<br>";
		}
	} else {
		echo "Err] 파일이 존재하지 않습니다.<br>";
	}

?>

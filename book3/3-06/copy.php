<?php
	$filename = "readme.txt";

	if (file_exists($filename)) {

		if (copy($filename, "readme_copy.txt")) {
			echo "복사 성공!<br>";
		} else {
			echo "복사 실패!<br>";
		}

	} else {
		echo "Err] 파일이 존재하지 않습니다.<br>";
	}

?>

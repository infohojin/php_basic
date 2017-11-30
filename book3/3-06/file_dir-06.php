<?php
	$pathDir = "aaa";

	if (is_dir($pathDir)) {
		echo "OK] $pathDir 디렉토리 작업이 가능합니다.<br>";		

		echo "새로운 디렉토리를 삭제합니다.<br>";
		if (rmdir($pathDir)) {
			echo "$pathDir 디렉토리를 삭제하였습니다.<br>";
		} else {
			echo "Err] 디렉토리 삭제 실패! <br>";
		}

	} else {
		echo "Err] $pathDir 디렉토리가 존재하지 않습니다.<br>";
	}

?>

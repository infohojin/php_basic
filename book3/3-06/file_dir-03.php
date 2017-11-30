<?php
	$pathDir = "aa/bb/cc";

	if (!is_dir($pathDir)) {
		echo "Err] $pathDir 디렉토리가 존재하지 않습니다.<br>";

		echo "새로운 디렉토리를 생성합니다.<br>";
		if (mkdir($pathDir,0777,true)) {
			echo "$pathDir 디렉토리를 생성하였습니다.<br>";
		} else {
			echo "Err] 디렉토리 생성 실패! <br>";
		}

	} else {
		echo "OK] $pathDir 디렉토리 작업이 가능합니다.<br>";
	}
?>

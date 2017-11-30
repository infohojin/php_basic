<?php

	$pathDir = "testing";

	if (!is_dir($pathDir)) {
		echo "Err] $pathDir 디렉토리가 존재하지 않습니다.<br>";
	} else {
		echo "OK] $pathDir 디렉토리 작업이 가능합니다.<br>";
	}

	$pathDir = "abcd";

	if (!is_dir($pathDir)) {
		echo "Err] $pathDir 디렉토리가 존재하지 않습니다.<br>";
	} else {
		echo "OK] $pathDir 디렉토리 작업이 가능합니다.<br>";
	}

	$pathDir = "abcd/123";

	if (!is_dir($pathDir)) {
		echo "Err] $pathDir 디렉토리가 존재하지 않습니다.<br>";
	} else {
		echo "OK] $pathDir 디렉토리 작업이 가능합니다.<br>";
	}

?>

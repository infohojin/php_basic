<?php
	
	// 현재의 디렉토리를 확인합니다.
	$path = getcwd();
	echo $path."<br>";
	echo "== 상위 디렉토리 패스 == ".dirname($path)."<br>";
	echo "<br>";

	$pathDir = "aa";
	echo "절대경로 ==> ".realpath("./".$pathDir)."<br><br>";

	if (!is_dir($pathDir)) {
		echo "Err] $pathDir 디렉토리가 존재하지 않습니다.<br>";
	} else {
		echo "OK] $pathDir 디렉토리 작업이 가능합니다.<br>";
		
		if (chdir($pathDir)) {
			echo "작업 디렉토리를 $pathDir 로 변경합니다.<br>";
		} else {
			echo "Err] 작업 디렉토리 변경 실패<br>";
		}
	}

	// 현재의 디렉토리를 확인합니다.
	$path = getcwd();
	echo $path."<br>";
	echo "== 상위 디렉토리 패스 == ".dirname($path)."<br>";
	echo "<br>";

?>

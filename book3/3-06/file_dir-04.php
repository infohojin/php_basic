<?php
	$pathDir = "./";

	if (is_dir($pathDir)) {
		echo "OK] $pathDir 디렉토리 작업이 가능합니다.<br>";

		$dirARR = scandir($pathDir);
		for ($i=0;$i<count($dirARR);$i++) {
			echo $dirARR[$i]."<br>";
		}

	} else {
		echo "Err] $pathDir 디렉토리가 존재하지 않습니다.<br>";
	}

?>

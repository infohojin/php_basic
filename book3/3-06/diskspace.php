<?php
	$pathDir = "./";

	if (is_dir($pathDir)) {
		echo "OK] $pathDir 디렉토리 작업이 가능합니다.<br>";		

		$totalSapce = disk_total_space($pathDir);
		$freeSpace = disk_free_space($pathDir);
		echo "여유공간:".$freeSpace." / 전체공간: $totalSapce <br>";

	} else {
		echo "Err] $pathDir 디렉토리가 존재하지 않습니다.<br>";
	}

?>

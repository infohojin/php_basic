<?php
	$dir = "/home/php7/";

	// 디렉토리를 열고 디렉토리를 변수로 읽어 들인후에 닫습니다.
	if (is_dir($dir)) {
    		if ($dh = opendir($dir)) {
        			$directory = readdir($dh);
        			closedir($dh);
    		}
	}
?>

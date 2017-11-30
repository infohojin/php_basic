<?php
	$dir = "/home/php7/";

	// O디렉토리를 열고 내용을 읽습니다.
	if (is_dir($dir)) {
    		if ($dh = opendir($dir)) {
        			while (($file = readdir($dh)) !== false) {
            			echo "파일명: $file : 파일타입: " . filetype($dir . $file) . "<br>";
        			}
        			closedir($dh);
    		}
	} else {
		echo $dir . " 디렉토리가 존재하지 않습니다.";
	}
?>

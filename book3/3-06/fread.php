<?php
	$filename = "./readme.txt";

	if (file_exists($filename)) {
		if ($fp = fopen($filename, "r")) {
			$contents = fread($fp, filesize($filename));
			echo $contents;
		}
		fclose($filename);
	} else {
		echo "파일을 찾을 수 없습니다.<br>";
	}
?>

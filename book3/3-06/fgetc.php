<?php
	$filename = './readme.txt';

	$fp = fopen($filename, "r") or die("파일을 읽을 수 없습니다!");

	// EOF 체크
	while (!feof($fp)) {
		
		$i++;
		echo $i.": ".fgetc($fp)."<br>";
	}
	echo "파일 카운트 : $i";

	fclose($fp);
?> 

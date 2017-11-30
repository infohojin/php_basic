<?php
	$filename = "readme.txt";

	if (file_exists($filename)) {

		// 파일 전체 출력
		echo "=== 파일 전체 출력 ===<br>";	
		$body = file_get_contents($filename);
		echo $body;

		// 한줄씩 출력
		echo "<br> === 한줄씩 출력 ===<br>";	
		$lines = file("readme2.txt");
		foreach ($lines as $line_num => $line) {
    		echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
		}

		// 파일 저장
		echo "<br> === 파일 저장 ===<br>";	
		file_put_contents("readme3.txt", $body);

	} else {
		echo "Err] 파일이 존재하지 않습니다.<br>";
	}

?>

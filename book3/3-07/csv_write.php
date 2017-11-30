<?php

	$list = array (
    	array(1, "aaa", 18, "Seoul"),
    	array(2, "bbb", 20, "Daejeon"),
    	array(3, "ccc", 30, "Incheon ")
	);

	$csvFile = "sample.csv";

	$fp = fopen($csvFile, 'w');
	if (!is_resource($fp)) {
		die("저장할 파일 포인터를 생성할 수 없습니다.");
	} else {

		// 파일 독점 잠금 설정
		flock($fp,LOCK_EX);

		// 배열을 CSV 파일로 저장
		foreach ($list as $fields) {
    			fputcsv($fp, $fields);
		}

		// 파일잠금 해제
		fflush($fp);
		flock($fp,LOCK_UN);
		
		fclose($fp);
	}
	
?>

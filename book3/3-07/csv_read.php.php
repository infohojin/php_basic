<?php
	$csvFile = "sample.csv";

	// 먼저 CSV 파일 존재 유무를 확인합니다.
	if(!file_exists($csvFile)){
		die("CVS 파일이 존재하지 않습니다.");
	} else {

		// CSV 파일을 읽어옵니다.
		$row = 1;
		if (($fp = fopen($csvFile, "r")) !== FALSE) {
			// CSV 데이터 한줄을 읽어 옵니다.
			$length = 1000;
			$delimiter = ",";
    			while (($data = fgetcsv($fp, $length, $delimiter)) !== FALSE) {
        				$colums = count($data);

        				echo "라인($row): 컬럼수($colums)<br/>";
        				$row++;
        				for ($i=0; $i < $colums; $i++) {
            				echo $data[$i] . "<br />";
        				}
    			}
    			fclose($fp);
		}

	}

?>

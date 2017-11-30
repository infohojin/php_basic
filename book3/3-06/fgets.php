<?php
	$filename = './readme2.txt';

	// @ 표시가 앞에 있으면 오류메시지를 표시하지 않겠다는 의미 입니다.
	$fp = @fopen($filename, "r");
	
	if ($fp) {
    		while (($buffer = fgets($fp, 4096)) !== false) {
        			echo "라인 ".$i++.": ".$buffer."<br>";
    		}
    
    		if (!feof($fp)) {
        			echo "Err] fgets() 읽기 실패\n";
    		}
    
    		fclose($fp);
	}
?>

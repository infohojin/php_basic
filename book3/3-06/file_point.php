<?php
	$filename = './readme.txt';

	if ($fp = fopen($filename, "r")){
		$data = fgets($fp);
		echo $data."<br>";
		echo "파일포인트 = ".ftell($fp);

		echo  "<br>";

		// 파일포인트 처음으로 이동
		fseek($fp, 0);
		$data = fgets($fp);
		echo $data."<br>";
		echo "파일포인트 = ".ftell($fp);

		fclose($fp);
	}

?>

<?php

	// 쌍따옴표를 사용하기 위해서 백슬래쉬를 추가
	$string = "
	
		[
			{ 
				\"Id\":\"01\", 
				\"FirstName\": \"lee\", 
				\"LastName\": \"hojin\", 
				\"Country\": \"Korea\" 
			},
			{ 
				\"Id\":\"02\", 
				\"FirstName\": \"jiny\", 
				\"LastName\": \"PHP\", 
				\"Country\": \"Korea\" 
			}
		]
	
	";
	
	echo "=== JSON 문자열 ===<br>";
	echo $string;
	echo "<br>";

	echo "=== 배열처리 ===<br>";
	$arr = json_decode($string);

	for ($i=0;$i<count($arr);$i++){
		echo "첫번재 배열 $i <br>";

		while(list($key,$val) = each($arr[$i])){
			echo $key. "==>" .$val. "<br>";
		}
	}	

?>

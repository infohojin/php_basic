<?php

	// 쌍따옴표를 사용하기 위해서 백슬래쉬를 추가
	$string = "
	{ 
		\"Id\":\"01\", 
		\"FirstName\": \"lee\", 
		\"LastName\": \"hojin\", 
		\"Country\": \"Korea\" 
	}
	";
	
	echo "=== JSON 문자열 ===<br>";
	echo $string;
	echo "<br>";

	echo "=== 배열처리 ===<br>";
	$arr = json_decode($string);

	while(list($key,$val) = each($arr)){
		echo $key. "==>" .$val. "<br>";
	}

?>

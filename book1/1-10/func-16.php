<?php

	// 성인여부를 판별하는 함수를 하나 생성합니다.
	// 인수로는 나이값 변수 하나를 전달합니다.
	function is_adult($age){
		if($age>=18){
			return true;
		} else {
			return flase;
		}
	}

	$memAge = 20;

	if(is_adult($memAge)){
		echo "성인입니다.";
	} else {
		echo "미성년 입니다.";
	}

?>

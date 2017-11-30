<?php
	// 배열을 생성합니다.
	$arr = array('하나', '둘', '셋', '넷', '다섯', '여섯', '일곱', '여덟', '아홉', '열');
 
 	// 첫번째 인자: 추출 시작값
 	// 처음 2부터 끝까지.
 	$slice = array_slice($arr, 2);
	while(list($key,$val) = each($slice)){
		echo $key. "==>" .$val. ", ";
	}

	echo "<br>";
	
	// 두번째 인자: 추출 데이터 갯수
	// 처음 1부터, 3개의 데이터를 추출
 	$slice = array_slice($arr, 1,3);
	while(list($key,$val) = each($slice)){
		echo $key. "==>" .$val. ",";
	}

	echo "<br>";
	
	// 처음 인자가 음수이면 끝에서 -인자 수터 시작하여 , 두번째 인자 갯수를 추출
	// 마지막 -5 위치부터(여섯), 3개의 데이터를 추출
 	$slice = array_slice($arr, -5,3);
	while(list($key,$val) = each($slice)){
		echo $key. "==>" .$val. ",";
	}

?>

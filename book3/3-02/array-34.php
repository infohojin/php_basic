<?php
	$arr = array('하나'=>'orage', '둘'=>'apple', '셋'=>'grape');

	function arr_print($arr1, $key){
		// 호출된 배열의 값을 출력합니다.
		echo $key ." = ". $arr1."<br>";
	}

	// 배열값과 사용정의 함수 arr_print 를 호출합니다.
	array_walk($arr,'arr_print');

	// 배열의 포인터를 처음위치로 초기화 합니다.
	reset($arr);

	echo "<br>";

	function arrKey_print(&$arr1, $key, $value){
		echo $value . $key ." = ". $arr1 . "<br>";

	}
	// 배열값과 사용정의 함수 arrKey_print 를 호출합니다.
	array_walk($arr,'arrKey_print',"테스트2: ");

	// 배열의 포인터를 처음위치로 초기화 합니다.
	reset($arr);

?>
<?php
	// 배열 변수를 생성합니다.
	// 입력한 값에 대한 배열 값을 반환 합니다.
	$arr1 = array("hojin","jiny","james","eric");

	// 배열값을 foreach 를 통하여 하나씩 출력을 합니다.
	foreach ($arr1 as $value) {
		echo "$value <br>";
	}

	echo "===== <br>";
    
	// 키형태의 배열을 지정합니다.
	$arr2 = array('firstname' => "hojin", 'lastname' => "lee" );
	foreach ($arr2 as $key => $value) {
		echo "{$key} => {$value} ";
		print_r($arr);
	}

?>

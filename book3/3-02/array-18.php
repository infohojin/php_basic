<?php
	// 배열을 생성합니다.
	$arr = array('orage', 'apple', 'grape');

	// $arr 배열에 두개의 원소를 추가합니다.
	array_push($arr, 'banana', 'tomato');

	while(list($key,$val) = each($arr)){
		echo $key. "==>" .$val. "<br>";
	}
?>

<?php
	// 배열을 생성합니다.
	$arr = array('orage', 'apple', 'grape');
 
	// 배열 원소를 삭제 합니다.
	$temp = array_shift($arr);
	echo "배열에서 처음 $temp 요소 하나를 제거합니다.<br> ";
 
	while(list($key,$val) = each($arr)){
		echo $key. "==>" .$val. "<br>";
	}
?>

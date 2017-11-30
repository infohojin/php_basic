<?php
	
	$one = "하나";
	$two = "두개";
	$three = "세개";
	$four = "네게";

	// 배열에 변수의 값을 넣기 위해서는 "" 로 변수명을 입력 하면 됩니다. 
	$num = array("three", "four");

	// 배열을 넣을때는 배열명만 인수로 전달 합니다.
	$arr = compact("one", "two", $num);

	while(list($key,$val) = each($arr)){
		echo $key. "==>" .$val. "<br>";
	}

?>

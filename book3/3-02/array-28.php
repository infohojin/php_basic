<?php
	// 배열을 생성합니다.
	$arr = array('하나', '둘', '셋', '넷', '다섯', '여섯', '일곱', '여덜', '아옵', '열');
	echo "원본<br>";
 	while(list($key,$val) = each($arr)){
		echo $key. "==>" .$val. ", ";
	}
	echo "<br> ======================= <br>";

	// 배열의 포인터를 처음으로 이동합니다.
	reset($arr);

	// 디음 배열의 포인터를 이동합니다.
	next($arr);
	echo "현재 포인트 = " . current($arr) . "<br>";

	// 디음 배열의 포인터를 이동합니다.
	next($arr);
	echo "현재 포인트 = " . pos($arr) . "<br>";

	// 마지막 배열의 포인터를 이동합니다.
	end($arr);
	echo "현재 포인트 = " . current($arr) . "<br>";

	// 이전 배열의 포인터를 이동합니다.
	prev($arr);
	echo "현재 포인트 = " . pos($arr) . "<br>";

?>

<?php
	// 배열을 생성합니다.
	$arr = array('하나', '둘', '셋', '넷', '다섯', '여섯', '일곱', '여덜', '아옵', '열');
	echo "원본<br>";
 	while(list($key,$val) = each($arr)){
		echo $key. "==>" .$val. ", ";
	}
	echo "<br><br>";

 	// 첫번째 인자: 삭제 시작값
 	// 2까지의 원소를 삭제하고 반환
 	$slice = array_splice($arr, 7);
	while(list($key,$val) = each($slice)){
		echo $key. "==>" .$val. ", ";
	}
	echo "를 삭제하였습니다.<br>";
	echo "<br>";
	
	$slice = array_splice($arr, 3,3);
	while(list($key,$val) = each($slice)){
		echo $key. "==>" .$val. ", ";
	}
	echo "를 삭제하였습니다.<br>";
	echo "<br>";

?>

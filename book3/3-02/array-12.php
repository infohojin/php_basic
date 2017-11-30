<?php
	$arr1 = array('지니', '호진');
	$arr2 = array('철수', '영수');
	$arr3 = array('제니퍼', '홍길동');

	$arr = array_merge($arr1, $arr2, $arr3);

	while(list($key,$val) = each($arr)){
		echo $key. "==>" .$val. "<br>";
	}

?>

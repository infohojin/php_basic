<?php

	$arr = array('one'=>'하나', 'two'=>'둘', 'three'=>'셋', 'four'=>'넷', 'five'=>'다섯', 'six'=>'여섯', 'seven'=>'일곱');
	
	echo "오름차순 정렬<br>";
	sort($arr);
	while(list($key,$val) = each($arr)){
		echo $key. "==>" .$val. ", ";
	}

	echo "<br>";
	echo "내림차순 정렬<br>";
	rsort($arr);
	while(list($key,$val) = each($arr)){
		echo $key. "==>" .$val. ", ";
	}

	echo "<br>";
	echo "이중 오름차순 정렬<br>";
	asort($arr);
	while(list($key,$val) = each($arr)){
		echo $key. "==>" .$val. ", ";
	}

	echo "<br>";
	echo "이름키 오름차순 정렬정렬<br>";
	ksort($arr);
	while(list($key,$val) = each($arr)){
		echo $key. "==>" .$val. ", ";
	}

	echo "<br>";
	echo "이름키 내림차순 정렬정렬<br>";
	krsort($arr);
	while(list($key,$val) = each($arr)){
		echo $key. "==>" .$val. ", ";
	}

?>

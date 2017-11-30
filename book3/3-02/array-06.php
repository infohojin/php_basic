<?php
	// 배열을 생성합니다.
	$arr = array('firstname' => "hojin", 'lastname' => "lee" );
	while(list($key,$val) = each($arr)){
		echo $key. "==>" .$val. ", ";
	}
	echo "<br> ==== <br>";

	$arr2 = array_values($arr);
	while(list($key,$val) = each($arr2)){
		echo $key. "==>" .$val. ", ";
	}
?>

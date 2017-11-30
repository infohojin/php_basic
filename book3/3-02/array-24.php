<?php
	$array = array('first' => null, 'second' => 4);

	// returns true
	if (array_key_exists('first', $array)){
		echo "배열에 키 값이 존재합니다.";
	} else {
		echo "키값이 없습니다.";
	}
?>

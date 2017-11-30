<?php
	$arr = array('orage', 'apple', 'grape', 'orage', 'apple', 'grape', 'orage');

	$arr_count = array_count_values($arr);
	while(list($key,$val) = each($arr_count)){
		echo $key. "==>" .$val. "<br>";
	}

?>

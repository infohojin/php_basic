<?php
	$int = 122;
	$min = 1;
	$max = 200;

	$range = array("options" => array("min_range"=>$min, "max_range"=>$max);
 
	if (filter_var($int, FILTER_VALIDATE_INT, $range)) === false) {
    		echo("변수 값이 유효한 범위 내에 있지 않습니다.!");
	} else {
    		echo("변수 값이 유효한 범위 내에 있습니다.!");
	}
?> 

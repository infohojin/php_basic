<?php
	$int = 100;
 
	if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    		echo("정수가 유효합니다");
	} else {
    		echo("정수가 아닙니다");
	}
?>

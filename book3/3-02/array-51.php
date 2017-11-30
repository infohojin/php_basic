<?php
	$arr = array("FirSt" => 1, "SecOnd" => 4);

	// 대문자
	$UPPER = array_change_key_case($arr, CASE_UPPER);
	print_r($UPPER);

	echo "<br> ===== <br>";
	// 소문자
	$LOWER = array_change_key_case($arr, CASE_LOWER);
	print_r($LOWER);
?>

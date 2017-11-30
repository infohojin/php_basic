<?php
	
	$string = "
		[10, {\"a\":20}, [30,\"서른\"] ]
	";

	echo "=== JSON 문자열 ===<br>";
	echo $string;
	echo "<br>";

	echo "=== 배열처리 ===<br>";
	$arr = json_decode($string);
	print_r($arr);

?>

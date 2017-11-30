<?php
	
	$string = "
		{\"name1\":10,\"name2\":\"안녕하세요\",\"name3\":true}
	";

	echo "=== JSON 문자열 ===<br>";
	echo $string;
	echo "<br>";

	echo "=== 배열처리 ===<br>";
	$arr = json_decode($string);
	print_r($arr);

?>

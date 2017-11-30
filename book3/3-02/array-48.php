<?php
	$country = array("korea", "usa", "japan", "china", "frach", "canada");
	
	// 배열에서 임의 값 2개를 추출 합니다.
	$keys = array_rand($country, 2);

	echo $country[$keys[0]] . "\n";
	echo $country[$keys[1]] . "\n";

?>

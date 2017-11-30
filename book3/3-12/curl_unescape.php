<?php

	$ch = curl_init();

	// GET 파라미터로 사용되는 문자열 값을 RFC3986 인코딩 합니다.
	$location = curl_escape($ch, 'aaa / bbb');

	$url = "http://example.com/test.php?location={$location}";
	echo $url . "<br>";

	echo curl_unescape($ch , $location);

?>

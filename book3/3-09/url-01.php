<?php
	$url = 'http://username:password@hostname:9090/path?arg=value#anchor';
 
 	// url을 분석하여 배열로 반환합니다.
	print_r(parse_url($url));
	echo "<br>";

	// 키값을 통해서 하나씩 추출이 가능합니다.
	echo "PHP_URL_SCHEME = ". parse_url($url, PHP_URL_SCHEME)."<br>";

	echo "PHP_URL_USER =". parse_url($url, PHP_URL_USER) ."<br>";
	echo "PHP_URL_PASS =". parse_url($url, PHP_URL_PASS) ."<br>";
	echo "PHP_URL_HOST =". parse_url($url, PHP_URL_HOST) ."<br>";
	echo "PHP_URL_PORT =". parse_url($url, PHP_URL_PORT) ."<br>";
	echo "PHP_URL_PATH =". parse_url($url, PHP_URL_PATH) ."<br>";
	echo "PHP_URL_QUERY =". parse_url($url, PHP_URL_QUERY) ."<br>";
	echo "PHP_URL_FRAGMENT =". parse_url($url, PHP_URL_FRAGMENT) ."<br>";

?>

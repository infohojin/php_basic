<?php
	$url = "http://www.jinyphp.com/index.php";
	$encode = urlencode($url);
	echo "인코딩 = ". $encode."<br>";
	echo "디코드 = ". urldecode($encode)."<br>";

	$encode2 = urlencode("?aaa=1&bbb=2");
	echo "인코딩 = ". $url.$encode2."<br>";
	echo "디코드 = ". $url.urldecode($encode2)."<br>";
?>

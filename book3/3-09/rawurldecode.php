<?php
	$url="http://www.jinyphp.com/?name=jiny&country=korea";
	echo "URL = " . $url . "<br>";

	$urlEncode = rawurlencode($url);
	echo "엔코딩 : ". $urlEncode . "<br>";

	$urlDecode = rawurldecode($urlEncode);
	echo "디코딩 : ". $urlDecode . "<br>";

?>

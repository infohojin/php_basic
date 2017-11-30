<?php
	$ip = getenv('REMOTE_ADDR');
	echo "접속주소 : $ip <br>";

	// 글로벌 환경 변수 값을 통하여도 읽어 올 수 있습니다.
	$ipAddr = $_SERVER['REMOTE_ADDR'];
	echo "접속주소 : $ipAddr <br>";
?>

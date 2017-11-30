<?php
	// cURL 공유 핸드를 초기화 합니다.
	// 쿠기값과 같은 공유 옵션을 설정합니다.
	$sh = curl_share_init();
	curl_share_setopt($sh, CURLSHOPT_SHARE, CURL_LOCK_DATA_COOKIE);

	$ch1 = curl_init("http://example.com/");
	// 공유 핸들의 옵션을 통하여 ch1의 curl 핸들 옵션을 설정합니다.
	curl_setopt($ch1, CURLOPT_SHARE, $sh);
	curl_exec($ch1);

	$ch2 = curl_init("http://php.net/");
	// 공유 핸들의 옵션을 통하여 ch2의 curl 핸들 옵션을 설정합니다.
	curl_setopt($ch2, CURLOPT_SHARE, $sh);
	curl_exec($ch2);

	// 공유 핸들을 종료 합니다.
	curl_share_close($sh);

	curl_close($ch1);
	curl_close($ch2);
?>

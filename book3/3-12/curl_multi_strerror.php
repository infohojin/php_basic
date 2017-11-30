<?php

	$ch1 = curl_init("http://example.com");
	$ch2 = curl_init("http://www.php.net/");

	$mh = curl_multi_init();

	curl_multi_add_handle($mh, $ch1);
	curl_multi_add_handle($mh, $ch2);

	// 멀티 실행 여부 체크 플레그
	$active = null;

	do {
    	$status = curl_multi_exec($mh, $active);
    	// Check for errors
    	if($status > 0) {
        	// Display error message
        	echo "ERROR!\n " . curl_multi_strerror($status);
    	}
	} while ($status === CURLM_CALL_MULTI_PERFORM || $active);
?>

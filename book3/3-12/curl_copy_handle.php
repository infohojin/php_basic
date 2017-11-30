<?php

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'http://www.example.com/');
	curl_setopt($ch, CURLOPT_HEADER, 0);

	// cURL handle을 복사합니다.
	$ch2 = curl_copy_handle($ch);
	curl_exec($ch2);

	curl_close($ch2);
	curl_close($ch);
?>

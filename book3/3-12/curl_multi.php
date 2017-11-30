<?php
	
	// cURL 단일 핸들을 초기화 합니다.
	$ch1 = curl_init();
	// 각각의 핸들에 옵션값을 설정합니다.
	$url1 = "http://www.example.com/";
	curl_setopt($ch1, CURLOPT_URL, $url1);
	curl_setopt($ch1, CURLOPT_HEADER, 0);

	// cURL 단일 핸들을 초기화 합니다.
	$ch2 = curl_init();	
	// 각각의 핸들에 옵션값을 설정합니다.
	$url2 = "http://www.example.com/";
	curl_setopt($ch2, CURLOPT_URL, $url2 );
	curl_setopt($ch2, CURLOPT_HEADER, 0);

	//멀티 핸들을 생성합니다.
	$mh = curl_multi_init();

	//멀티 핸들에 단일핸들 들을 추가합니다.
	curl_multi_add_handle($mh,$ch1);
	curl_multi_add_handle($mh,$ch2);

	// 멀티 실행 여부 체크 플레그
	$active = null;
	
	do {
		// 멀티 핸들을 실행합니다.
    		$mrc = curl_multi_exec($mh, $active);
	} while ($mrc == CURLM_CALL_MULTI_PERFORM);

	while ($active && $mrc == CURLM_OK) {
	
		// curl_multi 연결에 대한 작업을 대기합니다.
		// 실패시 -1을 반환
		if (curl_multi_select($multi) == -1) {        	
			// 마이크로 초 지연 실행
			usleep(1);

		} else {
			do {
        				// 멀티 핸들을 실행합니다.
            			$mrc = curl_multi_exec($mh, $active);
        			} while ($mrc == CURLM_CALL_MULTI_PERFORM);
	
		}
    	
	}

	// 멀티 핸들에서 단일 핸들을 제거합니다.
	curl_multi_remove_handle($mh, $ch1);
	curl_multi_remove_handle($mh, $ch2);
	
	// 멀티 cURL 핸들을 종료합니다.
	curl_multi_close($mh);
	
?>

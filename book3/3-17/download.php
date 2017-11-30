<?php

 	$server_filename= "./sample.csv";

 	// $server_filenam에서 파일명 부분만 추출합니다.
 	$filename = substr($server_filename, strrpos($server_filename,'/') + 1);  

 	// 서버의 파일명을 확인합니다. 
	// 파일이 존재하지 않거나 읽을 수가 없을때 처리를 중단합니다. 
 	if (!file_exists($server_filename) || !is_readable($server_filename)) {
		die("파일을 읽을 수 없습니다.");
	} else {
		// 파일 사이즈를 체크합니다.
		if (($filesize = filesize($server_filename)) == 0) {
			die("파일크기가 0 바이트 입니다.\n");
		} else {
			if (($fp = @fopen($server_filename, 'rb')) === false) {
				die("파일을 읽을 수 없습니다.\n");
			}
		}  
	}


	// UTF-8 파일명이 깨지지 않도록 하기 위해서 
	// 파일명에 사용할 수 없는 문자를
	// 모두 제거합니다. 또는 다른 안전한 문자로 치환합니다.(RFC2231/5987 표준)   
	$illegal = array('\\', '/', '<', '>', '{', '}', ':', ';', '|', '"', '~', '`', '@', '#', '$', '%', '^', '&', '*', '?');
	$replace = array('', '', '(', ')', '(', ')', '_', ',', '_', '', '_', '\'', '_', '_', '_', '_', '_', '_', '', '');
	$filename = str_replace($illegal, $replace, $filename);
	$filename = preg_replace('/([\\x00-\\x1f\\x7f\\xff]+)/', '', $filename);    

	// 유니코드 공백 문자를 일반 공백 문자(0x20)로 변경을 합니다.
	$filename = trim(preg_replace('/[\\pZ\\pC]+/u', ' ', $filename));    

	// 중복된 점, 대체문자를 정리합니다.
	$filename = trim($filename, ' .-_');
	$filename = preg_replace('/__+/', '_', $filename);
	if ($filename === '') {
		die("파일명 이름 변환처리 실패");
	}


	// 브라우저의 User-Agent 값 처리
	USER_AGENT = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
	$old_ie = (bool)preg_match('#MSIE [3-8]\.#', $USER_AGENT);    

	// 브라우저별 해더 파일명을 정리합니다.
	if (preg_match('/^[a-zA-Z0-9_.-]+$/', $filename)) {
		// 파일명에 숫자와 영문으로만 된경우
		// 브라우저 상관없이 파일명을 해더로 처리를 합니다.
		$header = 'filename="' . $filename . '"';

	} elseif ($old_ie || preg_match('#Firefox/(\d+)\.#', $USER_AGENT, $matches) 
			&& $matches[1] < 5) {
		// IE 9 미만 , Firefox 5 미만의 경우 처리.
		$header = 'filename="' . rawurlencode($filename) . '"';
    
	} elseif (preg_match('#Chrome/(\d+)\.#', $USER_AGENT, $matches) 
			&& $matches[1] < 11) {
		// Chrome 11 미만의 경우.
		$header = 'filename=' . $filename;

	} elseif (preg_match('#Safari/(\d+)\.#', $USER_AGENT, $matches) 
			&& $matches[1] < 6) {
		// Safari 6 미만의 경우.
		$header = 'filename=' . $filename;

	} elseif (preg_match('#Android #', $USER_AGENT, $matches)) {
		// 안드로이드 브라우저의 경우. 
		$header = 'filename="' . $filename . '"';

	} else {
		// RFC2231/5987 표준 준수
		$header = "filename*=UTF-8''" . rawurlencode($filename) . 
			'; filename="' . rawurlencode($filename) . '"';
	}

	// 캐쉬처리
	// 캐쉬 처리를 위해서 Cache-Control, Expires 등의 헤더를 적용합니다.
	if (!$expires) {        
		// 캐싱 금지
		if ($old_ie) {
			// 익스플로러 8 이하 버전
			// SSL 사용시 no-cache 및 pragma 헤더 오류를 발생
			header('Cache-Control: private,
					 must-revalidate, 
					post-check=0, 
					pre-check=0');
			header('Expires: Sat, 01 Jan 2000 00:00:00 GMT');
		} else {
			header('Cache-Control: no-store, 
					no-cache, 
					must-revalidate, 
					post-check=0, 
					pre-check=0');
			header('Expires: Sat, 01 Jan 2000 00:00:00 GMT');
		}

	} else {
		// 캐싱 허용
		header('Cache-Control: max-age=' . (int)$expires);
		header('Expires: ' . gmdate('D, d M Y H:i:s', time() + (int)$expires) . ' GMT');
	}

	// 다운로드 이어받기 해더처리
	// Range 헤더 자동 감지, Accept-Ranges 헤더 자동 생성
	if (isset($_SERVER['HTTP_RANGE']) && preg_match('/^bytes=(\d+)-/', 			$_SERVER['HTTP_RANGE'], $matches)) {
        		$range_start = $matches[1];

		if ($range_start < 0 || $range_start > $filesize) {
			header('HTTP/1.1 416 Requested Range Not Satisfiable');
			return false;
		}

		header('HTTP/1.1 206 Partial Content');
		header('Content-Range: bytes ' . $range_start . '-' . ($filesize - 1) . '/' . $filesize);
		header('Content-Length: ' . ($filesize - $range_start));

	} else {

		$range_start = 0;
		header('Content-Length: ' . $filesize);

	}
	
	// 그외 헤더를 전송한다.
	header('Accept-Ranges: bytes');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; ' . $header);

	// 출력 버퍼를 초기화.
	// 대용량 파일 다운로드시 메모리 누수를 방지합니다.
	while (ob_get_level()) {
		ob_end_clean();
	}

	// 파일을 64KB 단위로 분할 전송
	// readfile() 함수의 메모리 누수 방지
	$block_size = 16 * 1024;
	$speed_sleep = $speed_limit > 0 ? round(($block_size / $speed_limit / 1024) * 1000000) : 0;

	$buffer = '';
	if ($range_start > 0) {
		fseek($fp, $range_start);
		$alignment = (ceil($range_start / $block_size) * $block_size) - $range_start;

		if ($alignment > 0) {
			$buffer = fread($fp, $alignment);

            		echo $buffer;
            		unset($buffer);
            		flush();
        		}
	}

	while (!feof($fp)) {
		$buffer = fread($fp, $block_size);
		echo $buffer;
		unset($buffer);
		flush();
		usleep($speed_sleep);
	}

	fclose($fp); 
  
?>

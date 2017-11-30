<?php

	$ch = curl_init('http://www.example.com/');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	// curl_exec()로 실행 된 핸들에 curl_multi_getcontent()를 사용할 수 있습니다.
	$result = curl_exec($ch);

	// curl_multi_getcontent()는 curl_exec ()와 같은 결과값을 반환합니다.
	$content = curl_multi_getcontent($ch);

	var_dump($result === $content);
	echo $content;
	
	curl_close($ch);
?>

<?php
	// 존재하지 않은 url의 세션을 초기화 합니다. 
	$ch = curl_init('http://404.php.net/');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	if (curl_exec($ch) === false)
	{
		// 오류 발생시 : 오류 메시지를 읽어옵니다.
    	echo "Curl error Message : ". curl_error($ch) ."<br>";
    	
    	// 오류 넘버를 출력합니다.
    	$errNo = curl_errno ($ch);
    	echo "cURL Error No : ". $errNo;

    	echo " == ". curl_strerror($errNo);

	} else {
    	echo 'success';
	}

	// 종료
	curl_close($ch);
?>

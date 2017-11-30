<?php
	// 메일 메시지 본문
	$message = "내용1\r\n 내용2\r\n 내용3";

	// 메일 내용이 길어진 경우 wordwarp() 함수를 통하여 넘길 수 있습니다.
	$message = wordwrap($message, 70, "\r\n");

	$to = "infohojin@naver.com";
	$subject = "메일 테스트";

	$header = 'From: infohojin@naver.com' . "\r\n" .
    'Reply-To: infohojin@naver.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
	// Send
	mail($to, $subject, $message, $headers);
?>

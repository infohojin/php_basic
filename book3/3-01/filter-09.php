<?php
	$email = "infohojin@naver.com";
 
	// 이메일에 포함된 부정한 글자들은 제거를 합니다.
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
 
	// e-mail 유효성
	if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    	echo("$email is a valid email address");
	} else {
    	echo("$email is not a valid email address");
	}
?>

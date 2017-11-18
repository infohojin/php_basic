<?php
	$cookie_name = "user";
	$cookie_value = "jiny";
	if(setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/")){
		// 86400 = 1 day
		echo "쿠키생성 성공";
	} else {
		echo "쿠키생성 실패";
	}
?>
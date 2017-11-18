<?php
	if(isset($_COOKIE['user'])) {
		echo $_COOKIE['user'];
	} else {
		echo "쿠키가 없습니다.";
	}

	echo "<br>";

	$cookie_name = "user";
	$cookie_value = "jinyPHP";
	if(setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/")){
		// 86400 = 1 day
		echo "쿠키변경 성공";
	} else {
		echo "쿠키변경 실패";
	}

?>

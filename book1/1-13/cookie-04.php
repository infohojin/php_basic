<?php
	if(isset($_COOKIE['user'])) {
		$__cookie_user = $_COOKIE['user'];
	} else {
		echo "쿠키가 없습니다.";
	}

	echo "현재의 쿠키값 = $__cookie_user<br>";

	$cookie_name = "user";
	$__cookie_user = "jinyPHP";
	if(setcookie($cookie_name, $__cookie_user, time() + (86400 * 30), "/")){
		// 86400 = 1 day
		echo "쿠키변경 성공";
	} else {
		echo "쿠키변경 실패";
	}

	echo "쿠키변경후 다시확인 = ".$_COOKIE['user']."<br>";
	echo "페이지 재로드 하시면, 변경된 쿠키를 확인합니다. <br>";

	echo "쿠키값 별도에 저장 = ". $__cookie_user."해서 사용하면 편리합니다. ";

?>